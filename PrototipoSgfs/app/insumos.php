<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    protected $table='insumos';
    protected $fillable=['id','Nombre','Valor','Descripcion','Estado','Foto'];
    public $timestamps = false;
}
