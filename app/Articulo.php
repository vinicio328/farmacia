<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable =[
        'idcategoria','codigo','nombre','precio_venta','stock','descripcion','condicion'
    ];


    public function getcondicionAttribute($value)
    {
        return "{$this->categoria->nombre}";
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria', "idcategoria", "id");
    }
}
