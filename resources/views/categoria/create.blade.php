@extends('layout');
@section('contenido')


<form action="{{route('categoria.store')}}" method="post">

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Registrar categoria </h1>



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
    

    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    
    
@endsection