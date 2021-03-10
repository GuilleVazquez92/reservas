<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aerolinea extends Model
{
    protected $table = 'aerolineas_iata';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'iataCode',
    	'descripcion',
    ];

}
