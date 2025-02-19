<?php

namespace App\Http\Controllers;

use App\Models\menu_register;
use App\Models\form_register;
use App\Models\menu_catagory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use DB;

class myController extends Controller

{
    ////form submit data in database
    function submit(Request $request)
    {
        $name = $request->get('name');
        $email = $request->get('email');
        $date = $request->get('date');
        $req = $request->get('req');
        $person = $request->input('person');

        $data = new form_register([
            'name' => $name,
            'email' => $email,
            'date' => $date,
            'req' => $req,
            'person' => $person

        ]);
        $data->save();
        return back();
    }


    // ------------------get data from database-----------
    public function show_tbale()
    {
        $data = form_register::all();
        return view('admin.table', compact('data'));
    }



    // ===============================upload product in menue============================
    public function add_menu(Request $request)

    {
        $request->validate([

            'product' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'catagory_name' => 'catagory_name',

        ]);
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $imageName = time() . '_' . $file->getClientOriginalExtension();
            $file->move(public_path("asset/img/"), $imageName);





            $data = new menu_register([
                'img' => $imageName,
                "product" => $request->product,
                "detail" => $request->detail,
                "price" => $request->price,
                "catagory_name" => $request->catagory_name,



            ]);
            $data->save();
        }
        return back();
    }

    // we sue this function to show the listed product in oure wensite layout page
    public function listed_product()

    {
        $product = menu_register::all();
        return view('admin.listed_product', compact('product'));
    }
    public function listed()
    {
        $product = menu_register::all();
        return view('home', compact('product'));
    }


    // ===============now we this this function foe dlete the listed product

    public function delete($id)
    {

        $data = menu_register::find($id);
        $data->delete();
        return back();
    }



    // ===============now we this this function foe edit the listed product
    public function edit_menu($id)
    {
        $data = menu_register::where('id', $id)->get();
        return view('admin.edit_menu', compact('data'));
    }

    public function save_data(Request $request, $id)
    {

        $data = menu_register::find($id);
        $data->product = $request->input('product');
        $data->detail = $request->input('detail');
        $data->price = $request->input('price');
        $data->catagory_name = $request->input('catagory_name');




        if ($request->hasFile('img')) {
            $destination = 'asset/img/' . $data->img;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('img');
            $extension = $file->getClientOriginalExtension();
            $imageName = time() . '.' . $extension;
            $file->move(("asset/img/"), $imageName);
            $data->img = $imageName;
        }
        $data->save();
        return back();

        //    DB::table('registers')->where('id', $id)->update($data);

    }





    // creating menu catagory
    function get_catagory($id)
    {
        $data = menu_catagory::where('id', $id)->get();
        return view('admin.update_menu_catagory', compact('data'));
    }


    function save_catagory(Request $request)
    {
        $catagory_name = $request->get('catagory_name');


        $data = new menu_catagory([
            'catagory_name' => $catagory_name,


        ]);
        $data->save();
        return back()->with('message', '  Success !   catagory has been created sucessfully');
    }

    function show_catagory()
    {

        $data = menu_catagory::all();
        return view('admin.menu_catagory', compact('data'));
    }
    function delete_catgory($id)
    {
        $data =  menu_catagory::find($id);
        $data->delete();

        return back()->with('message', '  Success !   catagory has been deleted sucessfully');
    }
    function update_catagory(Request $request, $id)
    {

        $data = menu_catagory::find($id);
        $data->catagory_name = $request->input('catagory_name');
        $data->save();
        return back();
    }
    function add_product()
    {
        $data = menu_catagory::all();
        return view('admin.add_product', compact('data'));
    }
}
