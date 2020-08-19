@extends('layout')
@section('contenido')

<form action="{{route('recursos.store')}}" method="post">

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Recursos de la clase </h1>
    
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Titulo</label>
            <input class="form-control bg-light shadow-sm @error('titulo') is-invalid
            @enderror
            border-1" value="{{old('titulo')}}"
            type="text"
            name="titulo">

            @error('titulo')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Video</label>
            <input class="form-control bg-light shadow-sm @error('listado') is-invalid
            @enderror
            border-1" value="{{old('listado')}}"
            type="text"
            name="listado">

            @error('listado')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Nombre del Curso</label>
            <input class="form-control bg-light shadow-sm @error('IdCurso') is-invalid
            @enderror
            border-1" value="{{old('IdCurso')}}"
            type="text"
            name="IdCurso">
            @error('IdCurso')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    
@endsection
