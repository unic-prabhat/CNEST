<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class RegistrationController extends Controller
{
    public function registeruser(Request $request){
      $name = $request->input('name');
      $email = $request->input('email');
      $hasPass= Hash::make($request->input('password'));
      if(User::where('email',$email)->first()){
        $data = [
                'success' => 'false',
                'msg' => 'This Email id already exists. Please try with e-mail id'
                ];

        return response()->json($data);
      }else{

        $datas = new User();
        $randpass=rand(1111111,999999);
        $datas->name = $request->input('name');
        $datas->email = $request->input('email');
        $datas->password = $hasPass;
        $datas->email_verifycode = $randpass;
        $datas->isAdmin = 0;

        $datas->save();
        $data = [
                'success' => 'true',
                'msg' => 'successfully Registered!'
                ];
        return response()->json($data);
      }

    }
}
