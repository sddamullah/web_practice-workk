<?php

namespace App\Http\Controllers;

use App\Models\register_form;
use Illuminate\Http\Request;

class firstController extends Controller
{
    //
    function form_submit(Request $request)
    {
        // return response ("pass");
        $fname = $request->get('firstname4');
        $lname = $request->get('lastname4');
        $email = $request->get('email4');
        $pwd = $request->get('password4');
        $check = $request->get('gridcheck');
        $cpwd = $request->get('cpassword4');



        $data = new register_form([
            'firstname4' => $fname,
            'lastname4' => $lname,
            'email4' => $email,
            'password4' => $pwd,
            'gridcheck' => $check,
            'cpassord4' => $cpwd,

        ]);
        $data->save();
        return back();
    }

    function table_show()
    {
          $tab=register_form::all();
        // $tab = DB::Select('select * from register_form');
        return view('table', compact('tab'));
    }
    function delete($id){
        $tab= register_form::find($id);
                // $tab = DB::Select('select * from register_form{$id}');


        $tab->delete();
        return back();
        
    }
}
