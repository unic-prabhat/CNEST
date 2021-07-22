<?php

namespace App;

use App\Lead;
use App\Note;
use App\Call;
use App\Deal;
use App\Scheduletask;
use App\Cmodel;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'isAdmin', 'username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function leads()
    {
        return $this->hasMany(Lead::class);
    }
    
    
    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    
    public function isAdmin()
    {
        return $this->isAdmin;
    }
    
    public function calls()
    {
        return $this->hasMany(Call::class);
    }
      public function scheduletasks()
    {
        return $this->hasMany(Scheduletask::class);
    }
    
    public function cmodels()
    {
        return $this->hasMany(Cmodel::class);
    }

    public function deals()
    {
        return $this->hasMany(Deal::class);
    }
    
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    public function statuses()
    {
        return $this->hasMany(Status::class)->orderBy('order');
    }
     public function notifications()
    {
        $this->hasMany(Notification::class);
    }

    public function notification()
    {
      return $this->belongsTo(Notification::class);
    }
}
