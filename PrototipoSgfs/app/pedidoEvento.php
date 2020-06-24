<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidoEvento extends Model
{
    protected $table = "pedidoevento";
    protected $fillable = ['idCliente','idEvento','idServicio','descripcion','valor','fecha'];

    public static $rules =[
        'descripcion'=>'required',
        'valor'=>'required',
        'fecha'=>'required|date'
    ];
    protected $timestamp = false;
}
