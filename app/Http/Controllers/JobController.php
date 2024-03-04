<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use Exception;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class JobController extends Controller
{

    public function index(){
        return view('frontend.pages.jobs');
    }
    public function jobPostPage(Request $request){
        $userId=$request->header('id');
        $companies=Company::where('user_id', $userId)->get();
        // dd($company);

        $categories=Category::all();
        return view('backend.company.jobPostPage', compact('categories', 'companies'));
    }
    public function jobPost(Request $request){
        // dd($request->input());
        $userId=$request->header('id');
        // dd($userId);        

         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'response' => 'required',
            'benefits' => 'required',
            'education' => 'required',
            'work_mode' => 'required',
            'job_type' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'vacancy' => 'required',
            'age_range' => 'required',
            'job_location' => 'required',
            'salary' => 'required',
            'deadline' => 'required',
            'category_id' => 'required',
            'company_id' => 'required',            
        ]);

        try{
            Job::create([               
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'response'=>$request->input('response'),
                'benefits'=>$request->input('benefits'),
                'education'=>$request->input('education'),
                'work_mode'=>$request->input('work_mode'),
                'job_type'=>$request->input('job_type'),
                'qualification'=>$request->input('qualification'),
                'experience'=>$request->input('experience'),
                'vacancy'=>$request->input('vacancy'),
                'age_range'=>$request->input('age_range'),
                'job_location'=>$request->input('job_location'),
                'salary'=>$request->input('salary'),
                'deadline'=>$request->input('deadline'),
                'category_id'=>$request->input('category_id'),
                'company_id'=>$request->input('company_id'),
                'user_id'=>$userId
            ]);
            return ResponseHelper::Out('success', 'Job post successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }
}

