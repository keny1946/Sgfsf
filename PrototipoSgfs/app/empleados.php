<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $table= 'empleados';
    protected $fillable = ['Nombres', 'Apellidos', 'NroDocumento','Email','Telefono','Clave','IdTipoDocumento','estado'];
    public $timestamps = false;

    public static $rules=
    [
        'Nombres'=>'required|string',
        'Apellidos'=>'required|string',
        'NroDocumento'=>'required',
        'Email'=>'email|required',
        'Telefono'=>'required',
        'Clave'=>'required',
        'estado'=>'required',
        'IdTipoDocumento'=>'required'
    ];
}
