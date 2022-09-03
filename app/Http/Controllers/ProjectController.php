<?php

namespace App\Http\Controllers;
use App\Models\Projact;
use App\Models\Student_model;
use App\Models\Teacher;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $url="/project";
        $student=Student_model::all();
        $Teacher=Teacher::all();
        return view('project')->with(compact('url','student','Teacher'));
    }
    public  function store(Request $request)
    {
        $request->validate(
            [
                'project_Name'=>'required|unique:project,proj_name,id,proj_id',
                'std_id'=>'required|integer',
                'Supervisor'=>'required|integer',
            ]
        );
        $project=new Projact;
        $project->proj_name=$request['project_Name'];
        $project->id=$request['std_id'];
        $project->superviser_id=$request['Supervisor'];
        $project->save();
        return redirect('/project_view');
    }
    public function view($id)
    {
        $project=Projact::with('getStudent')->where('superviser_id',$id)->paginate(100);
        $titel="Projacts";
        return view('project_view')->with(compact('project','titel'));
    }
    public function edit($id)
    {
        $student=Student_model::all();
        $url="/project_update"."/".$id;
        $Teacher=Teacher::all();
        $project=Projact::with('getStudent')->where('proj_id',$id)->get();
        return view('projact_update')->with(compact('project','url','Teacher','student'));
    }
    public function update($id,Request $request)
    {
        Projact::where('proj_id',$id)
        ->update([
            'proj_name'=>$request->input('project_Name'),
            'id'=>$request->input('std_id'),
            'superviser_id'=>$request->input('Supervisor'),
        ]);
        return redirect('/project_view');

    }
    public function delate($id)
    {
        Projact::where('proj_id',$id)->delate();
        return redirect()->back();
    }
}
