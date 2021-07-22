<?php

namespace App;

use App\Lead;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //
    
    protected $guarded = [];
    
    public function storeNote($data)
    {
            return Note::create($data);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
      public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
    
    public function notifications()
    {
        $this->hasMany(Notification::class);
    }
   
}
