<?php

namespace App\Http\Controllers;
use App\boletaInscripcion;
use Illuminate\Http\Request;
use App\curso;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\Table\Table;

class BoletaInscripcionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = DB::table('curso')->join('profesor','profesor.CI','=','curso.CIProfesor')
            ->select('Id','curso.nombre','imagen','precio','descripcion','profesor.nombre as prof')
            ->where('curso.estado','=',1)->get();
        return view('boletaInscripcion\index',compact('curso'));

    }
    
    public function create($id,$IdPago)
    {   

        return view('boletaInscripcion/create',compact('id','IdPago'));
    }

    
    public function store(Request $request,$id,$IdPago)
    {
        $request->validate([
            'CIAlumno'=>['required','numeric'],

        ]);
        $curso=curso::findOrFail($id);
        
        $boletaInscripcion=new boletaInscripcion();
        
        $boletaInscripcion->monto=$curso->precio;
        $boletaInscripcion->fecha=date('Y-m-d H:i:s');
        $boletaInscripcion->IdCurso=$id;
        $boletaInscripcion->CIAlumno=$request->input('CIAlumno');
        $boletaInscripcion->IdSuscripcion=$IdPago;
        $boletaInscripcion->save();

        

        return redirect()->route('alumno.show');
    }

    
    public function show()
    {
        $boletaInscripcion=boletaInscripcion::all();
        return view('boletaInscripcion/show',compact('boletaInscripcion'));
    }
    
    public function destroy($id)
    {
        boletaInscripcion::findOrFail($id)->delete();
        return redirect()->route('boletaInscripcion.show');
    }
}
