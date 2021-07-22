<?php

namespace App\Http\Controllers;

use App\GasSupplyLength;
use Illuminate\Http\Request;

class GasSupplyLengthController extends Controller
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
      $data= new GasSupplyLength();
      $data->name= $request->input('name');
      $data->price= $request->input('price');

      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GasSupplyLength  $gasSupplyLength
     * @return \Illuminate\Http\Response
     */
     public function show($id)
     {
       $data= GasSupplyLength::find($id)->delete();
       return 'Success';
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GasSupplyLength  $gasSupplyLength
     * @return \Illuminate\Http\Response
     */
    public function edit(GasSupplyLength $gasSupplyLength)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GasSupplyLength  $gasSupplyLength
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GasSupplyLength $gasSupplyLength)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GasSupplyLength  $gasSupplyLength
     * @return \Illuminate\Http\Response
     */
    public function destroy(GasSupplyLength $gasSupplyLength)
    {
        //
    }
}
