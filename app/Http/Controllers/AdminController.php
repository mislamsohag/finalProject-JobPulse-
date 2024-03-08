<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function companies()
    {
        return view('backend.admin.companies');
    }

    public function dashboard()
    {
       return view('backend.admin.dashboard');
    }

    public function employee()
    {
       return view('backend.employee');
    }
    public function adminJobs()
    {
        return view('backend.admin.adminJobs');
    }
    public function adminBlogs()
    {
        return view('backend.admin.adminBlogs');
    }

    public function plugins()
    {
        return view('backend.admin.plugins');
    }
}
