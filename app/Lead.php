<?php

namespace App;
use App\User;
use App\Call;
use App\Note;
use App\Scheduletask;
use App\Status;
use App\Task;
use App\Notification;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    //

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function assignes()
    {
        return $this->hasMany(User::class,'id','userAssign_id');
    }
    public function calls()
    {
        return $this->hasMany(Call::class);
    }

     public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function scheduletasks()
    {
        return $this->hasMany(Scheduletask::class);
    }

    public function statuses()
    {
        return $this->hasOne(Status::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function notifications()
    {
        $this->hasMany(Notification::class);
    }

}
