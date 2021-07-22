<?php

namespace App;

use App\Lead;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Scheduletask extends Model
{
    //
    
    protected $guarded = [];
    
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
       public function user()
    {
        return $this->belongsTo(User::class);
    }

        public function notifications()
        {
            $this->hasMany(Notification::class);
        }
}
