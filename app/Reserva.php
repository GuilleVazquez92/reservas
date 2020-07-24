<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';
    
    protected $primaryKey = 'id';
    
    public $timestamps=true;

    protected $fillable = [
    	'iduser',
    	'idhabitacion',
    	'fecha_entrada',
    	'fecha_salida',
    	'precio_total',
    	'porc_operador',
    	'porc_agencia',
    ];
    
    protected $guarded = [
    	'created_at',
    	'updated_at',
    ];
}
