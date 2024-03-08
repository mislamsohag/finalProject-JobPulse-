<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RoleController;
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

// Role & Category Routes
Route::POST("/addRole", [RoleController::class, "addRole"])->middleware([TokenVerificationMiddleware::class]);
Route::POST("/addCategory", [CategoryController::class, "addCategory"])->middleware([TokenVerificationMiddleware::class]);

// Company Routes
// Route::get('/companyEntry', [CompanyController::class, 'index']);
Route::get('/companyCreate', [CompanyController::class, 'create']);
Route::POST('/companyStore', [CompanyController::class, 'store']);
Route::get('/companyCreatePage', [CompanyController::class, 'create']);
Route::get('/companyDetails/{id}', [CompanyController::class, 'show']);

Route::get('/comDashboard', [CompanyController::class, 'comDashboard']);
Route::get('/comPlugins', [CompanyController::class, 'comPlugins']);
Route::get('/comAllJobs', [CompanyController::class, 'comAllJobsBackend']);
Route::get('/comAbout', [CompanyController::class, 'comAbout']);
Route::get('/comBlog', [CompanyController::class, 'comBlog']);



// Admin Routes
Route::get('/companies', [AdminController::class, 'companies']);
Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/employee', [AdminController::class, 'employee']);
Route::get('/adminJobs', [AdminController::class, 'adminJobs']);
Route::get('/adminBlogs', [AdminController::class, 'adminBlogs']);
Route::get('/plugins', [AdminController::class, 'plugins']);



// Job Routes
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobShow/{id}', [JobController::class, 'show']);
Route::get('/jobApplyPage/{id}', [JobController::class, 'edit'])->middleware([TokenVerificationMiddleware::class]);
Route::post('/jobApplyed/{id}', [JobController::class, 'applyedJobs'])->middleware([TokenVerificationMiddleware::class]);

// Job Banckend Routes
Route::get('/jobCreate', [JobController::class, 'create'])->middleware([TokenVerificationMiddleware::class]);
Route::POST('/jobStore', [JobController::class, 'store'])->middleware([TokenVerificationMiddleware::class]);
Route::get('/jobCategory', [JobController::class, 'jobCategory']);
Route::get('/jobDetails', [JobController::class, 'jobDetails']);



// Candidate Routes
Route::get('/accountPage', [AccountController::class, 'accountPage']);
Route::POST('/accountCreate', [AccountController::class, 'accountCreate']);
Route::get('/canDashboard', [AccountController::class, 'canDashboard']);


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



/* Route::get('/appliedJob', function () {
    return view('backend.company.appliedJob');
}); */

/* Route::get('/comContact', function () {
    return view('backend.company.contact');
}); */








require __DIR__.'/auth.php';

