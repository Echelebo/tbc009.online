<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    //index of all withdrawals
    public function index(Request $request)
    {
        $page_title = 'Explorer';

        if ($request->s) {
            $transactions = user()
                ->transaction()
                ->where('description', 'LIKE', '%' . $request->s . '%')
                ->orderBy('id', 'DESC')
                ->paginate(site('pagination'));
        } else {
            $transactions = user()
                ->transaction()
                ->orderBy('id', 'DESC')
                ->paginate(site('pagination'));
        }

        return view('user.explorer.index', compact(
            'page_title',
            'transactions'
        ));
    }

}
