<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    
    protected $table      = 'post';
    protected $primaryKey = 'PST_ID';
    
    protected $fillable = array(
                                'PST_TITULO',
                                'PST_FECHA',
                                'PST_DESCRIPCION',
                                'PST_TEXTO',
                                'STP_ID',
                                'TPP_ID',
                               );
    public $timestamps = false;
}
