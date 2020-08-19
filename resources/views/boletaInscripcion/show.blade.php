@extends('layout');
@section('contenido')
    

<p></p>
<div class="container">

    <div class="text-center">
        
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">monto</th>
                <th scope="col">fecha</th>
                <th scope="col">id curso</th>
                <th scope="col">Ci alumno</th>
                <th scope="col">Id suscripcion</th>
                
                
                
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($boletaInscripcion as $datos)
                <tr>
                <th class="text-white" scope="row">{{$datos->Id}}</th>
                <td class="text-white">{{$datos->monto}}</td>
                <td class="text-white">{{$datos->fecha}}</td>
                <td class="text-white">{{$datos->IdCurso}}</td>
                <td class="text-white">{{$datos->CIAlumno}}</td>
                <td class="text-white">{{$datos->IdSuscripcion}}</td>



                <td><form style="display:inline" action="{{route('boletaInscripcion.destroy',$datos->Id)}}" method="post">
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