<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    //

    protected $guarded = [];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function notifications()
    {
    	$this->hasMany(Notification::class);
    }
}
