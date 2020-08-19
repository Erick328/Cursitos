<?php

namespace App\Http\Controllers;

use App\curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curso = DB::table('curso')
            ->select('Id','nombre','precio','descripcion','requisitos','estado','IdCategoria','CIProfesor')
            ->where('estado','=',1)->get();
        return view('curso/index',compact('curso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nombre'=>['required'],
            'imagen'=>['required'],
            'precio'=>['required','numeric'],
            'descripcion'=>['required'],
            'requisitos'=>['required'],
            'CIProfesor'=>['required','numeric'],
        ]);

        $categoria=DB::table('categoria')
        ->select('Id')->where('nombre','=',$request->input('IdCategoria'))->pluck('Id');
        //dd($categoria);
        $curso=new curso();
        $curso->nombre=$request->input('nombre');
        $curso->imagen=$request->input('imagen');
        $curso->precio=$request->input('precio');
        $curso->descripcion=$request->input('descripcion');
        $curso->requisitos=$request->input('requisitos');
        $curso->IdCategoria=$categoria[0];
        $curso->CIProfesor=$request->input('CIProfesor');
        $curso->estado=1;
        $curso->save();

        return redirect()->route('curso.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso=curso::findOrFail($id);
        $valoracion=DB::table('valoracion')->join('alumno','alumno.CI','=','valoracion.CIAlumno')
        ->select('valor','nombre')
        ->where('valoracion.IdCurso','=',$id)->get();

        $comentario=DB::table('comentario')->join('alumno','alumno.CI','=','comentario.CIAlumno')
        ->select('Id','descripcion','nombre','CIAlumno')
        ->where('comentario.IdCurso','=',$id)->get();
        return view('curso/show',compact('curso','comentario','valoracion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso=curso::findOrFail($id);
        return view('curso/edit',compact('curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    
        $curso= curso::findOrFail($id);
        $curso->nombre=$request->input('nombre');
        $curso->imagen=$request->input('imagen');
        $curso->precio=$request->input('precio');
        $curso->descripcion=$request->input('descripcion');
        $curso->requisitos=$request->input('requisitos');
        
        $curso->update();

        return redirect()->route('curso.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$curso=curso::findOrFail($id)->delete();Par eliminar permanentemente
        $curso=curso::findOrFail($id);
        $curso->estado=0;
        $curso->update();
        return redirect()->route('curso.index');
    }
}
