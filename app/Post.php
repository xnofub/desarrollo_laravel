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
                                'PST_TEXTO',
                                'PST_ESTADO',
                                'TPP_ID',
                               );
    public $timestamps = false;
}
