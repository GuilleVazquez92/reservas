<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAlojamiento extends Model
{
    protected $table = 'tipo_alojamiento';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'tipo_alojamiento',
    ];
}
