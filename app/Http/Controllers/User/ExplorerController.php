<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class ExplorerController extends Controller
{
    //index of all withdrawals
    public function index(Request $request)
    {
        $page_title = 'Explorer';

        if ($request->s) {
            $transactions = Transaction::where('description', 'LIKE', '%' . $request->s . '%')
                ->orderBy('id', 'DESC')
                ->paginate(50);
        } else {
            $transactions = Transaction::orderBy('id', 'DESC')
                ->paginate(50);
        }

        return view('user.explorer.index', compact(
            'page_title',
            'transactions',
        ));
    }

}
