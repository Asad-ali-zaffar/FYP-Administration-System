<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\AnnouncementByAdmin;
use App\Models\Student_model;
use App\Models\Teacher;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=route('Announcement.store');
        return view('Admin.Announcement',compact('url'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;

        $request->validate([
            'discription'=>'required',
        ]);
        $Announcement=new Announcement;
        $Announcement->announcement=$request->discription;
        $Announcement->save();
        $description=$request->discription;
        $sender=$request->id;
        $heading="New Announcement For Students";
        $url=url('adminannocement_std');
        $received=Student_model::all();
        Notification::send($received,new AnnouncementByAdmin($sender,$description,$url,$heading));
        $url1=url('adminannocement_teacher');
        $heading="New Announcement For Supervisers";
        $received=Teacher::all();
        Notification::send($received,new AnnouncementByAdmin($sender,$description,$url1,$heading));

        return redirect()->back()->with('success','Announcement is Send All supervisors and Students Successfuly!!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement){}
    public function adminannocement_std($id){
         $user=session()->get('user');

        return view('student.announcement');
    }
    public function adminannocement_teacher($id)
    {
        // return $user=session()->get('user');
        return view('announcement');
    }

}

