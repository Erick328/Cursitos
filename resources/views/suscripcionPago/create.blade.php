@extends('layout')
@section('contenido')

<form action="{{route('suscripcionPago.store',$id)}}" method="post">

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Metodo de Pago </h1>
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Numero de Tarjeta</label>
            <input class="form-control bg-light shadow-sm @error('numeroTarjeta') is-invalid
            @enderror
            border-1" value="{{old('numeroTarjeta')}}"
            type="text"
            name="numeroTarjeta">

            @error('CI')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Mes de Expiracion</label>
            <input class="form-control bg-light shadow-sm @error('MesExpiracion') is-invalid
            @enderror
            border-1" value="{{old('MesExpiracion')}}"
            type="text"
            name="MesExpiracion">
            @error('MesExpiracion')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">Año Expiracion</label>
            <input class="form-control bg-light shadow-sm @error('añoExpiracion') is-invalid
            @enderror
            border-1" value="{{old('añoExpiracion')}}"
            type="text"
            name="añoExpiracion">
            @error('añoExpiracion')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>
    
    
    <div class="col-md-6 mb-2">
        <div class="form-group">
            <label class="text-white" for="">CVC</label>
            <input class="form-control bg-light shadow-sm @error('CVC') is-invalid
            @enderror
            border-1" value="{{old('CVC')}}"
            type="text"
            name="CVC">
            @error('CVC')
                <span class="invalided-feedback" role="alert">
                    <strong>{{$message}}</strong>
                </span>
            @enderror
        </div>
    </div>

    

    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>
</form>
    
@endsection