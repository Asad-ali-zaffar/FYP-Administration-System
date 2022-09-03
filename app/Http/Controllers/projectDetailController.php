<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\projectDetail;
use App\Models\Projact;


class projectDetailController extends Controller
{

    public function index(){
        $s = session()->get('profile_data');
        $Projact=Projact::where('superviser_id',$s[0]->id)->get();
        return view('projectDetail')->with(compact('Projact'));
    }
    public function insert(Request $request)
    {
        $request->validate(
            [
                'project'=> 'required|integer',
                'project_idea'=> 'required',
                'existing_system'=> 'required',
                'abstract'=> 'required',

            ]
        );
        $projectDetail = new projectDetail;
        $projectDetail->proj_id=$request['project'];
        $projectDetail->proj_idea=$request['project_idea'];
        $projectDetail->existing_system=$request['existing_system'];
        $projectDetail->abstract=$request['abstract'];
        $projectDetail->save();
        return redirect('/projectdetail/view');
    }
    public function show()
    {
       $projectDetail=projectDetail::with('getProject')->paginate(100);
       $titel="Project Detail";
       return view('projectdetails_view')->with(compact('projectDetail','titel'));
    }

    public function edit($id)
    {
        $Projact=Projact::all();
        $url="/projectdetail/update"."/".$id;
        $projectDetail=projectDetail::with('getProject')->where('project_detail_id',$id)->get();
        return view('projectdetails_update')->with(compact('projectDetail','Projact','url'));
    }
    public function update($id,Request $request)
    {
        projectDetail::where('project_detail_id',$id)
        ->update(
            [
              'proj_id'=>$request->input('proj_id'),
              'proj_idea'=>$request->input('proj_idea'),
              'existing_system'=>$request->input('existing_system'),
              'abstract'=>$request->input('abstract'),
            ]
        );
        return redirect('/projectdetail/view');

    }
    public function delete($id)
    {
    projectDetail::where('project_detail_id',$id)
    ->delete();
    return redirect()->back();
    }
}
