<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
      
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'confirmation_code', 'idrol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function alojamientos() {
        return $this->belongsToMany(\App\Alojamiento::class, 'user_x_alojamiento', 'iduser', 'idalojamiento');
    }

     public function alojamientosPublicados() {
        return $this->belongsToMany(\App\PublicarAlojamiento::class, 'user_x_publicados', 'iduser', 'idpublicado');
    }
     public function regimen() {
        return $this->belongsTo(\App\Regimen::class, 'id', 'iduser');
    }
   
}
