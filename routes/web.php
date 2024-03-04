<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);

// Auth Related Routes
Route::get("/adminSignupPage", [UsersController::class, "adminSignupPage"]);
Route::get("/loginPage", [UsersController::class, "loginPage"]);
Route::get("/forgetPage", [UsersController::class, "forgetPage"]);
Route::get("/verifyOtpPage", [UsersController::class, "verifyOtpPage"]);
Route::POST("/userRegistration", [UsersController::class, "UserRegistration"]);
Route::POST("/userLogin", [UsersController::class, "UserLogin"]);
Route::POST("/sendOTP", [UsersController::class, "sendOTP"]);
Route::POST("/verifyOTP", [UsersController::class, "verifyOTP"]);

// Protected Routs
Route::get("/resetPasswordPage", [UsersController::class, "resetPasswordPage"])->middleware([TokenVerificationMiddleware::class]);
Route::POST("/resetPassword", [UsersController::class, "resetPassword"])->middleware([TokenVerificationMiddleware::class]);

// Rule & Category Routes
Route::POST("/addRule", [RuleController::class, "addRule"])->middleware([TokenVerificationMiddleware::class]);
Route::POST("/addCategory", [CategoryController::class, "addCategory"])->middleware([TokenVerificationMiddleware::class]);

// Company Routes
Route::get('/companies', [CompanyController::class, 'companies']);
Route::get('/companySignupPage', [CompanyController::class, 'companySignupPage']);
Route::POST('/companyEntry', [CompanyController::class, 'companyEntry']);

// Job Routes
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobPostPage', [JobController::class, 'jobPostPage'])->middleware([TokenVerificationMiddleware::class]);
Route::POST('/jobPost', [JobController::class, 'jobPost'])->middleware([TokenVerificationMiddleware::class]);

// Candidate Routes
Route::get('/accountPage', [AccountController::class, 'accountPage']);
Route::POST('/accountCreate', [AccountController::class, 'accountCreate']);
Route::get('/cvPage', [CvController::class, 'cvPage'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/cvEditPage', [CvController::class, 'cvEditPage'])->middleware([TokenVerificationMiddleware::class]);
Route::POST('/cvBasic', [CvController::class, 'cvBasic'])->middleware([TokenVerificationMiddleware::class]);
Route::POST('/cvEducation', [CvController::class, 'cvEducation'])->middleware([TokenVerificationMiddleware::class]);
Route::POST('/cvTraining', [CvController::class, 'cvTraining'])->middleware([TokenVerificationMiddleware::class]);
Route::POST('/cvExperience', [CvController::class, 'cvExperience'])->middleware([TokenVerificationMiddleware::class]);
Route::POST('/cvSkills', [CvController::class, 'cvSkills'])->middleware([TokenVerificationMiddleware::class]);



Route::get('/about', function () {
    return view('frontend.pages.about');
});



Route::get('/blogs', function () {
    return view('frontend.pages.blogs');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/candidateJobs', function () {
    return view('backend.candidate.candidateJobs');
});


Route::get('/profile', function () {
    return view('backend.pages.profile');
});


// Admin Routes
Route::get('/dashboard', function () {
    return view('backend.admin.dashboard');
});
Route::get('/employee', function () {
    return view('backend.employee');
});

Route::get('/adminJobs', function () {
    return view('backend.admin.adminJobs');
});
Route::get('/adminBlogs', function () {
    return view('backend.admin.adminBlogs');
});
Route::get('/plugins', function () {
    return view('backend.admin.plugins');
});

/* Route::get('/pages', function () {
    return view('backend.admin.pages');
}); */

// Company Routes
Route::get('/comDashboard', function () {
    return view('backend.company.comDashboard');
});

Route::get('/comPlugins', function () {
    return view('backend.company.comPlugins');
});

Route::get('/comAllJobs', function () {
    return view('backend.company.comAllJobs');
});



Route::get('/jobCategory', function () {
    return view('backend.company.jobCategory');
});

Route::get('/jobDetails', function () {
    return view('backend.company.jobDetails');
});

Route::get('/comAbout', function () {
    return view('backend.company.comAbout');
});

Route::get('/comBlog', function () {
    return view('backend.company.comBlogs');
});

/* Route::get('/appliedJob', function () {
    return view('backend.company.appliedJob');
}); */

/* Route::get('/comContact', function () {
    return view('backend.company.contact');
}); */


// Applicant Routes
Route::get('/canDashboard', function () {
    return view('backend.candidate.dashboard');
});








require __DIR__.'/auth.php';

