<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profesor extends Model
{
    protected $table='profesor';
    protected $primaryKey='CI';
    public $timestamps=false;


    protected $fillable=[
        'CI','nombre','telefono','correo','fechaNacimiento'
    ];
}
