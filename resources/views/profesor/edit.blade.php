@extends('layout')
@section('contenido')

<form action="{{route('profesor.update',$profesor->CI)}}" method="post">
    {!!method_field('PUT')!!}

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Modificar Profesor </h1>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Nombre</label>
            <input style="display:inline" type="text" value="{{$profesor->nombre}}" name="nombre" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Telefono</label>
            <input type="text" value="{{$profesor->telefono}}" name="telefono" class="form-control">
        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Correo</label>
            <input type="text" value="{{$profesor->correo}}" name="correo" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    
@endsection
