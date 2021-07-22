<?php

namespace App\Http\Controllers;

use App\Note;
use App\Cmodel;
use App\Notification;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $data = $request->all();
            $notes = (new Note)->storeNote($data);
             $cnotes = Cmodel::create([
          'notes' => $notes->message,
          'user_id' => $notes->user_id,
          'lead_id' => $notes->lead_id,
          'note_id'=>$notes->id,
          'type'=>'note'
          ]);

    Notification::create(
        [
            'created_by' => auth()->user()->id,
            'user_id' => auth()->user()->id,
            'notificationType' => 'note',
            'lead_id' => $cnotes->lead_id
        ]
    );
            $notes['username'] = auth()->user()->name;
            return response()->json(array('notes'=>$notes));
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
        //
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

      public function fetch_note(Request $request)
    {

        //return response()->json($request->all());
        //return $request->get('page');
            if($request->all())
            {
                $data = Note::latest()->paginate(5);
                return response()->json(array($data));
            }
    }

    public function removeNote($id)
    {
        $iss = Note::find($id)->delete();
        if($iss)
        {
            return 1;
        }

    }

    public function removeAllAll($id)
    {
        $iss = Cmodel::find($id)->delete();
        if($iss)
        {
            return 1;
        }
    }
}
