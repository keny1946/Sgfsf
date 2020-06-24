<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insumos extends Model
{
    protected $table='insumos';
    protected $fillable=['Nombre','Valor','cantidad','Descripcion','Estado','Foto'];

    public static $rules=[
        'Nombre'=>'required|string',
        'Valor'=>'required|string|min:0',
        'cantidad'=>'required',
        'Descripcion'=>'required|string',
        'Estado'=>'required',
        'Foto'=>'required|image|mimes:jpeg,jpg,png'
    ];
}
