<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPorAlojamiento extends Model
{
    protected $table = 'user_x_alojamiento';
    
     protected $primaryKey = 'id';

    
    public $timestamps=false;

    protected $fillable = [
        'iduser',
    	'idalojamiento',
    ];

      public function alojamiento() {
        return $this->belongsTo(\App\Alojamiento::class, 'idalojamiento', 'id');
    }

}
