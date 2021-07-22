<?php

namespace App\Http\Controllers;

use App\Boilertypechildren;
use App\Boilerchoise;
use App\Boilertype;
use Illuminate\Http\Request;


class BoilertypechildrenController extends Controller
{
    //

    public function create()
    {
        $boilerchoises = Boilerchoise::all();
        return view('boiler.type.create', compact('boilerchoises'));
    }

    public function store(Request $request)
    {
            Boilertypechildren::create([

                'name' => $request->name,
                'boilerchoise_id' => $request->boilerchoise_id
            ]);

            $notification = array(

                'message' => 'Boiler choice created successffuly',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
    }

    public function getallboilerchildren($id)
    {
       $idd = $id;

       $boilers = Boilertype::where('boilerchoise_id',$idd)->get();
        // $choices = Boilertypechildren::where('boilerchoise_id',$boilers->boiler_id)->get();
        // $boilers['choices'] = $choices;
       return response()->json($boilers);
       
    }
}
