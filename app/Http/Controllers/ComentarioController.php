<?php

namespace App\Http\Controllers;
use App\comentario;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {

        $request->validate([
            'descripcion'=>['required'],
            
        ]);
        $comentario=new comentario();
        $comentario->descripcion=$request->input('descripcion');
        $comentario->IdCurso=$id;
        $comentario->CIAlumno= auth()->user()->Codigo;
        $comentario->save();

        return redirect()->route('curso.show',$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $comentario=comentario::findOrFail($id);
        $comen=$comentario->IdCurso;
        DB::table('comentario')->where('Id','=',$id)->delete();
        return redirect()->route('curso.show',$comen);
    }
}
