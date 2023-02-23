<?php

use App\Http\Controllers\UserApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admission\DashboardController;
use App\Http\Controllers\Admission\AdmissionApplicationListController;
use App\Http\Controllers\Applicant\ApplicationController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes(['verify' => true]);



Route::prefix('applicant')->middleware(['auth'])->group(function(){


    Route::get('/dashboard', [App\Http\Controllers\Applicant\ApplicantController::class, 'showDashboard']);
    Route::get('/application-form', [App\Http\Controllers\Applicant\ApplicantController::class, 'showApplicationForm']);
    Route::get('/about', [App\Http\Controllers\Applicant\ApplicantController::class, 'showAbout']);
    Route::get('/inbox', [App\Http\Controllers\Applicant\ApplicantController::class, 'showInbox']);
    Route::get('/notification', [App\Http\Controllers\Applicant\ApplicantController::class, 'showNotification']);
    

});

Route::prefix('admission')->middleware(['auth', 'isAdmission'])->group(function(){

    Route::get('/dashboard', [App\Http\Controllers\Admission\DashboardController::class, 'index']);
    Route::get('/applicant-list', [App\Http\Controllers\Admission\AdmissionApplcationListController ::class, 'showApplicantData']);
    Route::get('/all-admissions', [App\Http\Controllers\Admission\DashboardController::class, 'showAll']);
    Route::get('/college', [App\Http\Controllers\Admission\DashboardController::class, 'showCollege']);
    Route::get('/graduate', [App\Http\Controllers\Admission\DashboardController::class, 'showGraduate']);
    Route::get('/transferee', [App\Http\Controllers\Admission\DashboardController::class, 'showTransferee']);
});


//Route::get('/hi', function () { return view('applicant.layouts.application_view'); });



//Application Forms
Route::get('/application', [UserApplicationController::class, 'ApplicationIndex']);
Route::post('/applicant/dataInsert',[UserApplicationController::class, 'DataInsert']);
Route::get('/hi', [App\Http\Controllers\ApplicationShowController::class,'showApplication']);
