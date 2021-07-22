<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ContactList;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchAll(){
      $username = Auth::user()->username;
      $list = DB::table('contact_lists')
                            ->where('deal_owner',$username)
                            ->get();

                            $tot_amount = DB::table('contact_lists')
                                                  ->where('deal_owner',$username)
                                                  ->sum('deal_amount');




      return view('UserSuperAdmin._viewFetchDealTable')->with('lists',$list);
    }

    public function index()
    {
      $username = Auth::user()->username;
      $list = DB::table('contact_lists')
                            ->where('deal_owner',$username)
                            ->get();


        $username = Auth::user()->username;
        $data_ideal_proposal = DB::table('contact_lists')
                              ->where('deal_owner',$username)
                              ->Where('deal_stage','ideal_proposal')
                              ->get();
                              $data_follow_up = DB::table('contact_lists')
                                                    ->where('deal_owner',$username)
                                                    ->Where('deal_stage','follow_up')
                                                    ->get();
                                                    $data_negotiation = DB::table('contact_lists')
                                                                          ->where('deal_owner',$username)
                                                                          ->Where('deal_stage','negotiation')
                                                                          ->get();
                                                                          $data_lost = DB::table('contact_lists')
                                                                                                ->where('deal_owner',$username)
                                                                                                ->Where('deal_stage','lost')
                                                                                                ->get();
                                                                                                $data_won = DB::table('contact_lists')
                                                                                                                      ->where('deal_owner',$username)
                                                                                                                      ->Where('deal_stage','won')
                                                                                                                      ->get();

        return view('UserSuperAdmin.viewDeal')->with(['lists'=>$list,
                                                      'data1'=>$data_ideal_proposal,
                                                      'data2'=>$data_follow_up,
                                                      'data3'=>$data_negotiation,
                                                      'data4'=>$data_lost,
                                                      'data5'=>$data_won]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = ContactList::find($id);
        return view('UserSuperAdmin.createDeal')->with('data',$data);
        // return $data->first_name;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    //Return Updated Amount
    public function showAmount()
    {
      $username = Auth::user()->username;
      $amount1 = DB::table('contact_lists')
                            ->Where('deal_stage','ideal_proposal')
                            ->where('deal_owner',$username)
                            ->sum('deal_amount');
                            $amount2 = DB::table('contact_lists')
                                                  ->Where('deal_stage','follow_up')
                                                  ->where('deal_owner',$username)
                                                  ->sum('deal_amount');
                                                  $amount3 = DB::table('contact_lists')
                                                                        ->Where('deal_stage','negotiation')
                                                                        ->where('deal_owner',$username)
                                                                        ->sum('deal_amount');
                                                                        $amount4 = DB::table('contact_lists')
                                                                                              ->Where('deal_stage','lost')
                                                                                              ->where('deal_owner',$username)
                                                                                              ->sum('deal_amount');
                                                                                              $amount5 = DB::table('contact_lists')
                                                                                                                    ->Where('deal_stage','won')
                                                                                                                    ->where('deal_owner',$username)
                                                                                                                    ->sum('deal_amount');

      // $amount = DB::select( DB::raw("SELECT * FROM some_table WHERE some_col = '$someVariable'") );

      // $amount = DB::select( DB::raw("SELECT SUM(deal_amount) FROM contact_lists WHERE deal_owner = $username") );
        // $name='USA';
        // $amount = 300;
        return response()->json([
          'amount1' => $amount1,
          'amount2' => $amount2,
          'amount3' => $amount3,
          'amount4' => $amount4,
          'amount5' => $amount5,
        ]);

        // return 123;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = ContactList::find($id);
        $user->deal_name= $request->input('deal_name');
        $user->deal_stage= $request->input('deal_stage');
        $user->deal_amount= $request->input('deal_amount');
        $user->deal_closing_date= $request->input('deal_closing_date');
        $user->deal_owner= $request->input('deal_owner');
        $user->save();

        return redirect('/SuperAdminAllLeadsList')->with('message','Successfully Updated.');
    }


    public function kanbanUpd(Request $request, $id)
    {

        $user = ContactList::find($id);
        $user->deal_stage= $request->input('status');
        $user->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
