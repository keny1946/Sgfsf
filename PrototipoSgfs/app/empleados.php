<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    protected $table= 'empleados';
    protected $fillable = ['Nombres', 'Apellidos', 'NroDocumento','Email','Telefono','Clave','idTipoDocumento','estado'];
    public $timestamps = false;

}
