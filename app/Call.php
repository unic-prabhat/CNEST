<?php

namespace App;

use App\Call;
use App\User;
use App\Lead;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    //
    
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
     public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
    public function callStore($data)
    {
        
        return Call::create([
            
            'duration' => $data['duration'],
            'lead_id' => $data['lead_id'],
            'call_status' => $data['call_status'],
            'user_id' => $data['user_id']
                ]);
    }

    public function notifications()
    {
        $this->hasMany(Notification::class);
    }
    
}
