<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservaVuelo extends Model
{
    protected $table = 'reservaVuelos';
    
    protected $primaryKey = 'id';
    
    public $timestamps=true;

    protected $fillable = [
        
        'iduser',
    	'precio_total',
    	'bandera',
    	'comprador',
    ];

    protected $guarded = [
    	'created_at',
    	'updated_at',
    ];

     public function ReservaVuelo() {
        return $this->belongsTo(\App\ReservaVueloEscala::class, 'id', 'idvuelo');
    }
}
