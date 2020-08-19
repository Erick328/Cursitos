<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $table ='alumno';
    protected $primaryKey='CI';
    public $timestamps=false;

    protected $fillable=[
        'CI','nombre','telefono','correo','fechaNacimiento'
    ];
}
