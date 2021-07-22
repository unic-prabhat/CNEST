<?php

namespace App\Http\Controllers;

use App\RadiatorRequirements;
use Illuminate\Http\Request;

class RadiatorRequirementsController extends Controller
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
      $data= new RadiatorRequirements();
      $data->name= $request->input('name');
      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RadiatorRequirements  $radiatorRequirements
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= RadiatorRequirements::find($id)->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RadiatorRequirements  $radiatorRequirements
     * @return \Illuminate\Http\Response
     */
    public function edit(RadiatorRequirements $radiatorRequirements)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RadiatorRequirements  $radiatorRequirements
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RadiatorRequirements $radiatorRequirements)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RadiatorRequirements  $radiatorRequirements
     * @return \Illuminate\Http\Response
     */
    public function destroy(RadiatorRequirements $radiatorRequirements)
    {
        //
    }
}
