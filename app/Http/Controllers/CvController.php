<?php

namespace App\Http\Controllers;

use App\Models\CvEducation;
use App\Models\CvExperience;
use App\Models\CvSkill;
use App\Models\CvTraining;
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

    public function cvTraining(Request $request){
        //  dd($request->input());

        try{
            CvTraining::updateOrCreate([
                'training_name'=>$request->input('training_name'),
                'organization'=>$request->input('organization'),
                'duration'=>$request->input('duration'),
                'passing_year'=>$request->input('passing_year'),
                'user_id'=>$request->input('user_id'),
            ]);
            return ResponseHelper::Out('success', 'Training information save successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }        
    }

    public function cvExperience(Request $request){
        //  dd($request->input());

        try{
            CvExperience::updateOrCreate([
                'company_name'=>$request->input('company_name'),
                'designation'=>$request->input('designation'),
                'joining_date'=>$request->input('joining_date'),
                'departure_date'=>$request->input('departure_date'),
                'user_id'=>$request->input('user_id'),
            ]);
            return ResponseHelper::Out('success', 'Experiences information save successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }        
    }

    public function cvSkills(Request $request){
        //  dd($request->input());

        try{
            CvSkill::updateOrCreate([
                'skills'=>$request->input('skills'),
                'current_salary'=>$request->input('current_salary'),
                'axpected_salary'=>$request->input('axpected_salary'),
                
                'user_id'=>$request->input('user_id'),
            ]);
            return ResponseHelper::Out('success', 'Experiences information save successfully', 200);
            
        }catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 401);
        }        
    }
    
    
}
