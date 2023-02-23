<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application_table;

class ApplicationShowController extends Controller
{
    public function showApplication() {
        $data=Application_table::all();
        return view ('admission.admission-forms.graduate', compact('data'));
    }

    
}
