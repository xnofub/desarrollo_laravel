<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoCarta extends Model
{
    protected $table      = 'tipocarta';
    protected $primaryKey = 'TCR_ID';
    
    protected $fillable = array(
                                'TCR_NOMBRE',
                               );
    public $timestamps = false;
    
    
    public function ToLista(){
            return $this->hasMany('App\Lista', 'TCR_ID');

    }
    
}
