<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoPost extends Model
{
    protected $table      = 'estadopost';
    protected $primaryKey = 'STP_ID';
    
    protected $fillable = array(
                                'STP_NOMBRE',
                               );
    public $timestamps = false;
}
