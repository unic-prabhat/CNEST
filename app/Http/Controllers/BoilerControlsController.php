<?php

namespace App\Http\Controllers;

use App\BoilerControls;
use Illuminate\Http\Request;

class BoilerControlsController extends Controller
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
        $data= new BoilerControls();
        $data->pack=$request->input('pack');
        $data->price=$request->input('price');
        $data->save();

        return 'Success';

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BoilerControls  $boilerControls
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $data= BoilerControls::find($id);
      $data->delete();
      return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BoilerControls  $boilerControls
     * @return \Illuminate\Http\Response
     */
    public function edit(BoilerControls $boilerControls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BoilerControls  $boilerControls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BoilerControls $boilerControls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BoilerControls  $boilerControls
     * @return \Illuminate\Http\Response
     */
    public function destroy(BoilerControls $boilerControls)
    {
        //
    }
}
