<?php

namespace App;

use App\Boiler;
use app\Boilertype;
use App\Boilertypechildren;
use Illuminate\Database\Eloquent\Model;

class Boilerchoise extends Model
{
    //
    
    protected $guarded = [];
    
    public function boiler()
    {
        return $this->belongsTo(Boiler::class);
    }
    
    public function boilertypechildrens()
    {
        return $this->hasMany(Boilertypechildren::class);
    }
      public function boilertypes()
    {
        return $this->hasMany(Boilertype::class);
    }
}
