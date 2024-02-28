<?php

namespace App\Http\Controllers;

use App\Helper\ResponseHelper;
use Exception;
use App\Models\User;
use App\Mail\OTPMail;
use App\Helper\JWTToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class UsersController extends Controller
{

    // Display the registration view.

    public function registrationPage()
    {
        return view('backend.pages.registrationPage');
    }

    public function loginPage()
    {
        return view('backend.pages.loginPage');
    }
    public function forgetPage(){
        return view('backend.pages.forgetPage');
    }
    public function verifyOtpPage(){
        return view('auth.verifyOtpPage');
    }

    public function resetPasswordPage(){
        return view('auth.resetPasswordPage');
    }


    function UserRegistration(Request $request)
    {
        // dd($request->input());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        try {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ]);
            return redirect('loginPage')->with('success', 'Register Success!');

        } catch (Exception $exception) {
            return redirect('registrationPage')->with('failed', $exception->getMessage());
        }
    }


    function UserLogin(Request $request)
    {
        // dd($email, $password);

        $count = User::where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->select('id')->first();
        // dd($count);
        if ($count == null) {
            return response()->json([
                'status' => 'failed',
                'message' => "Unauthorized"
            ], 200);
        } else {
            // Jwt token issue
            $token = JWTToken::CreateToken($request->email, $count->id);
            return redirect('home')->with('success', 'Yser Login success')->cookie('token', $token, 60 * 24 * 30);
        }
    }


    function sendOTP(Request $request)
    {
        try {
            $email = $request->input('email'); //catch email
            $otp = rand(1000, 9999); // make 4 digit random OTP

            // find user matching request email
            $count = User::where('email', '=', $email)->count();

            if ($count != 1) {
                return ResponseHelper::Out('failed', 'Email is not valid', 200);
            } else {
                // OTP send
                Mail::to($email)->send(new OTPMail($otp));

                // OTP Update on Database by User Model
                User::where('email', '=', $email)->update(['otp' => $otp]);

                // Email store im session storage
                session(['email' => $request->input('email')]);

                return redirect('verifyOtpPage')->with('success', 'A 4 Digit OTP has been send to your email address');
            }

        } catch (Exception $e) {
            return ResponseHelper::Out('failed', $e, 200);
        }
    }


    function verifyOTP(Request $request)
    {
        $email = session('email');
        // dd($email);

        $otp = $request->input('otp');
        // dd($otp);

        $count = User::where('email', '=', $email)
            ->where('otp', '=', $otp)
            ->count();
        // dd($count);

        if ($count != 1) {
            return ResponseHelper::Out('failed', 'Your OTP not valid', 200);
        } else {
            // OTP Update
            User::where('email', '=', $email)->update(['otp' => '0']);
           
            // Token Issue with email for reset password
            $token = JWTToken::CreateTokenForSetPassword($email);

            // Return with go to password setup page
            return redirect('resetPasswordPage')->with('success', 'Welcome Back!')->cookie('token', $token, 60 * 24 * 30);           
        }
    }


    function resetPassword(Request $request){
        
        try{
            $email=$request->header('email');
            // dd($email);
            $password=$request->input('password');
            // dd($password);
            User::where('email', '=', $email)->update(['password'=>$password]);
            return redirect('loginPage')->with('success', 'Password reset success!');            
        }
        catch(Exception $e){
            return ResponseHelper::Out('failed', $e, 200);
        }
    }

  
}
