<?php

namespace App\Http\Controllers;

use App\FlueKit;
use Illuminate\Http\Request;

class FlueKitController extends Controller
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
      $data= new FlueKit();
      $data->name= $request->input('name');
      $data->price= $request->input('price');

      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FlueKit  $flueKit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= FlueKit::find($id)->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FlueKit  $flueKit
     * @return \Illuminate\Http\Response
     */
    public function edit(FlueKit $flueKit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FlueKit  $flueKit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FlueKit $flueKit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FlueKit  $flueKit
     * @return \Illuminate\Http\Response
     */
    public function destroy(FlueKit $flueKit)
    {
        //
    }
}
