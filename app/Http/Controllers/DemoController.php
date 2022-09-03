<?php

namespace App\Http\Controllers;

use App\Models\Student_model;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function register()
    {
        $url=url('/student-register');
        return view('student_register')->with(compact('url'));
    }
    public function index()
    {
        return view('welcome');

    }

    public function store(Request $request)
    {
        // echo"<pre>";
        // print_r($request->all());
        // die;
        $student= new Student_model();

        $student->std_Name=$request['std-name'];
        $student->std_dept=$request['std-department'];
        $student->std_reg_no=$request['std-reg-no'];
        $student->email=$request['std-email'];
        $student->std_phone_num=$request['std-phone-no'];
        $student->std_program=$request['std-program-name'];
        $student->save();

        return redirect('/student-register-view');
    }
    public function view(){
        echo "hallo";
    }


}
