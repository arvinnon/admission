<?php

namespace App\Http\Controllers;

use App\Models\AdmissionStatus_table;
use App\Models\Application_table;
use Illuminate\Http\Request;

class AdmissionApplicationController extends Controller
{
    public function AdmissionDataInsert(Request $request) {
    dd($request);
        $fname = $request ->  input ('fname');
        $lname = $request ->  input ('lname');
        $entry_classification = $request-> input('entry_classification');
        $email = $request ->  input ('email');
        $phone = $request -> input ('phone');
        $address = $request -> input ('address');
        $status = $request-> input ('status');

        $isInsertSuccesss = Application_table::insert([
            'fname' => $fname,
            'lname' => $lname,
            'entry_classification' => $entry_classification, 
            'email' => $email,  
            'phone'=> $phone,
            'address' => $address,
            'status' => $status
            ]);

        if ($isInsertSuccesss) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed </h1>';   
    }
}
