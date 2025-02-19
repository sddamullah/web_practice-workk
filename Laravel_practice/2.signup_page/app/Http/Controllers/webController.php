<?php

namespace App\Http\Controllers;

use App\Models\register_form;
use Illuminate\Http\Request;

class webController extends Controller
{
    //
    function form_submit(Request $request){
        $fname=$request->get('fname');
        $lname = $request->get('lname');
        $email = $request->get('email');
        $city = $request->get('city');
        $pincode = $request->get('pincode');
        $address = $request->get('address');

        $data= new register_form([
    'fname'=> $fname,
    'lname' => $lname,
    'email'=> $email,
      'address' => $address,
      'city'=> $city,
      'pincode'=> $pincode,



        ]);
        $data->save();
        return back();

    }
}

