@extends('layout')
@section('contenido')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/curso.css">
    <body>
        <header>
            <section class="textos-header">
                <h1>{{$curso->nombre}}</h1>
                <h2>El mejor</h2>
            </section>
        </header>

        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Primero</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="{{$curso->imagen}}" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Descripcion</h3>
                    <p></h3>
                    <p>{{$curso->descripcion}}</p>
                    <h3><span>2</span>Requisitos</h3>
                    <p>{{$curso->requisitos}}</p>
                </div>
            </div>
        </section>

        <section class="comentario">
            <h1 style="text-align: center">Comentarios</h1>
            <div class="col">
                <form style="text-align: center;border: 20px" action="{{route('comentario.store',$curso->Id)}}" method="post">
                    @csrf
                    <textarea style="column-width: 10cm; text-align: " name="descripcion" id="" cols="50" rows="4"></textarea>
                    <button type="submit"  class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </section>

        <section>
            @foreach ($comentario as $dato)
            <hr>
            <h6  style="color: white">{{$dato->nombre}}</h6>
            <h5>{{$dato->descripcion}}</h5>   
            @if(auth()->user()->Codigo===$dato->CIAlumno)
                <form action="{{route('comentario.destroy',$dato->Id)}}" method="post" style="display: inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" >Eliminar</button>
        
                </form>
        
             @endif
        
            @endforeach
        </section>
        
    </body>
    


    
        
</div>
    
    




@endsection