<?php

namespace App\Http\Controllers;

use App\CupboardNeedAlt;
use Illuminate\Http\Request;

class CupboardNeedAltController extends Controller
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
      $data= new CupboardNeedAlt();
      $data->name= $request->input('name');
      $data->price= $request->input('price');

      $data->save();
      return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CupboardNeedAlt  $cupboardNeedAlt
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= CupboardNeedAlt::find($id)->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CupboardNeedAlt  $cupboardNeedAlt
     * @return \Illuminate\Http\Response
     */
    public function edit(CupboardNeedAlt $cupboardNeedAlt)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CupboardNeedAlt  $cupboardNeedAlt
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CupboardNeedAlt $cupboardNeedAlt)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CupboardNeedAlt  $cupboardNeedAlt
     * @return \Illuminate\Http\Response
     */
    public function destroy(CupboardNeedAlt $cupboardNeedAlt)
    {
        //
    }
}
