<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class certificado extends Model
{
    protected $table='certificado';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','descripcion','IdCurso','CIAlumno'
    ];
}
