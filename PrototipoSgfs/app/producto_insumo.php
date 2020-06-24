<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto_insumo extends Model
{
    protected $table = "producto_insumo";
    protected $fillable = ['IdProducto','IdInsumos','Cantidad'];
    protected $timestamp = false;
}
