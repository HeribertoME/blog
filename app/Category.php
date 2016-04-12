<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Nombre de la tabla
    protected $table = "categories";

    // Para mostrar los objetos JSON
    protected $fillable = ['name'];


    // Para establecer una relacion debemos establecer una funcion
    public function articles () {
        return $this->hasMany('App\Article');
    }

    public function scopeSearchCategory($query, $name){
        return $query->where('name', '=', $name);
    }


}
