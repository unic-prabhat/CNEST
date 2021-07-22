<?php

namespace App\Http\Controllers\UserSales;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lead;
use App\Boiler;
use App\Boilerchoise;
use App\LeadQuotation;
use Session;

class BoilersalesuserController extends Controller
{
  public function index($id)
  {
      $lead = Lead::find($id);
      $unq=uniqid();
      Session::put('unq', $unq);
      return view('UserSales.boiler.index',compact('lead'));
  }
}
