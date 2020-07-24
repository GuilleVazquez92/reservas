<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    protected $table = 'tipo_habitacion';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'descripcion',
    ];
}
