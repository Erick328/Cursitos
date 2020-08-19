@extends('layout')
@section('contenido')

<p></p>
<div class="container">
    <p><a class="btn btn-success" href="{{route('recursos.create')}}">Añadir recurso</a></p>

    <div class="text-center">
        
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titulo</th>
                <th scope="col">Video</th>
                <th scope="col">Id Curso</th>
               
                
                
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($recursos as $datosCurso)
                <tr>
                <th class="text-white" scope="row">{{$datosCurso->Id}}</th>
                <td class="text-white">{{$datosCurso->titulo}}</td>
                <td class="text-white">{{$datosCurso->listado}}</td>
                <td class="text-white">{{$datosCurso->IdCurso}}</td>

                
                <td class="text-white"><a class="btn btn-primary" href={{route('recursos.edit',$datosCurso->Id)}}>Editar</a>
                                    
                    <form style="display:inline" action="{{route('recursos.destroy',$datosCurso->Id)}}" method="post">
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