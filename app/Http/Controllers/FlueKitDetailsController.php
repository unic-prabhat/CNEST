<?php

namespace App\Http\Controllers;

use App\FlueKitDetails;
use Illuminate\Http\Request;

class FlueKitDetailsController extends Controller
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
      $data= new FlueKitDetails();
      $data->name= $request->input('name');
      $data->price= $request->input('price');
      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FlueKitDetails  $flueKitDetails
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= FlueKitDetails::find($id)->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FlueKitDetails  $flueKitDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(FlueKitDetails $flueKitDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FlueKitDetails  $flueKitDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlueKitDetails $flueKitDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FlueKitDetails  $flueKitDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlueKitDetails $flueKitDetails)
    {
        //
    }
}
