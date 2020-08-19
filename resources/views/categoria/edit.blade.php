@extends('layout');
@section('contenido')
<form action="{{route('categoria.update',$categoria->Id)}}" method="post">
    {!!method_field('PUT')!!}

    {!!csrf_field()!!}

<div class="container">
    <h1 class="text-white"> Modificar Categoria </h1>

    <div class="form-row">
        <div class="col-md-6 mb-2">
            <label class="text-white" for="">Nombre</label>
            <input style="display:inline" type="text" value="{{$categoria->nombre}}" name="nombre" class="form-control">
        </div>
    </div>

    <button type="submit" class="btn btn-primary"> Guardar </button>
</div>

    

@endsection