<?php

namespace App\Http\Controllers;

use App\Models\Fyp_Committee;
use App\Models\department;
use App\Models\Teacher;
use Illuminate\Http\Request;

class FypCommitteeController extends Controller
{
 public function index()
 {
    $url="fypcommittee";
    $dpt=department::all();
    $techer=Teacher::all();
    return view('fyp_committee_add')->with(compact('url','dpt','techer'));
 }
 public function store(Request $request)
 {

    $request->validate(
        [
            'Commate_Member_name'=>'required',
            'Committee_Desigination'=>'required',
            'com_datails'=>'required',
            'dept_id'=>'required|integer',
            'proj_id'=>'required|integer',
        ]
    );
    $fyp=new Fyp_Committee;
    $fyp->com_member_name=$request['Commate_Member_name'];
    $fyp->com_member_desigination=$request['Committee_Desigination'];
    $fyp->com_datails=$request['com_datails'];
    $fyp->dept_id =$request['dept_id'];
    $fyp->teacher_id =$request['proj_id'];
    $fyp->com_status=1;
    $fyp->save();

    return redirect('/fypcommittee_view');
 }
 public function view()
 {
    $fyp=Fyp_Committee::with('getTeacher','getDpt')->paginate();
    $titel="Commitee";
    return view('fyp_commitee_view')->with(compact('fyp','titel'));
 }
 public function status($id,$s)
 {
    Fyp_Committee::where('com_id',$id)->update([
        'com_status'=>$s
    ]);
    return redirect()->back();
 }
 public function edit($id)
 {
   $fyp=Fyp_Committee::with('getTeacher','getDpt')->where('com_id',$id)->get();
   $dpt=department::all();
   $techer=Teacher::all();
   $url="/fypcommittee_update"."/".$id;
   return view('fyp_commitee_update')->with(compact('fyp','dpt','techer','url'));

 }
 public function update($id,Request $request)
 {
    Fyp_Committee::where('com_id',$id)->update([
        'com_member_name'=>$request->input('Commate_Member_name'),
        'com_member_desigination'=>$request->input('Committee_Desigination'),
        'com_datails'=>$request->input('com_datails'),
        'dept_id'=>$request->input('dept_id'),
        'teacher_id'=>$request->input('proj_id'),
    ]);
    return redirect('/fypcommittee_view');
 }
 public function delete($id)
 {
    Fyp_Committee::where('com_id',$id)->delete();
    return redirect()->back();
 }
}
