<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $companies=Company::all();
        // dd($companies);
        $allJobs=Job::all();

        $categories=Category::all(['name','id']);
        // dd($categories);
        return view('frontend.pages.home' , compact('companies', 'allJobs', 'categories'));
    }
}
