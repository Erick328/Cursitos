@extends('layout')
@section('contenido')
    

<h1 style="text-align: center">Bitacora</h1>
<section style="text-align: center">
    <div>
        <th class="text-white"><a class="btn btn-primary" href="<?php echo route('profesor.index')?>">profesores</a>
        </th>
    </div>
</section >
<hr>
<section style="text-align: center">
    <div>
        <th class="text-white"><a class="btn btn-primary" href="<?php echo route('alumno.index')?>">Alumnos</a>
        </th>
    </div>
</section>
<hr>
<section style="text-align: center">
    <div>
        <th class="text-white"><a class="btn btn-primary"href="<?php echo route('boletaInscripcion.show')?>">Boletas de Inscripcion</a>
        </th>
    </div>
</section>
<hr>
<section style="text-align: center">
    <div>
        <th class="text-white"><a class="btn btn-primary"href="<?php echo route('categoria.index')?>">categorias</a>
        </th>
    </div>
</section>
<hr>
<section style="text-align: center">
    <div>
        <th class="text-white"><a class="btn btn-primary"href="<?php echo route('suscripcionPago.index')?>">Pagos</a>
        </th>
    </div>
</section>
<hr>
<section style="text-align: center">
    <div>
        <th class="text-white"><a class="btn btn-primary"href="<?php echo route('curso.index')?>">Cursos</a>
        </th>
    </div>
</section>

                
                
                
                
                
         



        
        
        
       
        





@endsection