<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class misClases extends Model
{
    protected $table='misClases';
    protected $primariKey='IdClase';
    public $timestamps=false;

    protected $fillable=[
        'IdClase','IdBoleta'
    ];

}
