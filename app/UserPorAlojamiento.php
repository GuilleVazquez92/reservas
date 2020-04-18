<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPorAlojamiento extends Model
{
    protected $table = 'user_x_alojamiento';
    
    protected $primaryKey = ['iduser','idalojamiento'];

    public $incrementing = false;
    
    public $timestamps=false;

    protected $fillable = [
        'iduser',
    	'idalojamiento',
    ];
}