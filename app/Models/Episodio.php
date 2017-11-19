<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;


class Episodio extends Model {
    
    protected $fillable = ['serie_id','temporada_id','nome'];
    
    private   $table = 'episodio';
    
    public    $timestamps = false;
    
}
  

