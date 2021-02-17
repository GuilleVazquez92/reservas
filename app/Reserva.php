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
    	'idpublicado',
    	'fecha_entrada',
    	'fecha_salida',
    	'precio_total',
    	'bandera',
    ];
    
    protected $guarded = [
    	'created_at',
    	'updated_at',
    ];
     public function publicados() {
        return $this->belongsTo(\App\PublicarAlojamiento::class, 'idpublicado', 'id');
    }
    public function user() {
        return $this->belongsTo(\App\User::class, 'iduser', 'id');
    }

}
