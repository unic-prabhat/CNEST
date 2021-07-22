<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Cmodel extends Model
{
    //
    
    protected $table = 'call_note';
    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
