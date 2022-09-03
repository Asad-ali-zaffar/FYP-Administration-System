<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function index(){
        return view('admin');
    }
    public function insert(Request $request){
        $request->validate(
            [
                'Admin_Name'=>'required',
                'Admin_Detail'=>'required',
                'email'=>'required|email|unique:admin,admin_email,id,admin_id',
                'Admin_Password'=>'required|min:8|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#@%]).*$/',
                'admin_Image'=>'required|image|max:10000',
            ]
        );
        $admin= new admin();
        $admin->admin_name=$request['Admin_Name'];
        $admin->admin_email=$request['email'];
        $admin->admin_description=$request['Admin_Detail'];
        $admin->admin_password=md5($request['Admin_Password']);
        if($request->hasFile('admin_Image'))
        {
            $file=$request->file('admin_Image');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/Student');
            $file->move($destinationPath,$teaser_image);
            $admin->image=$teaser_image;
        }
        $admin->save();
        return redirect('/admin/view');
    }
    public function show(){
        $titel="Admin";
        $admin=admin::paginate();
        return view('admin_view')->with(compact('admin','titel'));
    }
    public function edit($id)
    {
        $url="/admin/update"."/".$id;
        $admin=admin::where('admin_id',$id)->get();
        return view('admin_update')->with(compact('admin','url'));
    }
    public function update($id,Request $request)
    {
        // return $request;die;
        $img="";
        if($request->hasFile('admin_Image'))
        {
            $file=$request->file('admin_Image');
            $teaser_image= time().'.'.$file->getClientOriginalExtension();
            $destinationPath=public_path('/Student');
            $file->move($destinationPath,$teaser_image);
            $img=$teaser_image;
        }
        admin::where('admin_id',$id)
        ->update([
            'admin_name'=>$request->input('Admin_Name'),
            'admin_email'=>$request->input('email'),
            'admin_description'=>$request->input('Admin_Detail'),
            'admin_password'=>md5($request->input('Admin_Password')),
            'image'=>$img
        ]);
        return redirect('/admin/view');
    }
    public function delete($id)
    {
        admin::where('admin_id',$id)->delete();
        return redirect()->back();
    }
}
