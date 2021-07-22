<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class OnlyRegisterController extends Controller
{
    public function registme(Request $request){

      if(User::where('email',$request->input('email'))->first()){
        return redirect()->back();
      }else{
        $data=new User();
        $data->name=$request->input('name');
        $data->username=$request->input('username');
        $data->email=$request->input('email');
        $data->isAdmin=1;
        $data->userrole=$request->input('userrole');
        $data->acinstatus=$request->input('acinstatus');
        $data->password=Hash::make($request->input('password'));
        $data->save();
        return redirect('home')->with(['success-message4'=>'Registration success','success-message-details'=>'You have register successfully!']);
      }

    }
}
