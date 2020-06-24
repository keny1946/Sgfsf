<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table = 'producto';
    protected $fillable = ['id','nombreProducto','valor','descripcion','estado','cantidad','imagen','IdInsumos'];
    protected $timestamp = false;

    public static $rules=[
        'nombreProducto'=>'required|string',
        'descripcion'=>'required|string',
        'estado'=>'required',
        'cantidad'=>'required|numeric',
        'imagen'=>'required|mimes:png,jpg,jpeg',
    ];
}
