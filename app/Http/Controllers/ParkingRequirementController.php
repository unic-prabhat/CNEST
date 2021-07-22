<?php

namespace App\Http\Controllers;

use App\ParkingRequirement;
use Illuminate\Http\Request;

class ParkingRequirementController extends Controller
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
      $data= new ParkingRequirement();
      $data->name= $request->input('name');
      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ParkingRequirement  $parkingRequirement
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= ParkingRequirement::find($id)->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ParkingRequirement  $parkingRequirement
     * @return \Illuminate\Http\Response
     */
    public function edit(ParkingRequirement $parkingRequirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ParkingRequirement  $parkingRequirement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParkingRequirement $parkingRequirement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ParkingRequirement  $parkingRequirement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParkingRequirement $parkingRequirement)
    {
        //
    }
}
