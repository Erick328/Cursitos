@extends('layout')
@section('contenido')

<form action="{{route('curso.update',$curso->Id)}}" method="post">
    {!!method_field('PUT')!!}

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Modificar Curso </h1>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Nombre</label>
            <input style="display:inline" type="text" value="{{$curso->nombre}}" name="nombre" class="form-control">
        </div>
    </div>
    
    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Imagen</label>
            <input style="display:inline" type="text" value="{{$curso->imagen}}" name="nombre" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Precio</label>
            <input style="display:inline" type="text" value="{{$curso->precio}}" name="imagen" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Descripcion</label>
            <input type="text" value="{{$curso->descripcion}}" name="descripcion" class="form-control">
        </div>
    </div>


    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Requisitos</label>
            <input type="text" value="{{$curso->requisitos}}" name="requisitos" class="form-control">
        </div>
    </div>
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    
@endsection
