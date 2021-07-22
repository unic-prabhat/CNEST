<?php

namespace App\Http\Controllers;

use App\NewControls;
use Illuminate\Http\Request;

class NewControlsController extends Controller
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
        $data = new NewControls();
        $data->name= $request->input('name');
        $data->price= $request->input('price');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewControls  $newControls
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= NewControls::find($id)->delete();
        return 'Success';

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewControls  $newControls
     * @return \Illuminate\Http\Response
     */
    public function edit(NewControls $newControls)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewControls  $newControls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewControls $newControls)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewControls  $newControls
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewControls $newControls)
    {
        //
    }
}
