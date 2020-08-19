<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    protected $table='comentario';
    protected $primryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','descripcion','IdCurso','CIAlumno'
    ];
}
