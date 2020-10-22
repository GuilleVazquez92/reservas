<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicarAlojamiento extends Model
{
   protected $table = 'publicar_alojamiento';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'iduser',
    	'idalojamiento',
    	'idhabitacion',
    	'idregimen',
    	'fecha_inicio',
    	'fecha_fin',
    ];
    
    protected $guarded = [
    	'created_at',
    	'updated_at',
    ];

    public function alojamiento() {
        return $this->belongsTo(\App\Alojamiento::class, 'idalojamiento', 'id');
    }

    public function habitacion() {
        return $this->belongsTo(\App\Habitacion::class, 'idhabitacion', 'id');
    }

    public function regimen() {
        return $this->belongsTo(\App\Regimen::class, 'idregimen', 'id');
    }

    public function user() {
        return $this->belongsTo(\App\User::class, 'iduser', 'id');
    }
}
