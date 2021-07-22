<?php

namespace App;

use App\Task;
use App\User;
use App\Lead;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    
    protected $guarded = [];
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
  
}
