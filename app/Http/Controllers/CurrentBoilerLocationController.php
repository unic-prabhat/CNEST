<?php

namespace App\Http\Controllers;

use App\CurrentBoilerLocation;
use Illuminate\Http\Request;

class CurrentBoilerLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 123;
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
        $data= new CurrentBoilerLocation();
        $data->name=$request->input('name');
        $data->save();

        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CurrentBoilerLocation  $currentBoilerLocation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= CurrentBoilerLocation::find($id)->delete();
        return 'Success';
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CurrentBoilerLocation  $currentBoilerLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(CurrentBoilerLocation $currentBoilerLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CurrentBoilerLocation  $currentBoilerLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CurrentBoilerLocation $currentBoilerLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CurrentBoilerLocation  $currentBoilerLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(CurrentBoilerLocation $currentBoilerLocation)
    {
        //
    }
}
