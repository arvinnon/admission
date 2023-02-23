<?php

namespace App\Http\Controllers\Admission;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Application_table;
class AdmissionApplcationListController extends Controller
{
    public function showApplicantData()
    {
        $data=Application_table::all();
        return view ('admission.admission-forms.all-admissions', compact('data'));
    }

    public function showApplication() {
        $data=Application_table::all();
        return view ('admission.admission-forms.all-admissions', compact('data'));
    }
}
