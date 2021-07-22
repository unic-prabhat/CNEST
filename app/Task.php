<?php

namespace App;

use App\Status;
use App\User;
use App\Task;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    
    protected $guarded=[];
    
    public function status()
    {
        return $this->belongsTo(Status::class,'status_id','id');
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
