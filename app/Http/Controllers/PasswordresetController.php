<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Snowfire\Beautymail\Beautymail;
use App\DynamicEmail;
use App\User;

class PasswordresetController extends Controller
{
    public function forgotpload(){
      return view('forgotpassword');
    }

    public function resetfpass(Request $request){
      $email = $request->input('email');
      if(User::where('email', $email)->first()){
        $randnum= rand(222,999).rand(222,999).rand(222,999).rand(222,999);
        $data= User::where('email', $email)->first();
        $data->passreset_code=$randnum;
        $data->save();

        $user= User::where('email', $email)->first();
        $name = $user->name;
        $email = $user->email;
        $passwordresetlink = 'https://rugs.a2hosted.com/crmnest/reset-mypassword/'.$randnum;

         $data = [
         'status' => 'Hello '.$name,
         'email' => $email,
         'resetlink' => $passwordresetlink,
         ];


          $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
          $beautymail->send('newemail.emailVerify', ["data1"=>$data], function($message) use($email,$name)
          {
              $message
              ->from('prabhat@rugs.a2hosted.com','MPH Boiler')
              ->to($email, $name)
              ->subject('Password Reset');
          });

        session()->flash('messaget', 'A Password reset link will send to your Email Plz check & reset password!');
        return redirect('forgotpasw');
      }else{

        session()->flash('messaget', 'Invali Email id!');
        return redirect()->back();
      }

    }

    public function resetmypass($code){
      $cd = $code;
      return view('setnewpassword',compact('cd'));
    }

    public function updatepass(Request $request){
      $code=$request->input('passreset_code');
      $data= User::where('passreset_code', $code)->first();
      $data->password=Hash::make($request->input('password'));
      $data->save();
      return redirect('login');
    }

}
