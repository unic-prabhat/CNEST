<?php

namespace App\Http\Controllers;

use App\Removals;
use Illuminate\Http\Request;

class RemovalsController extends Controller
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
        $data= new Removals();
        $data->name= $request->input('name');
        $data->save();
        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Removals  $removals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= Removals::find($id)->delete();
        return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Removals  $removals
     * @return \Illuminate\Http\Response
     */
    public function edit(Removals $removals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Removals  $removals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Removals $removals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Removals  $removals
     * @return \Illuminate\Http\Response
     */
    public function destroy(Removals $removals)
    {
        //
    }
}
