@extends('layout')
@section('contenido')

<form action="{{route('recursos.update',$recursos->Id)}}" method="post">
    {!!method_field('PUT')!!}

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Editar Recursos </h1>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Titulo</label>
            <input style="display:inline" type="text" value="{{$recursos->titulo}}" name="titulo" class="form-control">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Video</label>
            <input style="display:inline" type="text" value="{{$recursos->listado}}" name="listado" class="form-control">
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    
@endsection
