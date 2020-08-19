@extends('layout');
@section('contenido')
    

<p></p>
<div class="container">
    <p><a class="btn btn-success" href="{{route('categoria.create')}}">Añadir Categoria</a></p>

    <div class="text-center">
        
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categoria as $datosCategoria)
                <tr>
                <th class="text-white" scope="row">{{$datosCategoria->Id}}</th>
                <td class="text-white">{{$datosCategoria->nombre}}</td>
                
                <td class="text-white"><a class="btn btn-primary" href={{route('categoria.edit',$datosCategoria->Id)}}>Editar</a>
                    <form style="display:inline" action="{{route('categoria.destroy',$datosCategoria->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger">Elimnar</button>
                    </form></td>
            @endforeach
        </tbody>
    </table>
</div>
</div>


@endsection