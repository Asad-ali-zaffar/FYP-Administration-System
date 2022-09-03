<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\department;

class DepartmentController extends Controller
{
    public function index()
    {
        $url="add";
        return view('department')->with(compact('url'));
    }
    public function status($id,$s)
    {
        department::where('dept_id',$id)->update([
            'dept_status'=>$s
        ]);
        return redirect()->back();
    }

    public function addData(Request $req)
    {
        $req->validate([
            'department_name'=>'required|unique:department,dep_name,id,dept_id'
        ]);
        $department = new department;
        $department->dep_name=$req['department_name'];
        $department->dept_status=1;
        $department->save();
        return redirect('add/view');

    }
    public function view(){
        $department=department::paginate();
        $titel="Department";
        return view('Department_view')->with(compact('titel','department'));
    }
    public function edit($id){
        $department=department::where('dept_id',$id)->get();
        // $titel="update";
        $url= url('department_update'."/".$id);
        return view('department_update')->with(compact('department','url'));
    }
    public  function delete($id)
    {
        department::where('dept_id',$id)
       ->delete();
       return redirect()->back();
    }
    public function update($id,Request $request)
    {
        department::where('dept_id',$id)
        ->update([
            'dep_name'=>$request->input('ses_Name'),
            'dept_status'=>$request->input('optradio'),
        ]);
        return redirect('add/view');
    }
}
