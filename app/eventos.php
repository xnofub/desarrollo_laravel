<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    //
    protected $table      = 'eventos';
    protected $primaryKey = 'EVN_ID';
    
    protected $fillable = array(
                                'EVN_NOMBRE', 
                                'EVN_FECHA', 
                                'FTO_ID', 
                                'TND_ID', 
                               );
    public $timestamps = false;
    
    
    public function ToFormatos()
    {
        return $this->belongsTo('App\Formatos','FTO_ID');
    }
    
    public function ToTiendas()
    {
        return $this->belongsTo('App\Tiendas','TND_ID');
    }
    
    
    
    
}
