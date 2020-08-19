@extends('layout')

@section('contenido')

<p></p>
<div class="container">
    <p><a class="btn btn-success" href="{{route('profesor.create')}}">Añadir Profesor</a></p>

    <div class="text-center">
        
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">CI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Fecha de Nacimiento</th>
                
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($profesor as $datosProfesor)
                <tr>
                <th class="text-white" scope="row">{{$datosProfesor->CI}}</th>
                <td class="text-white">{{$datosProfesor->nombre}}</td>
                <td class="text-white">{{$datosProfesor->telefono}}</td>
                <td class="text-white">{{$datosProfesor->correo}}</td>
                <td class="text-white">{{$datosProfesor->fechaNacimiento}}</td>
                <td class="text-white"><a class="btn btn-primary" href={{route('profesor.edit',$datosProfesor->CI)}}>Editar</a>
                    <form style="display:inline" action="{{route('profesor.destroy',$datosProfesor->CI)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger">Elimnar</button>
                    </form></td>
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection