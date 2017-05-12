<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mazos extends Model
{
    //
    protected $table      = 'mazos';
    protected $primaryKey = 'MAZ_ID';
    
    protected $fillable = array(
                                'MAZ_NOMBRE',
                                'FTO_ID',
                               );
    public $timestamps = false;
    
    
    public function formato()
    {
        return $this->belongsTo('App\Formatos','FTO_ID' );
    }
    
    
    
}
