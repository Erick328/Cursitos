<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;
use App\alumno;
use App\certificado;
use App\curso;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //function __construct()
    //{
      //  $this->middleware(['auth','roles:admin']);
    //}
    public function index()
    {
        $alumno = DB::table('alumno')
            ->select('CI','nombre','telefono','fechaNacimiento','correo')
            ->where('estado','=',1)->get();
        return view('alumno/index',compact('alumno'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno/create');
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

        $alumno=new alumno();
        $alumno->CI=$request->input('CI');
        $alumno->nombre=$request->input('nombre');
        $alumno->telefono=$request->input('telefono');
        $alumno->correo=$request->input('correo');
        $alumno->fechaNacimiento=$request->input('fechaNacimiento');
        $alumno->estado=1;
        

        $alumno->save();
        $dato=$request->input('contra');
        $users= new User();
        $users->name=$request->input('nombre');
        $users->email=$request->input('correo');
        $users->password=bcrypt($dato);
        $users->rol="alumno";
        $users->codigo=$request->input('CI');
        $users->save();


        return redirect()->route('login');
    }

    public function certificado($id){
        $certificado=curso::findOrFail($id);
        $pdf= PDF::loadView('alumno.certificado',compact('certificado'));
        return $pdf->stream('certificado-pdf',$id);
    }

    public function show()
    {
        $boleta=DB::table('boleta_inscripcion')->join('curso','curso.Id','=','boleta_inscripcion.IdCurso')
        ->select('IdCurso','curso.imagen as img','curso.nombre as nome')
        ->where('boleta_inscripcion.CIAlumno','=',auth()->user()->Codigo)->get();

        return view('alumno/show',compact('boleta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno=alumno::findOrFail($id);
        return view('alumno/edit',compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno= alumno::findOrFail($id);
        $alumno->nombre=$request->input('nombre');
        $alumno->telefono=$request->input('telefono');
        $alumno->correo=$request->input('correo');
     
        

        $alumno->update();

        return redirect()->route('alumno.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno=alumno::findOrFail($id);
        $alumno->estado=0;
        $alumno->update();
        return redirect()->route('alumno.index');
        
    }
}
