<?php

namespace App;

use App\Folder;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    //

	protected $guarded = [];
    public function folder()
    {
    	return $this->belongsTo(Folder::class);
    }
    public function getRouteKeyName()
	{
		return 'slug';
	}
}
