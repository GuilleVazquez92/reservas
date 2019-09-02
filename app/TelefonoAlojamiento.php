<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TelefonoAlojamiento extends Model
{
    protected $table = 'telefono_x_alojamiento';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'idalojamiento',
    	'telefono',
    	'descripcion',
    ];
}
