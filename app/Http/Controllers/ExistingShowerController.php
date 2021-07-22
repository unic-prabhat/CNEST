<?php

namespace App\Http\Controllers;

use App\ExistingShower;
use Illuminate\Http\Request;

class ExistingShowerController extends Controller
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
        $data= new ExistingShower();
        $data->name=$request->input('name');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExistingShower  $existingShower
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= ExistingShower::find($id)->delete();
        return 'Success';
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExistingShower  $existingShower
     * @return \Illuminate\Http\Response
     */
    public function edit(ExistingShower $existingShower)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExistingShower  $existingShower
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExistingShower $existingShower)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExistingShower  $existingShower
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExistingShower $existingShower)
    {
        //
    }
}
