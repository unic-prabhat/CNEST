<?php

namespace App;

use App\Boilerchoise;
use Illuminate\Database\Eloquent\Model;

class Boilertypechildren extends Model
{
    //
    	protected $guarded = [];
    public function boilerchoise()
    {
        return $this->belongsTo(Boilerchoise::class);
    }
}
