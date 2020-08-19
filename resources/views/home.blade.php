@extends('layout')
@section('contenido')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
        <section class="textos-header">
            <h1>Potencia tu aprendisaje en un 200%</h1>
            <h2>Con una página web potente</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
    </header>
    <main style="background-color: #fff">
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nuestro producto</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="img/ilustracion2.svg" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span>Mision & Vision</h3>
                    <p>La misión de la plataforma Cursitos es la formación integral de los estudiantes en las competencias que demanda la sociedad actual.
                        Se compromete a cumplir con las necesidades y expectativas de todos los grupos de interés implicados en el proceso (estudiantes, personal docente e investigador, personal de administración y servicios, administraciones públicas y sociedad en general), mediante una formación de calidad que busque la mejora continua y la excelencia.
                        Tenemos una especial sensibilidad para atender a aquellos que por diversas circunstancias no puedan acceder a centros presenciales, o a los que, pudiendo hacerlo, prefieran optar por soluciones más abiertas e innovadoras que las tecnologías emergentes abran en la red.
                        Asimismo, tiene como objetivo promover el comportamiento ético, la lucha contra el fraude académico, la defensa de la libertad académica, la prevención de la intolerancia y de la discriminación de cualquier tipo de los estudiantes o de su personal.</p>
                    <h3><span>2</span>Objetivo General</h3>
                    <p>Hacer un sistema para diseñar cursos virtuales como asistencia a las
                        asignaturas dictadas donde puedas registrar alumnos y docentes y
                        aprender a tu propio ritmo.</p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Portafolio</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="img/img1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img2.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img3.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img1.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img4.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img5.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img6.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="img/img7.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="img/icono1.png" alt="">
                            <p>Nuestro trabajo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>+591 78147873</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>erickvidal328@gmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>Santa Cruz-Bolivia</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; byErick | Erick Vidal</h2>
    </footer>
</body>

@endsection
