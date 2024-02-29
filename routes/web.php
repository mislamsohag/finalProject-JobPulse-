<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\TokenVerificationMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/home', function () {
    return view('frontend.pages.home');
});

Route::get('/about', function () {
    return view('frontend.pages.about');
});

Route::get('/jobs', function () {
    return view('frontend.pages.jobs');
});

Route::get('/blogs', function () {
    return view('frontend.pages.blogs');
});

Route::get('/contact', function () {
    return view('frontend.pages.contact');
});

Route::get("/registrationPage", [UsersController::class, "registrationPage"]);
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
Route::get('/companyAddPage', [CompanyController::class, 'companyAddPage']);
Route::POST('/companyEntry', [CompanyController::class, 'companyEntry']);

// Job Routes
Route::get('/jobPostPage', [JobController::class, 'jobPostPage']);
Route::POST('/jobPost', [JobController::class, 'jobPost']);

// Candidate Routes
Route::get('/accountPage', [AccountController::class, 'accountPage']);




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


Route::get('/cv', function () {
    return view('backend.candidate.cv');
});

Route::get('/cv_edit', function () {
    return view('backend.candidate.cv_Edit');
});

Route::get('/candidateJobs', function () {
    return view('backend.candidate.candidateJobs');
});






require __DIR__.'/auth.php';

