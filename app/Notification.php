<?php

namespace App;

use App\Lead;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
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
    public function deal()
    {
    	return $this->belongsTo(Deal::class);
    }
    public function call()
    {
    	return $this->belongsTo(Call::class);
    }
    public function scheduletask()
    {
    	return $this->belongsTo(Scheduletask::class);
    }
    public function note()
    {
    	return $this->belongsTo(Note::class);
    }

    public function users()
    {
        return $this->hasMany(User::class,'id','created_by');
    }
}
