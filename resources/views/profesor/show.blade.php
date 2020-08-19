@extends('layout')
@section('contenido')




<div class="container">
    <p></p>
    <p><a class="btn btn-success" href="{{route('curso.create')}}">Añadir Curso</a></p>
   
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
            @foreach ($curso as $dato)
                <tr>
                <th ><img class="imagen" style="width: 200px; height: 200px" src="{{$dato->imagen}}" alt=""></th>
                <td class="text-white">{{$dato->nombre}}</td>
                
                <td class="text-white">
                    <a class="btn btn-primary" href={{route('curso.edit',$dato->Id)}}>Editar</a>
                    <a class="btn btn-primary" href={{route('recursos.edit',$dato->Id)}}>Editar Recursos</a>
                    <a class="btn btn-primary" href={{route('curso.show',$dato->Id)}}>Ver</a>
                    <a class="btn btn-primary" href={{route('recursos.show',$dato->Id)}}>Ver recursos</a>
                    <a class="btn btn-primary" href="{{route('recursos.create',$dato->Id)}}"> añadir recurso</a>
                    

                   
                   
                </td>
                

            @endforeach
        </tbody>
    </table>
    </div>
</div>
    
@endsection