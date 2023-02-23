<?php

namespace App\Http\Controllers\Applicant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantController extends Controller
{
    public function showDashboard(){
        return view('applicant.dashboard');
    }
    public function showAbout(){
        return view('applicant.layouts.about');
    }
    public function showInbox(){
        return view('applicant.layouts.inbox');
    }
    public function showNotification(){
        return view('applicant.layouts.notification');
    }
    public function showApplicationForm(){
        return view('applicant.layouts.application-form');
    }
}
