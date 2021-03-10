<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPorPublicado extends Model
{
     protected $table = 'user_x_publicados';
    
    protected $primaryKey = ['iduser','idpublicado'];

    public $incrementing = false;
    
    public $timestamps=false;

    protected $fillable = [
        'iduser',
    	'idpublicado',
    ];

}
