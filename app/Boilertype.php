<?php

namespace App;

use App\Boilerchoice;
use Illuminate\Database\Eloquent\Model;

class Boilertype extends Model
{
    //

    protected $guarded = [];

  public function boilerchoice()
  {
  	return $this->belongsTo(Boilerchoice::class);
  }
}
