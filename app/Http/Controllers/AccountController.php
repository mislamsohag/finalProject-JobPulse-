<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use App\Helper\ResponseHelper;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function accountPage(){
        return view('backend.candidate.accountPage');
    }

    public function accountCreate(Request $request){
        //  dd($request->input());

         DB::beginTransaction();
         try {            
             $user = User::create([
                 'name' => $request->input('name'),
                 'email' => $request->input('email'),
                 'password' => $request->input('password')
             ]);
 
             $userID = $user->id;
 
             $img = $request->file('img');
            //  dd($img);
 
             // image name make
             $t = time();
             $file_name = $img->getClientOriginalName();
             $img_name = "{$userID}-{$t}-{$file_name}";
             $img_url = "images/candidate/{$img_name}";
             
             //image upload on local folder
             $img->move(public_path('images/candidate/'), $img_name);
            
             // dd($userID);
             Account::create([
                 'user_id' => $userID,                 
                 'phone' => $request->input('phone'),
                 'emergency' => $request->input('emergency'),
                 'whatsup' => $request->input('whatsup'),
                 'dateOfBirth' => $request->input('dateOfBirth'),
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
