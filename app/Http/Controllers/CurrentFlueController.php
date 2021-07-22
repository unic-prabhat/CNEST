<?php

namespace App\Http\Controllers;

use App\CurrentFlue;
use Illuminate\Http\Request;

class CurrentFlueController extends Controller
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
        $data=new CurrentFlue();
        $data->name=$request->input('name');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CurrentFlue  $currentFlue
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= CurrentFlue::find($id)->delete();
        return 'Success';

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CurrentFlue  $currentFlue
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrentFlue $currentFlue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CurrentFlue  $currentFlue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CurrentFlue $currentFlue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurrentFlue  $currentFlue
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrentFlue $currentFlue)
    {
        //
    }
}
