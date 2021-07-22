<?php

namespace App;

use App\Boilerchoice;
use Illuminate\Database\Eloquent\Model;

class Boiler extends Model
{
    //
    
    protected $fillable = ['name'];
    
    public function boilerchoices()
    {
        return $this->hasMany(Boilerchoice::class);
    }
}
