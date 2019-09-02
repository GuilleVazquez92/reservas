<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TelefonoUser extends Model
{
    protected $table = 'telefono_x_usuario';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'iduser',
    	'telefono',
    ];
}
