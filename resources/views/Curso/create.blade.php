@extends('layout')
@section('contenido')


<form action="{{route('curso.store')}}" method="post">

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Registrar Curso </h1>


    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Nombre</label>
            <input class="form-control bg-light shadow-sm @error('correo') is-invalid
            @enderror
            border-1" value="{{old('nombre')}}"
            type="text"
            name="nombre">
            @error('nombre')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Imagen</label>
            <input class="form-control bg-light shadow-sm @error('imagen') is-invalid
            @enderror
            border-1" value="{{old('imagen')}}"
            type="text"
            name="imagen">
            @error('imagen')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Precio</label>
            <input class="form-control bg-light shadow-sm @error('precio') is-invalid
            @enderror
            border-1" value="{{old('precio')}}"
            type="text"
            name="precio">
            @error('precio')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Descripcion</label>
            <input class="form-control bg-light shadow-sm @error('descripcion') is-invalid
            @enderror
            border-1" value="{{old('descripcion')}}"
            type="text"
            name="descripcion">
            @error('descripcion')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Requisitos</label>
            <input class="form-control bg-light shadow-sm @error('requisitos') is-invalid
            @enderror
            border-1" value="{{old('correo')}}"
            type="text"
            name="requisitos">
            @error('requisitos')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Nombre de Categoria</label>
            <input class="form-control bg-light shadow-sm @error('IdCategoria') is-invalid
            @enderror
            border-1" value="{{old('IdCategoria')}}"
            type="text"
            name="IdCategoria">
            @error('IdCategoria')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">CI Profesor</label>
            <input class="form-control bg-light shadow-sm @error('CIProfesor') is-invalid
            @enderror
            border-1" value="{{old('CIProfesor')}}"
            type="text"
            name="CIProfesor">
            @error('CIProfesor')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>






@endsection