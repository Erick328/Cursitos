@extends('layout')
@section('contenido')

<form action="{{route('boletaInscripcion.store',[$id,$IdPago])}}" method="post">

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Confirmacion de compra </h1>


    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">CI del Alumno</label>
            <input class="form-control bg-light shadow-sm @error('CIAlumno') is-invalid
            @enderror
            border-1" value="{{old('CIAlumno')}}"
            type="text"
            name="CIAlumno">
            @error('CIAlumno')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>


    
    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>




    
@endsection