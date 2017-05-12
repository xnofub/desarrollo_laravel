<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatos extends Model
{
    //
    protected $table      = 'formatos';
    protected $primaryKey = 'FTO_ID';
    
    protected $fillable = array(
                                'FTO_NOMBRE', 
                               );
    public $timestamps = false;
    
    public function formatoMazos()
    {
        return $this->hasMany('App\Mazos', 'FTO_ID');
    }
    
}
