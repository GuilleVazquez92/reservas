<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaVueloEscala extends Model
{
    protected $table = 'ReservaVuelosEscalas';
    
    protected $primaryKey = 'id';
    
    public $timestamps=true;

    protected $fillable = [
    	'idvuelo',
        'idaerolineas',
        'salida',
        'fecha_salida',
    	'horario_salida',
    	'tiempo_salida',
    	'llegada',
    	'fecha_llegada',
    	'horario_llegada',
    	'tiempo_llegada',
    	
    ];

    protected $guarded = [
    	'created_at',
    	'updated_at',
    ];

    
}


