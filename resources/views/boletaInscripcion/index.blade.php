
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
                <th scope="col">Precio</th>
                <th scope="col">Nombre Profesor</th>
                
                
                <th scope="col">Acciones</th>
            </tr>
        </thead >
        <tbody>
            @foreach ($curso as $datosCurso)
                <tr>
                <th ><img class="imagen" style="width: 200px; height: 200px" src="{{$datosCurso->imagen}}" alt=""></th>
                <td class="text-white">{{$datosCurso->nombre}}</td>
                <td class="text-white">{{$datosCurso->precio}}</td>
                <td class="text-white">{{$datosCurso->prof}}</td>
                
                <td class="text-white">
                    
                    <a class="btn btn-primary" href={{route('suscripcionPago.create',$datosCurso->Id)}}>comprar</a>
                    <a class="btn btn-primary" href={{route('curso.show',$datosCurso->Id)}}>Ver</a>                   
                   
                </td>
                

            @endforeach
        </tbody>
    </table>
    @endsection