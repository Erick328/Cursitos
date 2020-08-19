<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recursos extends Model
{
    protected $table='recursos';
    protected $primaryKey='Id';
    public $timestamps=false;


    protected $fillable=[
        'Id','titulo','listado','IdCurso'
    ];
}
