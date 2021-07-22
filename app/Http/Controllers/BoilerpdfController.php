<?php

namespace App\Http\Controllers;

use App\Lead;
use App\Boiler;
use App\Boilerchoise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class BoilerpdfController extends Controller
{

	public function generated()
	{
		 $data = ['title' => 'new'];
 		
            $pdf = PDF::loadView('boiler.htmltopdfview',$data);
            	//return $pdf->stream($pdf);
			$pdf->save(storage_path().'_filename.pdf');
			//return view('boiler.htmltopdfview');
			return $pdf->stream("invoice.pdf");
  			//return $pdf->download('customers.pdf');
	}
}