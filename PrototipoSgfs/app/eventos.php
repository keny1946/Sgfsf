<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos extends Model
{
    protected $table = "eventos";
    protected $fillable=['nombre','descripcion','estado','imagen'];

    public static $rules=[
        'nombre'=>'string|required',
        'descripcion'=>'string|required',
        'estado'=>'required',
        'imagen'=>'required|image|mimes:jpg,png,jpeg'
    ];
}
