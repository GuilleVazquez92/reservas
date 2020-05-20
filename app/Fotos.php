<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
     protected $table = 'imagenes';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'idalojamiento',
    	'path_imagen',
    	'codigo_imagen',
    	'orden',
    ];
}
