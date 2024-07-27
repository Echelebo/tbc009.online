<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //index of all deposits
    public function index(Request $request)
    {
        $page_title = 'Updates';

        return view('user.updates.index', compact(
            'page_title',
        ));
    }

    public function newUpdates(Request $request)
    {
        $request->validate([
            'paymenthash' => 'required',
        ]);

        //check min and max
        $paymenthash = $request->paymenthash;

        $deposit = new Update();
        $deposit->user_id = user()->id;
        $deposit->paymenthash = $paymenthash;
        $deposit->status = 0;
        $deposit->save();

        return response()->json(['message' => 'Payment Submitted']);
    }

}
