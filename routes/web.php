<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// User Web API Routes
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::get('/user-profile',[UserController::class,'UserProfile'])->middleware('auth:sanctum');
Route::get('/logout',[UserController::class,'UserLogout'])->middleware('auth:sanctum');
Route::post('/user-update',[UserController::class,'UpdateProfile'])->middleware('auth:sanctum');
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::post('/reset-password',[UserController::class,'ResetPassword'])->middleware('auth:sanctum');

// Medicine Web API Routes
Route::post("/create-medicine",[MedicineController::class,'MedicineCreate'])->middleware('auth:sanctum');
Route::get("/list-medicine",[MedicineController::class,'MedicineList'])->middleware('auth:sanctum');
Route::post("/medicine-by-id",[MedicineController::class,'MedicineByID'])->middleware('auth:sanctum');
Route::post("/update-medicine",[MedicineController::class,'MedicineUpdate'])->middleware('auth:sanctum');
Route::post("/delete-medicine",[MedicineController::class,'MedicineDelete'])->middleware('auth:sanctum');



// Page Routes
Route::view('/','pages.home');
Route::view('/userLogin','pages.auth.login-page')->name('login');
Route::view('/userRegistration','pages.auth.registration-page');
Route::view('/sendOtp','pages.auth.send-otp-page');
Route::view('/verifyOtp','pages.auth.verify-otp-page');
Route::view('/resetPassword','pages.auth.reset-pass-page');
Route::view('/userProfile','pages.dashboard.profile-page');

Route::view('/categoryPage','pages.dashboard.category-page');
Route::view('/customerPage','pages.dashboard.customer-page');
Route::view('/medicinePage','pages.dashboard.medicine-page');
