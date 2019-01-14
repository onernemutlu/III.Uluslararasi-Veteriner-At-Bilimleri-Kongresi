<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //Table name
    protected $table = 'products';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    
    public function user() {

        return $this->belongsTo('App\User');
    }
}
