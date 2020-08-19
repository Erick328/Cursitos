@extends('layout')

@section('contenido')

<p></p>
<div class="container">
    <p><a class="btn btn-success" href="{{route('curso.create')}}">Añadir Curso</a></p>

    <div class="text-center">
        
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Requisitos</th>
                <th scope="col">Id Categoria</th>
                <th scope="col">CI Profesor</th>
                
                
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($curso as $datosCurso)
                <tr>
                <th class="text-white" scope="row">{{$datosCurso->Id}}</th>
                <td class="text-white">{{$datosCurso->nombre}}</td>
                <td class="text-white">{{$datosCurso->precio}}</td>
                <td class="text-white">{{$datosCurso->descripcion}}</td>
                <td class="text-white">{{$datosCurso->requisitos}}</td>
                <td class="text-white">{{$datosCurso->IdCategoria}}</td>
                <td class="text-white">{{$datosCurso->CIProfesor}}</td>
                
                <td class="text-white"><a class="btn btn-primary" href={{route('curso.edit',$datosCurso->Id)}}>Editar</a>
                
                    <a class="btn btn-primary" href={{route('curso.show',$datosCurso->Id)}}>Ver</a>
                    <a class="btn btn-primary" href="{{route('recursos.create',$datosCurso->Id)}}"> añadir recurso</a>
                    <a class="btn btn-primary" href="{{route('recursos.index',$datosCurso->Id)}}"> ver recursos</a>
                    
                    <form style="display:inline" action="{{route('curso.destroy',$datosCurso->Id)}}" method="post">
                    {!!csrf_field()!!}
                    {!!method_field('DELETE')!!}
                    <button type="submit" class="btn btn-danger">Elimnar</button>
                    </form>
                   
                </td>
                

            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection