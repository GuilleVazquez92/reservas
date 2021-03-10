<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    protected $table = 'regimenes';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'iduser',
      	'idtipo',		
    	'descripcion',
    	'precio',
    ];

     public function tipoRegimen() {
        return $this->belongsTo(\App\TipoRegimen::class, 'idtipo', 'id');
    }
   
}
