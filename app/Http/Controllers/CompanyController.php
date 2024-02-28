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
    public function index()
    {
        return view('backend.company.companyEntry');
    }
    public function companyAddPage()
    {
        return view('frontend.pages.companyAddPage');
    }

    public function companies()
    {
        return view('backend.admin.companies');
    }

    public function companyEntry(Request $request)
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

}

