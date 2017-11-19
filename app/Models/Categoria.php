<?php

namespace app\Models;
use Illuminate\Database\Eloquent\Model;


class Categoria extends Model {
    
    protected $fillable = ['nome'];
    
    protected $table = 'categoria';
    
    public    $timestamps = false;
    
}
