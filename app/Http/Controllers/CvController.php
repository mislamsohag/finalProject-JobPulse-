<?php

namespace App\Http\Controllers;

use App\Models\CvEducation;
use Exception;
use App\Models\CvBasic;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;

class CvController extends Controller
{
    public function cvPage(){
        return view('backend.candidate.cv');
    }
    public function cvEditPage(){
        return view('backend.candidate.cv_Edit');
    }

    public function cvBasic(Request $request){
        //  dd($request->input());

        try{
            CvBasic::updateOrCreate([
                'father_name'=>$request->input('father_name'),
                'mother_name'=>$request->input('mother_name'),
                'n_id'=>$request->input('n_id'),
                'blood_group'=>$request->input('blood_group'),
                'passport'=>$request->input('passport'),
                'linkedin'=>$request->input('linkedin'),
                'facebook'=>$request->input('facebook'),
                'github'=>$request->input('github'),
                'behance'=>$request->input('behance'),
                'portfolio'=>$request->input('portfolio'),
                'user_id'=>$request->input('user_id'),
                'account_id'=>$request->input('account_id'),
            ]);
            return ResponseHelper::Out('success', 'Basic information save successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }

    public function cvEducation(Request $request){
        //  dd($request->input());

        try{
            CvEducation::updateOrCreate([
                'degree'=>$request->input('degree'),
                'school_university'=>$request->input('school_university'),
                'department'=>$request->input('department'),
                'group'=>$request->input('group'),
                'passing_year'=>$request->input('passing_year'),
                'CGPA'=>$request->input('CGPA'),
                'user_id'=>$request->input('user_id'),
            ]);
            return ResponseHelper::Out('success', 'Education Save successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }
    }

    
}
