@extends('layout')
@section('contenido')

<p></p>
<div class="container">
    <div class="text-center">
        
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Numero de Tarjeta</th>
                <th scope="col">Mes de Expiracion</th>
                <th scope="col">Año de Expiracion</th>
                <th scope="col">CVC</th>
                
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($suscripcionPago as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <td class="text-white">{{$datos->numeroTarjeta}}</td>
                <td class="text-white">{{$datos->MesExpiracion}}</td>
                <td class="text-white">{{$datos->añoExpiracion}}</td>
                <td class="text-white">{{$datos->CVC}}</td>
                <td>
                    <form style="display:inline" action="{{route('suscripcionPago.destroy',$datos->Id)}}" method="post">
                        {!!csrf_field()!!}
                        {!!method_field('DELETE')!!}
                        <button type="submit" class="btn btn-danger">Elimnar</button>
                    </form>
                </td>
            @endforeach
        </tbody>
    </table>
</div>
</div>


    
@endsection