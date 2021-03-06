<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $fillable=['nombre','autor','editorial','isbn','edicion','carrera_id'];

    public function carrera(){
    	return $this->belongsTo('App\Carrera');
    }
}
