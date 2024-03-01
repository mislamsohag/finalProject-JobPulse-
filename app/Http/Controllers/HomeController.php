<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $companies=Company::all();
        // dd($companies);

        $allJobs=Job::all();
        return view('frontend.pages.home' , compact('companies', 'allJobs'));
    }
}
