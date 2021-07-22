<?php

namespace App\Http\Controllers;

use App\NewFlueLocation;
use Illuminate\Http\Request;

class NewFlueLocationController extends Controller
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
        $data= new NewFlueLocation();
        $data->name=$request->input('name');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewFlueLocation  $newFlueLocation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= NewFlueLocation::find($id)->delete();
        return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewFlueLocation  $newFlueLocation
     * @return \Illuminate\Http\Response
     */
    public function edit(NewFlueLocation $newFlueLocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewFlueLocation  $newFlueLocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewFlueLocation $newFlueLocation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewFlueLocation  $newFlueLocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewFlueLocation $newFlueLocation)
    {
        //
    }
}
