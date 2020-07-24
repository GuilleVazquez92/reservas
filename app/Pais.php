<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'descripcion',
    ];
}
