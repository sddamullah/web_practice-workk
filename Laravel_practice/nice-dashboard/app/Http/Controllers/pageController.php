<?php

namespace App\Http\Controllers;

use DB;
use App\Models\form;
use Illuminate\Http\Request;

class pageController extends Controller
{
    public function index()
    {
        return view('nice-dashboard');

    }

    public function sidebar(){
        return view('admin.body.sidebar');
    }

    public function main(){
        return view('admin.index');
    }

    public function table(){
        return view('admin.main.table');
    }

    public function dashboard(){
        return view('admin.main.dashboard');
    }

    public function form(Request $request,$id){
        // return view('admin.main.form');
        $web = $request->get('web');
        $app = $request->get('app');
        $software = $request->get('software');

        $data = array(
            'web'=>$web,
            'app'=>$app,
            'software'=>$software,
        );  
        form::where('id', $id)->update($data);
        //DB::table('forms')->where('id', $id)->update($data);
        // $data->update($data);
        return back()->with('success','Data Update Successfully');
    
    }

    public function tableform(){
        $atif = form::all();
        return view('table',compact('atif'));
    }


    function delete_user($id){
        $user = form::findOrFail($id);
        $user->delete();
        return back();
    }

    function data(){
        $atif = form::all();
        return view('nice-dashboard',compact('atif'));
    }



    // public function update($id){
    //     $atif = DB::table('tableforms')->where('id', $id)->update($data);
    //     return view('update',compact('atif'));
    // }

    // public function update_data(Request $request, $id){
    //     $data = array(
    //         "web"=>$request->get('web'),
    //         "app"=>$request->get('app'),
    //         "software"=>$request->get('software'),
            
    //     );
    //     tableform::where('id', $id)->update($data);
    //     return back();
    // }
    public function form_view()
    {
            $view_form = DB::table('forms')->where('id', '13')->get();
            return view('admin.main.form',compact('view_form'));
    }
}



//     if (isset($_POST['save'])) 
    //     {
    //       $web= $_POST['web'];
    //       $app = $_POST['app'];
    //       $software= $_POST['software']; 
        
    //       mysql_query("INSERT INTO table (web, app, software) VALUES(`$web','$app','$software')");
        
    //     }
    //     header("location: landing_page.php");
    //     exit;
    // }
