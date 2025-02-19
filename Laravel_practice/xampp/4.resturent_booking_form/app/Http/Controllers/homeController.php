<?php

namespace App\Http\Controllers;

use DB;
use App\Models\register_form;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    function insert(Request $request)
    // return view('form');
    {
        // return response ("pass");
        $fname = $request->get('fname');
        $lname = $request->get('lname');
        $date = $request->get('date');
        $number = $request->get('number');


        $data = new register_form([
            'fname' => $fname,
            'lname' => $lname,
            'number' => $number,
            'date' => $date,


        ]);
        $data->save();
        return back();
    }
    function show()
    {
        // return view('table');
        $tab = register_form::all();
        return view('form', compact('tab'));
    }
}
