<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Updates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UpdatesController extends Controller
{
    //index of all deposits
    public function index(Request $request)
    {
        $page_title = 'Updates';

        return view('user.updates.index', compact(
            'page_title',

        ));
    }

}
