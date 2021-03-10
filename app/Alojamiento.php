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
    
}
