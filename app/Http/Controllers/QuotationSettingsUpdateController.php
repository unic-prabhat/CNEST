<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Boilertype;
use App\BoilerControls;
use App\BoltOns;
use App\CurrentBoilerType;
use App\CurrentBoilerLocation;
use App\NewFlue;
use App\NewFlueLocation;
use App\CondensateTermination;
use App\NewControls;
use App\Removals;
use App\CupboardNeedAlt;
use App\ChemicalSystemTreatment;
use App\GasSupplyRequirements;
use App\ElectricalWorkRequired;
use App\GasSupplyLength;
use App\ACM;
use App\ParkingRequirement;
use App\FlueKit;
use App\FlueKitDetails;
use App\MagneticSystemFilter;
use App\VentedCylinderDimension;
use App\NewBoilerType;
use App\CurrentFlue;
use App\ExistingShower;
use App\newfuleType;

class QuotationSettingsUpdateController extends Controller
{


    public function calcPmt( $amt , $i, $term ) {
      $int = $i/1200;
      $int1 = 1+$int;
      $r1 = pow($int1, $term);
      $pmt = $amt*($int*$r1)/($r1-1);
        return round($pmt);
    }


    public function boilertypeupdate(Request $request)
    {
      $data= Boilertype::find($request->input('id'));
      $data->boilertype=$request->input('boilertype');
      $data->price=$request->input('price');
      $data->company=$request->input('company');
      $data->boilerchoise_id=$request->input('boilerchoise_id');
      $data->warranty=$request->input('warranty');


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
      echo "Success";
    }



    public function boilerchoiceoilupdate(Request $request)
    {
      $data= Boilertype::find($request->input('id'));
      $data->boilertype=$request->input('boilertype');
      $data->price=$request->input('price');
      $data->company=$request->input('company');
      $data->boilerchoise_id=$request->input('boilerchoise_id');
      $data->warranty=$request->input('warranty');


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
      echo "Success";
    }



    public function boilercontrolsupdate(Request $request)
    {
      $data= BoilerControls::find($request->input('id'));
      $data->price=$request->input('price');
      $data->pack=$request->input('pack');
      $data->save();
      echo "Success";
    }

    public function boltsonupdate(Request $request)
    {
      $data= BoltOns::find($request->input('id'));
      $data->name=$request->input('name');
      $data->value=$request->input('value');
      $data->save();
      echo "Success";
    }

    public function currboilerupd(Request $request)
    {
      $data= CurrentBoilerType::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }

    public function currboilerlocupd(Request $request)
    {
      $data= CurrentBoilerLocation::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }

    public function newfluttypeupd(Request $request)
    {
      $data= NewFlue::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function newfluttypelocch(Request $request)
    {
      $data= NewFlueLocation::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }
    public function nwconterupd(Request $request)
    {
      $data= CondensateTermination::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }
    public function newcontrolsqwupd(Request $request)
    {
      $data= NewControls::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function boiremovalsupd(Request $request)
    {
      $data= Removals::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }
    public function cupbrdneedupd(Request $request)
    {
      $data= CupboardNeedAlt::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function chesystreatupd(Request $request)
    {
      $data= ChemicalSystemTreatment::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function gassupreqsupd(Request $request)
    {
      $data= GasSupplyRequirements::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }
    public function eleworkrequpd(Request $request)
    {
      $data= ElectricalWorkRequired::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function gassuplenghpriceupd(Request $request)
    {
      $data= GasSupplyLength::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function acmupd(Request $request)
    {
      $data= ACM::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }
    public function parrequpd(Request $request)
    {
      $data= ParkingRequirement::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
    }
    public function flukitupd(Request $request)
    {
      $data= FlueKit::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function flukitdetupd(Request $request)
    {
      $data= FlueKitDetails::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function magsysfiltupd(Request $request)
    {
      $data= MagneticSystemFilter::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
    }
    public function vencyldimupd(Request $request)
    {
      $data= VentedCylinderDimension::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
      // echo $request->input('name');
    }

    public function newboilertypeupd(Request $request)
    {
      $data= NewBoilerType::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
      // echo $request->input('name');
    }

    public function boilerlocationupd(Request $request)
    {
      $data= CurrentFlue::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
      // echo $request->input('name');
    }

    public function boilertypeexshupd(Request $request)
    {
      $data= ExistingShower::find($request->input('id'));
      $data->name=$request->input('name');
      $data->save();
      echo "Success";
      // echo $request->input('name');
    }
    public function newfltypeupd(Request $request)
    {
      $data= newfuleType::find($request->input('id'));
      $data->name=$request->input('name');
      $data->price=$request->input('price');
      $data->save();
      echo "Success";
      // echo $request->input('name');
    }

















}
