<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;
use App\Models\department;

class ProgramController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'Program_name'=>'required|unique:program,prog_name,id,prog_id',
            'department'=>'required|integer',
        ]);
        $Program=new Program;
        $Program->prog_name=$request['Program_name'];
        $Program->prog_status=1;
        $Program->dept_id=$request['department'];
        $Program->save();
        return redirect('/program_view');
    }

    public function edit($id)
    {
        $Program=Program::where('prog_id',$id)->get();
        $department=department::all();
        $url='/program_update'."/".$id;
        return view('Program_update')->with(compact('Program','url','department'));
    }
    public function view(Request $request)
    {
        $Program = Program::paginate(100);
        $titel="Program";
        $dpt="";
        foreach($Program as $valu)
        {
            $dpt=$valu->dept_id;
        }
        $department=department::where('dept_id',$dpt)->get();
        return view('Program_view')->with(compact('titel','Program','department'));
    }
    public function update(Request $request,$id)
    {

        Program::where('prog_id',$id)
        ->update([
            'prog_name'=>$request->input('val_username'),
            'prog_status'=>$request->input('optradio'),
            'dept_id'=>$request->input('dptProgram'),
        ]);
        return redirect('/program_view');

    }
    public function delete($id)
    {
        Program::where('prog_id',$id)->delete();
        return redirect()->back();
    }
    public function status($id,$s)
    {
        Program::where('prog_id',$id)
        ->update([
            'prog_status'=>$s
        ]);
        return redirect()->back();
    }

}
