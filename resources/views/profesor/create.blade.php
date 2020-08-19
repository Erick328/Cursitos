@extends('layout')
@section('contenido')

<form action="{{route('profesor.store')}}" method="post">

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Registrar porfesor </h1>
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">CI</label>
            <input class="form-control bg-light shadow-sm @error('CI') is-invalid
            @enderror
            border-1" value="{{old('CI')}}"
            type="text"
            name="CI">

            @error('CI')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Nombre</label>
            <input class="form-control bg-light shadow-sm @error('nombre') is-invalid
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
            <label class="text-white" for="">Password</label>
            <input class="form-control bg-light shadow-sm @error('password') is-invalid
            @enderror
            border-1" value="{{old('password')}}"
            type="password"
            name="contra">
            @error('password')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Telefono</label>
            <input class="form-control bg-light shadow-sm @error('telefono') is-invalid
            @enderror
            border-1" value="{{old('telefono')}}"
            type="text"
            name="telefono">
            @error('telefono')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Fecha de Nacimiento</label>
            <input class="form-control bg-light shadow-sm @error('fechaNacimiento') is-invalid
            @enderror
            border-1" value="{{old('fechaNacimiento')}}"
            type="text"
            name="fechaNacimiento">
            @error('fechaNacimiento')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Correo</label>
            <input class="form-control bg-light shadow-sm @error('correo') is-invalid
            @enderror
            border-1" value="{{old('correo')}}"
            type="text"
            name="correo">
            @error('correo')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    
@endsection
