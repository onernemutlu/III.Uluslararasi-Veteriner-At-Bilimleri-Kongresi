<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonationEvent extends Model
{
    //Table name
    protected $table = 'donationevents';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function donations()
    {
        return $this->hasMany('App\Donation' , 'event');
    }
}
