@extends('layout')

@section('contenido')

<p></p>
<div class="container">
    <p><a class="btn btn-success" href="{{route('alumno.create')}}">Añadir Alumno</a></p>

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
            @foreach ($alumno as $datosAlumno)
                <tr>
                <th class="text-white" scope="row">{{$datosAlumno->CI}}</th>
                <td class="text-white">{{$datosAlumno->nombre}}</td>
                <td class="text-white">{{$datosAlumno->telefono}}</td>
                <td class="text-white">{{$datosAlumno->correo}}</td>
                <td class="text-white">{{$datosAlumno->fechaNacimiento}}</td>
                <td class="text-white"><a class="btn btn-primary" href={{route('alumno.edit',$datosAlumno->CI)}}>Editar</a>
                    <form style="display:inline" action="{{route('alumno.destroy',$datosAlumno->CI)}}" method="post">
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