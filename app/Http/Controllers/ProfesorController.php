<?php

namespace App\Http\Controllers;

//use App\curso;
use App\User;
use App\profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profesor = DB::table('profesor')
            ->select('CI','nombre','telefono','fechaNacimiento','correo')
            ->where('estado','=',1)->get();
        return view('profesor/index',compact('profesor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profesor/create');
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
        'CI'=>'required',
        'nombre'=>'required',
        'telefono'=>['required','numeric'],
        'correo'=>'required',
        'fechaNacimiento'=>'required',
        ]);

        $profesor=new profesor();
        $profesor->CI=$request->input('CI');
        $profesor->nombre=$request->input('nombre');
        $profesor->Telefono=$request->input('telefono');
        $profesor->fechaNacimiento=$request->input('fechaNacimiento');
        $profesor->Correo=$request->input('correo');
        $profesor->estado=1;
        $profesor->save();

        
        $dato=$request->input('contra');
        $users= new User();
        $users->name=$request->input('nombre');
        $users->email=$request->input('correo');
        $users->password=bcrypt($dato);
        $users->rol="profesor";
        $users->codigo=$request->input('CI');
        $users->save();
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $curso=DB::table('curso')
        ->select('Id','nombre','imagen')
        ->where('curso.CIProfesor','=',auth()->user()->Codigo)->get();
        return view('profesor/show',compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profesor=profesor::findOrFail($id);
        return view('profesor/edit',compact('profesor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profesor= profesor::findOrFail($id);
        $profesor->nombre=$request->input('nombre');
        $profesor->telefono=$request->input('telefono');
        $profesor->correo=$request->input('correo');
     
        

        $profesor->update();

        return redirect()->route('profesor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profesor=profesor::findOrFail($id);
        $profesor->estado=0;
        $profesor->update();
        return redirect()->route('profesor.index');
    }
}
