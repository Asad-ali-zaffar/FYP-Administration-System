<?php

namespace App\Http\Controllers;

use App\Models\FypParposal;
use Illuminate\Http\Request;

class FypParposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FypParposal  $fypParposal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $fypParposal=FypParposal::all();

        return view('requst')->with(compact('fypParposal'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FypParposal  $fypParposal
     * @return \Illuminate\Http\Response
     */
    public function edit(FypParposal $fypParposal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FypParposal  $fypParposal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FypParposal $fypParposal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FypParposal  $fypParposal
     * @return \Illuminate\Http\Response
     */
    public function destroy(FypParposal $fypParposal)
    {
        //
    }
}
