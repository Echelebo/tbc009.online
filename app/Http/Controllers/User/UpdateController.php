<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DepositCoin;
use App\Models\Update;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    //index of all deposits
    public function index(Request $request)
    {
        $page_title = 'Updates';

        $recoveries = user()
            ->updates()->first() ?? 'none';

        $coins = DepositCoin::where('status', 1)->get();

        return view('user.updates.index', compact(
            'page_title',
            'recoveries',
            'coins',
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
