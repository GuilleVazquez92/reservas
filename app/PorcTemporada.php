<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PorcTemporada extends Model
{
    protected $table = 'porc_temporadas';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'idalojamiento',
    	'fecha_inicio',
    	'fecha_fin',
    	'porcentaje',
    	'descripcion',
    ];
}
