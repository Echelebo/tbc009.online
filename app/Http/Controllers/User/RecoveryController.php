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

        return view('user.recovery.index', compact(
            'page_title',
        ));
    }

}
