<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\AppliedJob;
use Exception;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs=Job::all();
        // return $jobs;
        return view('frontend.pages.jobs', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $userId=$request->header('id');
        
        $categories=Category::all();
        $companies=Company::where('user_id', $userId)->get();
        // dd($userId);

        return view('backend.company.jobStorePage', compact('categories', 'companies'));    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->input());
        $userId=$request->header('id');
        // dd($userId);        

         $request->validate([
            'title' => 'required',
            'designation' => 'required',
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
                'designation'=>$request->input('designation'),
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
            return redirect()->back()->with('success', 'Job post successfully');
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // dd($id);
        $jobDetails=Job::where('id','=', $id)->with('company')->get();
        // return $jobDetails;
        return view('frontend.pages.jobShow', compact('jobDetails'));
    }

    /**
     * Show the form for Job Apply Page
     */
    public function edit(Request $request, string $id)
    {
        // dd($id);
        $jobInfo=Job::where('id', '=', $id)->with('company')->get();
        $userId=$request->header('id');
        // dd($userId);
        
        $userInfo=Account::where('user_id', '=', $userId)->with('user')->get();
        // return $jobInfo;
        // return $userInfo;
        return view('frontend.companies.jobApplyPage', compact('userInfo', 'jobInfo'));
    }

    public function applyedJobs(Request $request, string $id)
    {
        // dd($id);
        $userId=$request->header('id');
        $job_id=$id;
        $account_id=$request->input('account_id');
        $company_id=$request->input('company_id');
        $current_salary=$request->input('current_salary');
        $expected_salary=$request->input('expected_salary');

        return AppliedJob::updateOrCreate([
            'user_id'=>$userId,
            'job_id'=>$job_id,
            'account_id'=>$account_id,
            'company_id'=>$company_id,
            'current_salary'=> $current_salary,
            'expected_salary'=>$expected_salary
        ]);        
       
    }





    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function jobCategory()
    {
        return view('backend.company.jobCategory');
    }

    public function jobDetails()
    {
        return view('backend.company.jobDetails');
    }


    
}
