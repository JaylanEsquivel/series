<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;


class Temporada extends Model {
    
    protected $fillable = ['nome'];
    
    protected $table = 'temporada';
   
    public    $timestamps = false;
    
}

 



