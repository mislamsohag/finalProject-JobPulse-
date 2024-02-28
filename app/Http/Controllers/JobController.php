<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class JobController extends Controller
{
    public function jobPostPage(){
        return view('backend.company.jobPostPage');
    }
    public function jobPost(Request $request){
        // dd($request->input());
         $request->validate([
            'title' => 'required',
            'description' => 'required',
            'response' => 'required',
            'benefits' => 'required',
            'education' => 'required',
            'qualification' => 'required',
            'experience' => 'required',
            'job_location' => 'required',
            'salary' => 'required',
            'deadline' => 'required',
            'category_id' => 'required',
            'company_id' => 'required',
            'user_id' => 'required'
        ]);
// dd($request);
        try{
            Job::create([               
                'title'=>$request->input('title'),
                'description'=>$request->input('description'),
                'response'=>$request->input('response'),
                'benefits'=>$request->input('benefits'),
                'education'=>$request->input('education'),
                'qualification'=>$request->input('qualification'),
                'experience'=>$request->input('experience'),
                'job_location'=>$request->input('job_location'),
                'salary'=>$request->input('salary'),
                'deadline'=>$request->input('deadline'),
                'category_id'=>$request->input('company_id'),
                'company_id'=>$request->input('company_id'),
                'user_id'=>$request->input('user_id')
            ]);
            return ResponseHelper::Out('success', 'Rule add successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }
}

