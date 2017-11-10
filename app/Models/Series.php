<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Series extends Model{
    protected $table = 'serie';
    public    $timestamps = false;
    
    public function categorias() {
        return $this->belongsToMany('App\Models\Categoria');
    }
}
