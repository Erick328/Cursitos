@extends('layout')
@section('contenido')

{{--<form action="{{route('recursos.show',$recursos->Id)}}" method="post">--}}
<div class="container">
    <div class="row py-4">
        <div class="col mx-auto">
    

    @foreach($recursos as $datosRecursos)
        <h1 class="display-4 font-weight-bold " style="float: left; color: white; ">{{$datosRecursos->titulo}}</h1>
        
        <div class="embed-responsive embed-responsive-16by9 " >
            <iframe class=" embed-responsive-item " style=" height:100%;
            width:100%;border-radius: 15px;" 
             src="{{$datosRecursos->listado}}" allowfullscreen></iframe>
        </div>

    @endforeach
    <hr>
    {{$recursos->links()}}
        </div>
    </div>
</div>



    {{--<h1 style="float: left; color: white;text-align: center">{{$recursos->titulo}}</h1>
    <hr>
    <div class="embed-responsive embed-responsive-16by9" ">
        <iframe class="TituloCard embed-responsive-item " style=" height:50%;
            width:50%; 
        " src="{{$recursos->listado}}" allowfullscreen></iframe>
    </div>--}}
   




    
        

    
    




@endsection