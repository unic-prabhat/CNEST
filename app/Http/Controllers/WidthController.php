<?php

namespace App\Http\Controllers;

use App\Width;
use Illuminate\Http\Request;

class WidthController extends Controller
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
      $data= new Width();
      $data->name=$request->input('name');
      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Width  $width
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= Width::find($id)->delete();
      return 'Success';
    }

    public function widthsetupdater(Request $request){

      $id=$request->input('id');
      $data= Width::find($id);
      $data->name=$request->input('name');
      $data->save();
      return 'Success';

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Width  $width
     * @return \Illuminate\Http\Response
     */
    public function edit(Width $width)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Width  $width
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Width $width)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Width  $width
     * @return \Illuminate\Http\Response
     */
    public function destroy(Width $width)
    {
        //
    }
}
