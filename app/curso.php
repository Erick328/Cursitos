<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    protected $table='curso';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','nombre','imagen','precio','descripcion','requisitos','estado','IdCategoria','CIProfesor'
    ];
}
