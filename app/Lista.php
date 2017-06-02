<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    //
    
    
    protected $table      = 'listas';
    protected $primaryKey = 'LST_ID';
    
    protected $fillable = array(
                                'LST_CANTIDAD',
                                'CRT_ID',
                                'EVM_ID',
                                'LST_NOMBRE_CARTA',
                                'TCR_ID',
                               );
    public $timestamps = false;
    
        
    public function ToTipoCarta(){
        return $this->belongsTo('App\TipoCarta','TCR_ID' );
    }
    
    
}
