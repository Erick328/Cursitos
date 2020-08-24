@extends('layout')
@section('contenido')
<p></p>
<div class="container">
   
    <div class="text-center">
        
    <table class="table">

        <thead class="thead-dark">
            <tr>
                <th scope="col">Imagen</th>
                <th scope="col">Nombre del Curso</th>
                
                
                <th scope="col">Acciones</th>
            </tr>
        </thead >
        <tbody>
            @foreach ($boleta as $dato)
                <tr>
                <th ><img class="imagen" style="width: 200px; height: 200px" src="{{$dato->img}}" alt=""></th>
                <td class="text-white">{{$dato->nome}}</td>
                
                <td class="text-white">
                    
                    <a class="btn btn-primary" href={{route('curso.show',$dato->IdCurso)}}>Ver</a>
                    <a class="btn btn-primary" href={{route('recursos.show',$dato->IdCurso)}}>Ver recursos</a>
                    <a class="btn btn-primary" href={{route('certificado.pdf',$dato->IdCurso)}}>descargar Certificado </a>
                    
                   
                   
                </td>
                

            @endforeach
        </tbody>
    </table>
    </div>
</div>
@endsection