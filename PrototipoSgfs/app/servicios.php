<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class servicios extends Model
{
    protected $table='servicios';
    protected $fillable=['id','Nombre','Descripcion','Valor','Estado'];
    public $timestamps = false;
}
