<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventos_servicios extends Model
{
    protected $table = "eventos_servicios";
    protected $fillable = ['idServicios','idEventos','cantidad'];
    protected $timestamp = false;
}
