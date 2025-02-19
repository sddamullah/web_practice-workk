<?php

namespace App\Http\Controllers;

use App\Models\image_register;
use App\Models\register;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    function save_data(Request $request, $id)
    {
        // return response ("pass");
        $mainehead = $request->get('mainehead');
        $headcontant = $request->get('headcontant');
        $firstchart_head = $request->get('firstchart_head');

        $firstchart_contant = $request->get('firstchart_contant');
        $secondchart_head = $request->get('secondchart_head');
        $secondchart_contant = $request->get('secondchart_contant');



        $data =  array(
            'mainehead' => $mainehead,
            'headcontant' => $headcontant,
            'firstchart_head' => $firstchart_head,

            'firstchart_contant' => $firstchart_contant,
            'secondchart_head' => $secondchart_head,
            'secondchart_contant' => $secondchart_contant,

        );
        register::where('id', $id)->update($data);
        //    DB::table('registers')->where('id', $id)->update($data);
        return back()->with('success', 'Data has submitted');
    }
    function get_data()
    {
        $data = DB::table('registers')->where('id', '1')->get();
        return view('form', compact('data'));
    }

    public function show()
    {
        $table = register::all();
        return view('admintable', compact('table'));
    }
    public function delete($id)
    {

        $table = register::find($id);
        $table->delete();
        return back();
    }
    //
    function admin()
    {
        return view('admin');
    }
    function admintable()
    {
        return view('admintable');
    }
    public function food_web()
    {
        $data = register::all();
        return view('welcome', compact('data'));
    }

    // function update($id){
    //     $data = register::find(1);

    //     $data->roles()->updateExistingPivot($id, [
    //         'active' => false,
    //     ]);
    //     return view('welcome',compact('data->{id}') );


    // }
    // function show_data($id){
    //     $data = register::find($id);
    //     // return view('update', ['data' => $data]);
    //     //    $data = DB::table('id_forms')->where('id', $id)->get();
    //         return view('update', compact('data'));

    // }


    // function update(Request $request, $id)
    // {

    //     $data = array(
    //         "mainehead" => $request->get('mainehead'),
    //         "headcontant" => $request->get('headcontant'),
    //         "firstchart_head" => $request->get('firstchart_head'),
    //         "firstchart_contant" => $request->get('firstchart_contant'),
    //         "secondchart_head" => $request->get('secondchart_head'),
    //         "secondchart_contant" => $request->get('secondchart_contant'),

    //     );
    //     register::where('id', $id)->update($data);
    //     return back();
    // }




    //    image form









    //    ===========================image form============

    function save_image(Request $request)
    {

        // $name = $request->get('name');
        // $roll = $request->get('roll');
        // $class = $request->get('class');
        // return response ("pass");
            if ($request->hasFile('img')) {
            $file = $request->file('img');
                $imageName = time() . '_' . $file->getClientOriginalExtension();
                $file->move(public_path("asset/img/"), $imageName);

            $post = new image_register([
                "img" => $imageName,
                "name" => $request->name,
                "roll" => $request->roll,
                "class" => $request->class,

            ]);
            $post->save();
        }


         
        return back();
    }

    function image_form()
    {
        return view('image_form');
    }
    public function image_table()
    {
        // $table = image_register::all();
        // return view('image_table');
        $table = image_register::all();
        return view('image_table', compact('table'));
    }
}
