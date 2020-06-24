<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $table='servicios';
    protected $fillable=['id','Nombre','Descripcion','Valor','Estado','Cantidad'];
    public $timestamps = false;

    public static $rules=
    [
        'Nombre'=>'required|string',
        'Descripcion'=>'required|string',
        'Valor'=>'required|string',
        'Estado'=>'required|string'
    ];
}
