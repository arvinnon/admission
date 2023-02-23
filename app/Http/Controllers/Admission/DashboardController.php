<?php

namespace App\Http\Controllers\Admission;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Application_table;

class DashboardController extends Controller
{
    public function index ()
    {

        $totalUsers = Application_table::count();
    
        $totalBasicEd = Application_table::where('entry_classification', 'basic education')->count();
        $totalCollege = Application_table::where('entry_classification', 'College')->count();
        $totalTransferee = Application_table::where('entry_classification', 'transferee')->count();
        $totalGraduateSchool = Application_table::where('entry_classification', 'graduate school')->count();

        return view('admission.dashboard', compact('totalUsers', 'totalBasicEd', 'totalCollege', 'totalTransferee', 'totalGraduateSchool'));
    }





    public function showAll ()
    {
        return view('admission.admission-forms.all-admissions');
    }
    public function showCollege ()
    {
        $data=Application_table::all();
        return view ('admission.admission-forms.college', compact('data'));
    }
    public function showGraduate ()
    {
        return view('admission.admission-forms.graduate');
    }
    public function showTransferee ()
    {
        return view('admission.admission-forms.transferee');
    }
    public function showApplicantData()
    {
        return view('admission.layouts.applicantList');
    }

    public function showApplication() {
        $data=Application_table::all();
        return view ('admission.admission-forms.college', compact('data'));
    }

}
