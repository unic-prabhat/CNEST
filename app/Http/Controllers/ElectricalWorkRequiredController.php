<?php

namespace App\Http\Controllers;

use App\ElectricalWorkRequired;
use Illuminate\Http\Request;

class ElectricalWorkRequiredController extends Controller
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
      $data= new ElectricalWorkRequired();
      $data->name= $request->input('name');
      $data->price= $request->input('price');

      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ElectricalWorkRequired  $electricalWorkRequired
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= ElectricalWorkRequired::find($id)->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ElectricalWorkRequired  $electricalWorkRequired
     * @return \Illuminate\Http\Response
     */
    public function edit(ElectricalWorkRequired $electricalWorkRequired)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ElectricalWorkRequired  $electricalWorkRequired
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ElectricalWorkRequired $electricalWorkRequired)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ElectricalWorkRequired  $electricalWorkRequired
     * @return \Illuminate\Http\Response
     */
    public function destroy(ElectricalWorkRequired $electricalWorkRequired)
    {
        //
    }
}
