<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\DB;

class CompanyController extends Controller
{   

    public function comDashboard()
    {
        return view('backend.company.comDashboard');
    }

    public function comPlugins()
    {
        return view('backend.company.comPlugins');
    }

    public function comAllJobsBackend()
    {
        return view('backend.company.comAllJobs');
    }

    public function comAbout()
    {
        return view('backend.company.comAbout');
    }

    public function comBlog()
    {
        return view('backend.company.comBlogs');
    }
   

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.company.companyEntry');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.pages.companyCreatePage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->input());
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);

            $userID = $user->id;

            $img = $request->file('img');
            // dd($img);

            // image name make
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$userID}-{$t}-{$file_name}";
            $img_url = "images/company/{$img_name}";

            //image upload on local folder
            $img->move(public_path('images/company/'), $img_name);

            // dd($userID);
            Company::create([
                'user_id' => $userID,
                'company_name' => $request->input('company_name'),
                'established_year' => $request->input('established_year'),
                'employee' => $request->input('employee'),
                'country' => $request->input('country'),
                'district' => $request->input('district'),
                'thana' => $request->input('thana'),
                'location' => $request->input('location'),
                'industry_type' => $request->input('industry_type'),
                'description' => $request->input('description'),
                'license' => $request->input('license'),
                'facebook' => $request->input('facebook'),
                'contact_person' => $request->input('contact_person'),
                'designation' => $request->input('designation'),
                'phone' => $request->input('phone'),
                'img' => $img_url
            ]);

            DB::commit();
            return redirect('loginPage')->with('success', 'Register Success!');

        } catch (Exception $e) {
            DB::rollBack();
            return ResponseHelper::Out('fail', $e, 200);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        $companyId=$id;        
        // dd($id);

        $companyInfo=Company::where('id','=',$companyId)->with('job')->get();
        // return $companyInfo;
        
        return view('frontend.companies.companyJobs', compact('companyInfo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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



    

}
