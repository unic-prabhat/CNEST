<?php

namespace App;

use App\Campaign;
use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    //
	protected $guarded = [];
    public function campaigns()
    {	
    	return $this->hasMany(Campaign::class);
    }
}
