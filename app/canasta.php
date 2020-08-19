<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class canasta extends Model
{
    protected $table='canasta';
    protected $primaryKey='Id';
    public $timestamps=false;

    protected $fillable=[
        'Id','monto','IdCurso','CIAlumno'
    ];
}
