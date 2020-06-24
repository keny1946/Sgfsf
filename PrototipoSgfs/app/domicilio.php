<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class domicilio extends Model
{
    protected $table = 'domicilio';
    protected $fillable = ['id','Ciudad','Direccion','Estado'];
    public $timestamps= false;

    public static $rules=
    [
        'Ciudad'=>'required|string',
        'Direccion'=>'required|string',
        'Estado'=>'required'
    ];
}
