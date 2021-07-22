<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Snowfire\Beautymail\Beautymail;


class ForgetPassword extends Controller
{
    public function forgetpassword(Request $request){
     if($usr=User::where('email',$request->input('email'))->first()){

       $randpass=rand(111111111,99999999);

       $datas=User::find($usr->id);
       $datas->passreset_code=$randpass;
       $datas->save();
       $user_name=$datas->name;
       $user_email=$datas->email;
       $data = [
        'name' => $user_name,
        'link' => 'http://rugs.a2hosted.com/crmnest/api/passreset/'.$randpass,
       ];

       $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
       $beautymail->send('email.forgetpVerify', ["data1"=>$data], function($message) use($user_email)
       {
           $message
           // ->from('info@getyourinsurance.in')
           ->from('info@roadmate.com','MPH BOILER FORGET PASSWORD')
           ->to($user_email)
           ->subject('FORGET PASSWORD');
       });
       echo json_encode(array("success"=>"true","message"=>"Please check your email."));
     }else{
        echo json_encode(array("success"=>"false","message"=>"This email id is not registrated. Please enter a registrated email id."));
     }
    }


    public function passreset($code){
      if($usr=User::where('passreset_code',$code)->first()){
        return view('email.newpassword',compact('code'));
      }else{
        echo 'Not matching';
      }
     }

    public function setnewpassword(Request $request){
      $code=$request->input('pcode');
      $pass=$request->input('pass');
      $cnfpass=$request->input('cnfpass');
      if($pass==$cnfpass){
      $usr=User::where('passreset_code',$code)->first();
      $hasPass= Hash::make($request->input('pass'));
      $usr->password=$hasPass;
      $usr->save();
      echo 'Successfully Password Reset!';
      }else{
          echo 'Invalid Format';
      }

    }

}
