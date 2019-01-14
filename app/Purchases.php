<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchases extends Model
{
//Table name
protected $table = 'purchases';
//Primary Key
public $primaryKey = 'id';
// Timestamps
public $timestamps = true;

public function user() {

    return $this->belongsTo('App\User');
}}
