<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoRegimen extends Model
{
    protected $table = 'tipo_regimenes';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'descripcion',
    ];
}
