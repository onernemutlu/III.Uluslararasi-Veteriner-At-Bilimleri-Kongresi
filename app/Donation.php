<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //Table name
    protected $table = 'donations';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function donationEvent() {
        return $this->belongsTo('App\DonationEvent' , 'event');
    }

}
