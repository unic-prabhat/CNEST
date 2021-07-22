<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boilertype;
use Illuminate\Support\Facades\File;

class QuotationSettingsController extends Controller
{


    public function ragularboilerimageupdate(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $upd= Boilertype::find($request->input('id'));
      $upd->image=$imagename;
      $upd->save();

      return 'Success';
    }

    public function systemboilerimageupdate(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $upd= Boilertype::find($request->input('id'));
      $upd->image=$imagename;
      $upd->save();

      return 'Success';
    }

    public function combiboilerimageupdate(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $upd= Boilertype::find($request->input('id'));
      $upd->image=$imagename;
      $upd->save();

      return 'Success';
    }

    public function electricboilerimageupdate(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $upd= Boilertype::find($request->input('id'));
      $upd->image=$imagename;
      $upd->save();

      return 'Success';
    }


    public function boileroilimageupdate(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $upd= Boilertype::find($request->input('id'));
      $upd->image=$imagename;
      $upd->save();

      return 'Success';
    }




    public function calcPmt( $amt , $i, $term ) {
      $int = $i/1200;
      $int1 = 1+$int;
      $r1 = pow($int1, $term);
      $pmt = $amt*($int*$r1)/($r1-1);
        return round($pmt);
    }


    public function boilerchoiceregular(Request $request)
    {
      // $data= new Boilertype();
      // $data->boilertype=$request->input('boilertype');
      // $data->price=$request->input('price');
      // $data->warranty=$request->input('warranty');
      // $data->boilerchoise_id=$request->input('boilerchoise_id');
      // $data->save();

      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $data= new Boilertype();
      $data->boilertype=$request->input('boilertype');
      $data->company=$request->input('company');
      $data->price=$request->input('price');
      $data->boilerchoise_id=$request->input('boilerchoise_id');
      $data->warranty=$request->input('warranty');
      $data->image=$imagename;


      $data->apr1='8.2%';
      $data->duration1='120';
      $data->totalpay1=120*$this->calcPmt( $request->input('price'), 8.2, 120 );
      $data->monthly1=$this->calcPmt( $request->input('price'), 8.2, 120 );

      $data->apr2='8.2%';
      $data->duration2='60';
      $data->totalpay2=60*$this->calcPmt( $request->input('price'), 8.2, 60 );
      $data->monthly2=$this->calcPmt( $request->input('price'), 8.2, 60 );


      $data->apr3='0%';
      $data->duration3='12';
      $data->totalpay3=$request->input('price');
      $data->monthly3=round($request->input('price')/12);

      $data->save();

      return 'Success';


      // echo $this->calcPmt( 2700, 8.2, 60 );
    }
    public function boilerchoiceregulardelete($id)
    {
      $data= Boilertype::find($id);
      File::delete($data->image);
      $data->delete();
      return 'Success';
    }


    public function boilerchoicesystem(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $data= new Boilertype();
      $data->boilertype=$request->input('boilertype');
      $data->company=$request->input('company');
      $data->price=$request->input('price');
      $data->boilerchoise_id=$request->input('boilerchoise_id');
      $data->warranty=$request->input('warranty');
      $data->image=$imagename;

      $data->apr1='8.2%';
      $data->duration1='120';
      $data->totalpay1=120*$this->calcPmt( $request->input('price'), 8.2, 120 );
      $data->monthly1=$this->calcPmt( $request->input('price'), 8.2, 120 );

      $data->apr2='8.2%';
      $data->duration2='60';
      $data->totalpay2=60*$this->calcPmt( $request->input('price'), 8.2, 60 );
      $data->monthly2=$this->calcPmt( $request->input('price'), 8.2, 60 );


      $data->apr3='0%';
      $data->duration3='12';
      $data->totalpay3=$request->input('price');
      $data->monthly3=round($request->input('price')/12);
      $data->save();

      return 'Success';
    }
    public function boilerchoicesystemdelete($id)
    {
      $data= Boilertype::find($id);
      File::delete($data->image);
      $data->delete();
      return 'Success';
    }

    public function boilerchoicecombi(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $data= new Boilertype();
      $data->boilertype=$request->input('boilertype');
      $data->price=$request->input('price');
      $data->company=$request->input('company');

      $data->boilerchoise_id=$request->input('boilerchoise_id');
      $data->warranty=$request->input('warranty');
      $data->image=$imagename;

      $data->apr1='8.2%';
      $data->duration1='120';
      $data->totalpay1=120*$this->calcPmt( $request->input('price'), 8.2, 120 );
      $data->monthly1=$this->calcPmt( $request->input('price'), 8.2, 120 );

      $data->apr2='8.2%';
      $data->duration2='60';
      $data->totalpay2=60*$this->calcPmt( $request->input('price'), 8.2, 60 );
      $data->monthly2=$this->calcPmt( $request->input('price'), 8.2, 60 );


      $data->apr3='0%';
      $data->duration3='12';
      $data->totalpay3=$request->input('price');
      $data->monthly3=round($request->input('price')/12);
      $data->save();
      return 'Success';
    }
    public function boilerchoicecombidelete($id)
    {
      $data= Boilertype::find($id);
      $data->delete();
      return 'Success';
    }

    public function boilerchoiceoilsystemdelete($id)
    {
      $data= Boilertype::find($id);
      File::delete($data->image);
      $data->delete();
      return 'Success';
    }

    public function boilerchoiceelectric(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $data= new Boilertype();
      $data->boilertype=$request->input('boilertype');
      $data->price=$request->input('price');
      $data->company=$request->input('company');

      $data->boilerchoise_id=$request->input('boilerchoise_id');
      $data->warranty=$request->input('warranty');
      $data->image=$imagename;

      $data->apr1='8.2%';
      $data->duration1='120';
      $data->totalpay1=120*$this->calcPmt( $request->input('price'), 8.2, 120 );
      $data->monthly1=$this->calcPmt( $request->input('price'), 8.2, 120 );

      $data->apr2='8.2%';
      $data->duration2='60';
      $data->totalpay2=60*$this->calcPmt( $request->input('price'), 8.2, 60 );
      $data->monthly2=$this->calcPmt( $request->input('price'), 8.2, 60 );


      $data->apr3='0%';
      $data->duration3='12';
      $data->totalpay3=$request->input('price');
      $data->monthly3=round($request->input('price')/12);
      $data->save();
      return 'Success';
    }


    public function boilerchoiceoil(Request $request)
    {
      $image = $request->file('file');
      $name = time().''.mt_rand(100, 200).'.'.$image->getClientOriginalExtension();
      $destinationPath = 'public/storage/uploadimage';
      $imagename= $image->move($destinationPath, $name);

      $data= new Boilertype();
      $data->boilertype=$request->input('boilertype');
      $data->price=$request->input('price');
      $data->company=$request->input('company');

      $data->boilerchoise_id=$request->input('boilerchoise_id');
      $data->warranty=$request->input('warranty');
      $data->image=$imagename;

      $data->apr1='8.2%';
      $data->duration1='120';
      $data->totalpay1=120*$this->calcPmt( $request->input('price'), 8.2, 120 );
      $data->monthly1=$this->calcPmt( $request->input('price'), 8.2, 120 );

      $data->apr2='8.2%';
      $data->duration2='60';
      $data->totalpay2=60*$this->calcPmt( $request->input('price'), 8.2, 60 );
      $data->monthly2=$this->calcPmt( $request->input('price'), 8.2, 60 );


      $data->apr3='0%';
      $data->duration3='12';
      $data->totalpay3=$request->input('price');
      $data->monthly3=round($request->input('price')/12);
      $data->save();
      return 'Success';
    }



    public function boilerchoiceelectricdelete($id)
    {
      $data= Boilertype::find($id);
      $data->delete();
      return 'Success';
    }
    public function upimgty(Request $request)
    {
        $images = $request->file('image');
        return $extension = $images->getClientOriginalExtension();
    }

    public function firstregularprice($firstregularid)
    {

       $data= Boilertype::where('id',$firstregularid)->first()->warranty;
        return $data;
    }

    public function secondregularprice($secondregularid)
    {

       $data= Boilertype::where('id',$secondregularid)->first()->warranty;
        return $data;
    }

    public function thirdregularprice($thirdregularid)
    {

       $data= Boilertype::where('id',$thirdregularid)->first()->warranty;
        return $data;
    }

}
