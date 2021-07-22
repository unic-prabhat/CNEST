<?php

namespace App\Http\Controllers;

use App\Postcode;
use Importer;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    //
    
    public function index()
    {
        return view('excel.create');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'excel' => 'required|mimes:xlsx,xls'
            ]);
            
            if($request->file('excel'))
            {
                $filename = date('Dmy_H:i:s').$request->file('excel')->getClientOriginalName();
                $uploadpath = public_path('upload/');
                $request->file('excel')->move($uploadpath,$filename);
                $excel = Importer::make('Excel');
                $excel->load($uploadpath.$filename);
                $collection = $excel->getCollection();
                if(sizeof($collection[1]) == 3)
                {
                    for($row = 1; $row<sizeof($collection); $row++)
                    {
                        // try
                        // {
                            $excel = new Postcode();
                            $excel->state = $collection[$row][0];
                            $excel->city = $collection[$row][1];
                            $excel->postcode = $collection[$row][2];
                            $excel->save();
                        // }
                        // catch(\Exception $e)
                        // {
                        //     return redirect()->back()->with(['error'=>$e->getMessage()]);
                        // }
                    }
                }
            }
    }
}
