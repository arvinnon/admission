<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Application_table;
//use App\Helpers\Helper;

class UserApplicationController extends Controller
{
    function ApplicationIndex() {
        return view ('application-form');
    }

    function DataInsert (Request $request) {  

        //Application Form
        $fname = $request ->  input ('fname');
        $lname = $request ->  input ('lname');
        $entry_classification = $request-> input('entry_classification');
        $email = $request ->  input ('email');
        $phone = $request -> input ('phone');
        $address = $request -> input ('address');

        $isInsertSuccesss = Application_table::insert([
            'fname' => $fname,
            'lname' => $lname,
            'entry_classification' => $entry_classification, 
            'email' => $email,  
            'phone'=> $phone,
            'address' => $address,
            ]);

        if ($isInsertSuccesss) echo '<h1>Insert Success</h1>';
        else echo '<h1>Insert Failed </h1>';   
        
    }
}
