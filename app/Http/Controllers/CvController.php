<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Exception;
use App\Models\User;
use App\Models\CvBasic;
use App\Models\CvSkill;
use App\Models\CvTraining;
use App\Models\CvEducation;
use App\Models\CvExperience;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\DB;

class CvController extends Controller
{
    public function cvPage(Request $request)
    {
        $userId = $request->header('id');
        $data[0] = User::where('id', $userId)->with('account', 'cv_basic', 'cv_education', 'cv_experience', 'cv_training', 'cv_skill')->get();
        // dd($data[0]);

        return view('backend.candidate.cvPage', compact('data'));
    }
    public function cvEditPage(Request $request)
    {
        $userId = $request->header('id');
        $data = User::where('id','=', $userId)->with('account', 'cv_basic')->get(); 
        $cvEducation=CvEducation::where('user_id', '=', $userId)->get();
        $cvTraining=CvTraining::where('user_id', '=', $userId)->get();
        // return $cvTraining;      
        return view('backend.candidate.cv_Edit', compact('data', 'cvEducation', 'cvTraining'));
    }

    public function cvBasic(Request $request)
    {
        //  dd($request->input());
        $user_id = $request->header('id');

        DB::beginTransaction();

        try {

            if ($request->hasFile('img')) {
                $account = Account::where('user_id', $user_id)->first();
                unlink(public_path($account->img));
            }

            User::where('id', $user_id)->update([
                'name' => $request->input('name'),
                'email' => $request->input('email')
            ]);

            $img = $request->file('img');
            //  dd($img);

            // image name make
            $t = time();
            $file_name = $img->getClientOriginalName();
            $img_name = "{$user_id}-{$t}-{$file_name}";
            $img_url = "images/candidate/{$img_name}";

            //image upload on local folder
            $img->move(public_path('images/candidate/'), $img_name);

            Account::where('user_id', $user_id)->update([
                'phone' => $request->input('phone'),
                'emergency' => $request->input('emergency'),
                'whatsup' => $request->input('whatsup'),
                'dateOfBirth' => $request->input('dateOfBirth'),
                'img' => $img_url
            ]);

            CvBasic::where('id', $user_id)->updateOrCreate([
                'father_name' => $request->input('father_name'),
                'mother_name' => $request->input('mother_name'),
                'n_id' => $request->input('n_id'),
                'blood_group' => $request->input('blood_group'),
                'passport' => $request->input('passport'),
                'linkedin' => $request->input('linkedin'),
                'facebook' => $request->input('facebook'),
                'github' => $request->input('github'),
                'behance' => $request->input('behance'),
                'portfolio' => $request->input('portfolio'),
                'account_id' => $request->input('account_id'),
                'user_id' => $user_id
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Basic information save successfully');

        } catch (Exception $e) {
            DB::rollBack();
            return ResponseHelper::Out('failed', $e, 401);
        }
    }

    public function cvEducation(Request $request)
    {
        //  dd($request->input());
        $user_id = $request->header('id');

        try {
            CvEducation::where('user_id', $user_id)->updateOrCreate([
                'degree' => $request->input('degree'),
                'school_university' => $request->input('school_university'),
                'department' => $request->input('department'),
                'group' => $request->input('group'),
                'passing_year' => $request->input('passing_year'),
                'CGPA' => $request->input('CGPA'),
                'user_id' => $user_id
            ]);
            return redirect()->back()->with('success', 'Education Save successfully');

        } catch (Exception $e) {
            return ResponseHelper::Out('failed', $e, 401);
        }
    }

    public function cvTraining(Request $request)
    {
        //  dd($request->input());
        $user_id = $request->header('id');

        try {
            CvTraining::updateOrCreate([
                'training_name' => $request->input('training_name'),
                'organization' => $request->input('organization'),
                'duration' => $request->input('duration'),
                'passing_year' => $request->input('passing_year'),
                'user_id' => $user_id
            ]);
            return redirect()->back()->with('success', 'Training information save successfully');

        } catch (Exception $e) {
            return ResponseHelper::Out('failed', $e, 401);
        }
    }

    public function cvExperience(Request $request)
    {
        $user_id = $request->header('id');
        //  dd($request->input());

        try {
            CvExperience::updateOrCreate([
                'company_name' => $request->input('company_name'),
                'designation' => $request->input('designation'),
                'joining_date' => $request->input('joining_date'),
                'departure_date' => $request->input('departure_date'),
                'user_id' => $user_id
            ]);
            return redirect()->back()->with('success', 'Experiences information save successfully');

        } catch (Exception $e) {
            return ResponseHelper::Out('failed', $e, 401);
        }
    }

    public function cvSkills(Request $request)
    {
        $user_id = $request->header('id');
        //  dd($request->input());

        try {
            CvSkill::updateOrCreate([
                'skills' => $request->input('skills'),
                'current_salary' => $request->input('current_salary'),
                'expected_salary' => $request->input('expected_salary'),

                'user_id' => $user_id
            ]);
            return redirect()->back()->with('success', 'Experiences information save successfully');

        } catch (Exception $e) {
            return ResponseHelper::Out('failed', $e, 401);
        }
    }


}
