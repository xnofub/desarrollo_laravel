<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiendas extends Model
{
    //
    protected $table      = 'tiendas';
    protected $primaryKey = 'TND_ID';
    protected $fillable   = array('TND_NOMBRE'
        , 'TND_PROPIETARIO'
        , 'TND_DIRECCION'
    );
    
    public $timestamps = false;
    
        
}
