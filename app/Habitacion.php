<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    protected $table = 'habitaciones';
    
    protected $primaryKey = 'id';
    
    public $timestamps=true;

    protected $fillable = [
    	'idusers',
    	'idtipo',
    	'cant_camas',
    	'precio',
        'descripcion',
    ];
    
    protected $guarded = [
    	'created_at',
    	'updated_at',
    ];
}
