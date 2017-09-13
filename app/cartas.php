<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cartas extends Model
{
    protected $table      = 'cartas';
    protected $primaryKey = 'CRT_ID';
    
    protected $fillable = array(
                                'CRT_NUMERO_EDICION',
                                'CRT_NOMBRE',
                                'CRT_TIPO',
                                'CRT_MANA',
                                'CRT_RAREZA',
                                'CRT_ARTISTA',
                                'CRT_EDICION',
                                'EDN_COD_INTERNO',
                                'EDN_ID',
                                'CRT_IMAGEN',
                               );
    public $timestamps = false;
    
    
     public function ToListaCarta(){
            return $this->hasMany('App\Lista', 'CRT_ID');

    }
    
}
