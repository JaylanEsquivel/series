<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Episodio extends Model {
    
    protected $fillable = ['serie_id','temporada_id','nome'];
    
    protected $table = 'episodio';
    
    public    $timestamps = false;
    
}
  

