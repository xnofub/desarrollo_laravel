<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    protected $table      = 'jugadores';
    protected $primaryKey = 'JGD_ID';
    
    protected $fillable = array(
                                'JGD_NOMBRE',
                                'JGD_DCI',
                               );
    public $timestamps = false;
    
}
