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
}
