<?php

namespace App\Http\Controllers;

use App\NewFlue;
use Illuminate\Http\Request;

class NewFlueController extends Controller
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
        $data= new NewFlue();
        $data->name= $request->input('name');
        $data->price= $request->input('price');

        $data->save();

        return 'Success';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NewFlue  $newFlue
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= NewFlue::find($id)->delete();
        return 'Success';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewFlue  $newFlue
     * @return \Illuminate\Http\Response
     */
    public function edit(NewFlue $newFlue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewFlue  $newFlue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewFlue $newFlue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NewFlue  $newFlue
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewFlue $newFlue)
    {
        //
    }
}
