<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $table='pedido';
    protected $fillable=['id','IdCliente','IdProducto','descripcion'];
    public $timestamps = false;
}
