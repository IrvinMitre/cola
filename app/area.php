<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class area extends Model
{
     protected $fillable = [
         'codigo',
    ];

    public function Usuario()
    {
    	return $this->belongsTo('App\User', 'id', 'idA');
    }

     public function proyecto()
    {
    	return $this->belongsTo('App\User', 'idProyecto', 'idA');
    }
}
