<?php

namespace App\Http\Controllers;

use DB;




use App\Models\id_form;
use Illuminate\Http\Request;


class idController extends Controller
{
    //
    // function id_form(){
    //     return view('id');
    // }


    function id_form(Request $request)
    {
        // return response ("pass");
        $fname = $request->get('fname');
        $lname = $request->get('lname');
        $fthname = $request->get('fthname');

        $dob = $request->get('dob');
        $idate = $request->get('idate');
        $exdate = $request->get('exdate');
        $paddress = $request->get('paddress');
        $taddress = $request->get('taddress');


        $data = new id_form([
            'fname' => $fname,
            'lname' => $lname,
            'fthname' => $fthname,

            'dob' => $dob,
            'idate' => $idate,
            'exdate' => $exdate,
            'taddress' => $taddress,
            'paddress' => $paddress,

        ]);
        $data->save();
        return back();
    }
    function show()
    {
        // return view('table');
        $tab = id_form::all();
        return view('table', compact('tab'));
    }
    public function delete($id)
    {

        $tab = id_form::find($id);
        $tab->delete();
        return back();
    }
    public function showdata($id)
    {
          $data= id_form::find($id);
    //    return view('edit', ['data'=>$data]);
    // $data = DB::table('id_forms')->where('id', $id)->get();

    return view('edit',compact('data'));
        
    }
    function update(Request $request, $id){
        $data = array(
     "fname"=>$request->get('fname'),
            "lname" => $request->get('lname'),
            "fthname" => $request->get('fthname'),
            "dob" => $request->get('dob'),
            "idate" => $request->get('idate'),
            "exdate" => $request->get('exdate'),
            "paddress" => $request->get('paddress'),
            "taddress" => $request->get('taddress'),
        );
        id_form::where('id', $id)->update($data);
        return back();
    }
}
