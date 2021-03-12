<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    protected $table = 'alojamientos';
    
    protected $primaryKey = 'id';
    
    public $timestamps=false;

    protected $fillable = [
    	'idciudad',
    	'idtipoalojamiento',
    	'nombre',
    	'descripcion',
    	'email',
    	'direccion',
    	'referencia',
    	'categoria',
    	'lat',
    	'lng',
    ];
    
    protected $guarded = [
    	'created_at',
    	'updated_at',
    ];

    public function publicados() {
        return $this->belongsTo(\App\PublicarAlojamiento::class, 'id', 'idalojamiento');
    }

    public function imagenes() {
        return $this->belongsTo(\App\Fotos::class, 'id', 'idalojamiento');
    }

     public function telefonos() {
        return $this->belongsTo(\App\TelefonoAlojamiento::class, 'id', 'idalojamiento');
    }
     public function user() {
        return $this->belongsTo(\App\UserPorAlojamiento::class, 'id', 'idalojamiento');
    }
      public function ciudad() {
        return $this->belongsTo(\App\Ciudad::class, 'idciudad', 'id');
    }

}
