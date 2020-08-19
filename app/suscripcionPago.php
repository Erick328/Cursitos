<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suscripcionPago extends Model
{
    protected $table='suscripcion_pago';
    protected $primaryKey='Id';
    public $timestamps=false;


    protected $fillable=[
        'Id','numeroTarjeta','MesExpiracion','añoExpiracion','CVC'
    ];
}
