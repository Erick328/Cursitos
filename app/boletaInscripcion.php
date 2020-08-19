<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boletaInscripcion extends Model
{
    protected $table='boleta_inscripcion';
    protected $primaryKey='Id';
    public $timestamps=false;


    protected $fillable=[
        'Id','monto','fecha','IdCurso','CIAlumno','IdSuscripcion'
    ];
}
