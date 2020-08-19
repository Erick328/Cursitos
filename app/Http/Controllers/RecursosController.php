<?php

namespace App\Http\Controllers;
use App\curso;
use App\recursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recursos = recursos::all();
        return view('recursos/index',compact('recursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recursos/create');
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
            'titulo'=>'required',
            'listado'=>'required',
            'IdCurso'=>'required',   
        ]);

        

        $curso=DB::table('curso')
        ->select('Id')->where('nombre','=',$request->input('IdCurso'))->pluck('Id');
        $recursos=new recursos();
        $recursos->titulo=$request->input('titulo');
        $recursos->listado=$request->input('listado');
        $recursos->IdCurso=$curso[0];
        $recursos->save();
        return redirect()->route('boletaInscripcion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $recursos=DB::table('curso')->join('recursos','recursos.IdCurso','=','curso.Id')
        ->select('titulo','listado')
        ->where('curso.Id','=',$id)->paginate('1');
        return view('recursos/show',compact('recursos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recursos=recursos::findOrFail($id);
        return view('recursos/edit',compact('recursos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $recursos= recursos::findOrFail($id);
        $recursos->titulo=$request->input('titulo');
        $recursos->listado=$request->input('listado');
        $recursos->update();

        return redirect()->route('recursos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        recursos::findOrFail($id)->delete();
        return redirect()->route('recursos.index');
    }
}
