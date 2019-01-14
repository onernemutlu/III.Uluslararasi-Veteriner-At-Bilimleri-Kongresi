<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //Table name
    protected $table = 'payments';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    public function user() {

        return $this->belongsTo('App\User');
    }
}
