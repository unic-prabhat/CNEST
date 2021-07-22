<?php

namespace App\Http\Controllers\UserSales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use App\User;

class Salesuserprofileupdate extends Controller
{
    public function salesprofileedit($id){
      $user=User::find($id);
      return view('UserSales.edituserprofile',compact('user'));
    }

    public function salesprofilupdate(Request $request,$id){


      //PROFILE PIC
      if($request->file('userprofilepic') != NULL){
        $image = $request->file('userprofilepic');
        $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
        $destinationPath = 'public/storage/uploadimage';
        $imagename= $image->move($destinationPath, $name);
        $data=User::find($id);
        $data->userprofilepic=$imagename;
        $data->save();
      }else{
      }

      //PASSWORD
      if($request->input('password') != NULL){

        $data=User::find($id);
        $pass=Hash::make($request->input('password'));
        $data->save();

      }else{

      }


      $data=User::find($id);
      $data->name=$request->input('name');
      $data->username=$request->input('username');
      $data->email=$request->input('email');
      $data->save();
      return redirect()->back();
      return redirect('/salesuser');


    }
}
