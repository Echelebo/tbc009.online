<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Recovery;
use Illuminate\Http\Request;

class RecoveryController extends Controller
{
    //return the kyc index page
    public function index()
    {
        $page_title = 'Recovery';

        $recoveries = user()
            ->recovery()->first() ?? 'none';

        return view('user.recovery.index', compact(
            'page_title',
            'recoveries',
        ));
    }
    public function newRecovery(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'selectedcurrency' => 'required',
            'proposedbal' => 'required',
            'supportinfo' => 'required',
        ]);

        //check min and max
        $name = $request->name;
        $email = $request->email;
        $selectedcurrency = $request->selectedcurrency;
        $proposedbal = $request->proposedbal;
        $supportinfo = $request->supportinfo;

        $deposit = new Recovery();
        $deposit->user_id = user()->id;
        $deposit->name = $name;
        $deposit->email = $email;
        $deposit->selectedcurrency = $selectedcurrency;
        $deposit->proposedbal = $proposedbal;
        $deposit->supportinfo = $supportinfo;
        $deposit->status = 0;
        $deposit->save();

        return response()->json(['message' => 'Recovery Request Submitted']);
    }

}
