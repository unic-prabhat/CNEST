<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Support\Facades\Auth;
use Snowfire\Beautymail\Beautymail;


class LoginController extends Controller
{
    public function loginuser(Request $request){
      $hasPass= Hash::make('password');
      $email = $request->input('email');
      $pass = $request->input('password');
      $datapass = Hash::check($pass, $hasPass);

      if(Auth::attempt(['email' => $email, 'password' => $pass])){
        if(User::where('email',$email)->first()->isAdmin===0){
         echo json_encode(array('success'=>'false','msg'=>'Email is not activated yet!'));
        }else{
         echo json_encode(array('success'=>'true','login'=>'success','Name'=>User::where('email',$email)->first()->name,'Email'=>$email));
        }
      }else{

         echo json_encode(array('success'=>'false','login'=>'failed'));
      }



    }

    public function sendemailverify($email){
      if(User::where('email',$email)->first()){

        $user= User::where('email', $email)->first();
        $user_email=$user->email;
        $user_name=$user->name;
        $user_email_verifycode=$user->email_verifycode;


        $data = [
         'name' => $user_name,
         'link' => 'http://rugs.a2hosted.com/crmnest/api/verifyActivation/'.$user_email_verifycode,
        ];

        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('email.emailVerify', ["data1"=>$data], function($message) use($user_email)
        {
            $message
            // ->from('info@getyourinsurance.in')
            ->from('info@roadmate.com','MPH BOILER EMAILACTIVATION')
            ->to($user_email)
            ->subject('Email Verification');
        });
        echo json_encode(array("success"=>"true","message"=>"Please check your email."));


      }else{

        echo json_encode(array("success"=>"false","message"=>"This email id is not registrated. Please enter a registrated email id."));

      }
    }

    public function verifyActivation($code){
      $user= User::where('email_verifycode', $code)->first();
      if($user){
        $user->isAdmin=1;
        $user->save();
        $email = $user->email;
        $name = $user->name;

        $data = [
         'name' => $name,
         'email' => $email,
         'msg' => 'Thank You for your activation!'
        ];

        $beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
        $beautymail->send('email.thankyouemail', ["data1"=>$data], function($message) use($email)
        {
            $message
            // ->from('info@getyourinsurance.in')
            ->from('info@roadmate.com','MPH BOILER THANKYOU')
            ->to($email)
            ->subject('Email Thankyou');
        });
        //echo json_encode(array("success"=>"true","message"=>"Please check your email to get activation status."));
        //return redirect('/login')->with('success','Thank You For Your Activation!');
        return redirect('/login')->withSuccess('Thank You For Your Activation!');
      }else{
          return redirect()->back()->with('Failed','Activation Failed!');
          //echo json_encode(array("success"=>"false","message"=>"Invalid Format,Try Again."));
      }

    }


}
