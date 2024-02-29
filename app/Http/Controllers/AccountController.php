<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function accountPage(){
        return view('backend.candidate.accountPage');
    }
}
