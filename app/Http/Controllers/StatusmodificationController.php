<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class StatusmodificationController extends Controller
{
    public function getid(Request $request){
      $id = $request->input('id');
      $value = $request->input('val');
      if($request->input('val')==1){
      $data = User::find($id);
      $data->acinstatus=2;
      $data->save();
        echo 'success';
    }else{

      $data = User::find($id);
      $data->acinstatus=1;
      $data->save();
        echo 'success';
    }

  }
}
