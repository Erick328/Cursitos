@extends('layout')
@section('contenido')

<form action="{{route('alumno.update',$alumno->CI)}}" method="post">
    {!!method_field('PUT')!!}

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Modificar Alumno </h1>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Nombre</label>
            <input style="display:inline" type="text" value="{{$alumno->nombre}}" name="nombre" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Telefono</label>
            <input type="text" value="{{$alumno->telefono}}" name="telefono" class="form-control">
        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Correo</label>
            <input type="text" value="{{$alumno->correo}}" name="correo" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    
@endsection
