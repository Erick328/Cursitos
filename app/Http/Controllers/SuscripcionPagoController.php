<?php

namespace App\Http\Controllers;


use App\suscripcionPago;
use Illuminate\Http\Request;

class SuscripcionPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suscripcionPago=suscripcionPago::all();
        return view('suscripcionPago/index',compact('suscripcionPago'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('suscripcionPago/create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $request->validate([
            'numeroTarjeta'=>['required'],
            'MesExpiracion'=>['required','numeric'],
            'añoExpiracion'=>['required','numeric'],
            'CVC'=>['required','numeric'],
            
        ]);

        $suscripcionPago=new suscripcionPago();
        $suscripcionPago->numeroTarjeta=$request->input('numeroTarjeta');
        $suscripcionPago->MesExpiracion=$request->input('MesExpiracion');
        $suscripcionPago->añoExpiracion=$request->input('añoExpiracion');
        $suscripcionPago->CVC=$request->input('CVC');
        $suscripcionPago->save();
        $IdPago=$suscripcionPago->Id;
        return view('boletaInscripcion/create',compact('id','IdPago'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suscripcionPago  $suscripcionPago
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        suscripcionPago::findOrFail($id)->delete();
        return redirect()->route('suscripcionPago.index');
    }
}
