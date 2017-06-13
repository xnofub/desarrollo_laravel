<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPost extends Model
{
    //
    protected $table      = 'tipopost';
    protected $primaryKey = 'TPP_ID';
    
    protected $fillable = array(
                                'TPP_NOMBRE',
                               );
    public $timestamps = false;
    
}
