<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EMPRESA - ELECTROMATIC</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Construction Company Website Template" name="keywords">
        <meta content="Construction Company Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">
        <link href="{{ asset('css/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet"> 
        <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/slick/slick.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/slick/slick-theme.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Css para el mostrador de imagenes con titulo -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}" />

        <!-- Css para el mostrador de imagenes con titulo -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style8_V2.css') }}" />

<!-- Estilos carousel -->
        <style>
                    /*
                        body {
                        align-items: center;
                        background: #E3E3E3;
                        display: flex;
                        height: 100vh;
                        justify-content: center;
                        }
                    */
            @-webkit-keyframes scroll {
            0% {
                -webkit-transform: translateX(0);
                        transform: translateX(0);
            }
            100% {
                -webkit-transform: translateX(calc(-250px * 7));
                        transform: translateX(calc(-250px * 7));
            }
            }

            @keyframes scroll {
            0% {
                -webkit-transform: translateX(0);
                        transform: translateX(0);
            }
            100% {
                -webkit-transform: translateX(calc(-250px * 7));
                        transform: translateX(calc(-250px * 7));
            }
            }
            .slider {
            background: pr;
            box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);
            height: 120px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 980px;
            }
            .slider::before, .slider::after {
            background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
            content: "";
            height: 100px;
            position: absolute;
            width: 200px;
            z-index: 2;
            }
            .slider::after {
            right: 0;
            top: 0;
            -webkit-transform: rotateZ(180deg);
                    transform: rotateZ(180deg);
            }
            .slider::before {
            left: 0;
            top: 0;
            }
            .slider .slide-track {
            -webkit-animation: scroll 40s linear infinite;
                    animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
            }
            .slider .slide {
            height: 130px;
            width: 280px;
            }
        </style>
<!-- Fin Estilos carousel -->

<!-- Efectos css-->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    </head>

    <body> 
        <div class="wrapper" style="font-family: 'Poppins', sans-serif;">
            <!-- Top Bar Start --> 
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        
                        <div class="col-lg-8 col-md-7 d-none d-lg-block">
                            <div class="row">
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-calendar"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>Horario</h3>
                                            <p>Lun - Sab, 9:00 - 7:00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-call"></i>
                                        </div>
                                        <div class="top-bar-text">
                                            <h3>LLamanos</h3>
                                            <p>054-399450 - 964-770-354</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="top-bar-item">
                                        <div class="top-bar-icon">
                                            <i class="flaticon-send-mail"></i>
                                        </div>

                                        <div class="top-bar-text">
                                        <a href="mailto:servicios_cliente@electromaticindustrial.com?Subject=Interesado%20Pagina">Correo</a>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="">
                                <img src="{{ asset('img/logo1.png') }}" width="350" height="110" alt="Image" align="right">
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
            <div class="nav-bar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                        <a href="#" class="navbar-brand">MENU</a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto">
                                <a href="http://localhost/electromatic/public/" class="nav-item nav-link active">INICIO</a>
                                <a href="http://localhost/electromatic/public/Vista-Empresa" class="nav-item nav-link">EMPRESA</a>
                                <!--
                                <a href="http://localhost/electromatic/public/Vista-Servicios" class="nav-item nav-link">SERVICIOS</a>
                                -->
                                <div class="nav-item dropdown">
                                    <a href="http://localhost/electromatic/public/Vista-Servicios" class="nav-link dropdown-toggle" data-toggle="dropdown">SERVICIOS</a>
                                    <div class="dropdown-menu">
                                        <a href="http://localhost/electromatic/public/1/Vista-Servicio-Elemento" class="dropdown-item">GRUPOS ELECTROGENOS</a>
                                        <a href="http://localhost/electromatic/public/2/Vista-Servicio-Elemento" class="dropdown-item">POZOS DE PUESTA A TIERRA</a> 
                                        <a href="http://localhost/electromatic/public/3/Vista-Servicio-Elemento" class="dropdown-item">AUDITORIA ENERGETICA</a>
                                        <a href="http://localhost/electromatic/public/4/Vista-Servicio-Elemento" class="dropdown-item">UPS</a>
                                        
                                    </div>
                                </div>
                                <!-- <a href="http://localhost/electromatic/public/Vista-Repuestos" class="nav-item nav-link">REPUESTOS</a> -->
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SUMINISTROS</a>
                                    <div class="dropdown-menu">
                                        <a href="http://localhost/electromatic/public/Vista-Grupos" class="dropdown-item">GRUPOS ELECTROGENOS</a>
                                        <a href="http://localhost/electromatic/public/Vista-Pozos" class="dropdown-item">POZOS DE PUESTA A TIERRA</a>
                                        <a href="http://localhost/electromatic/public/Vista-UPS" class="dropdown-item">UPS</a>
                                        <a href="http://localhost/electromatic/public/Vista-Suministros" class="dropdown-item">SUMINISTROS</a>
                                    </div>
                                </div>
                                <a href="http://localhost/electromatic/public/Vista-Manuales" class="nav-item nav-link">MANUALES</a>
                                <a href="http://localhost/electromatic/public/Vista-Capacitaciones" class="nav-item nav-link">CURSOS Y CAPACITACIONES</a>
                                <a href="http://localhost/electromatic/public/Vista-Blog" class="nav-item nav-link">Blog</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="http://intranet.electromaticindustrial.com/" target="_blank">ZONA CLIENTES</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://micarrerauniversitaria.com/wp-content/uploads/2018/02/ingenieria-electrica-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Somos profesionales</p>
                            <h1 class="animated fadeInLeft">Para el apoyo de sus proyectos</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://aptus.com.ar/wp-content/uploads/2020/04/img_738_686.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Profesionales Capacitados</p>
                            <h1 class="animated fadeInLeft">Somos una empresa enfocada en grupos electrogenos</h1> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i0.wp.com/www.ms-ingenieria.com.mx/wp-content/uploads/2020/01/proveedor-de-ingenieria-electrica-industrial-en-mexico.jpg?resize=870%2C500&ssl=1" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Somos de confianza</p>
                            <h1 class="animated fadeInLeft">Para el mantenimiento de sus proyectos</h1>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->



          <br></br>

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center" style="text-align: center;">
                    <div class="col-sm-1"></div>

                        <div class="col-sm-6">

                        <div class="section-header text-left">
                                <h3 style="color: black; font-family: 'Poppins', sans-serif;"><b>HISTORIA</b></h3>
                            </div>
                            <div class="about-text">
                                <p style="font-family: 'Poppins', sans-serif; text-align: justify;">ELECTROMATIC INDUSTRIAL, se consolido en el año 2013 con el fin de dar soluciones alternativas en el campo de la energía, para los cual nos especializamos en el rubro eléctrico, electromecánico dedicada principalmente al dimensionamiento, instalación y mantenimiento de grupos electrógenos. Además, tableros de transferencia automática, auditorias energéticas, proyectos eléctricos y pozos de puesta a tierra, cumpliendo estándares y normas de calidad para una operación segura</p>
                            </div>


                        </div>
                        <div class="col-sm-1"></div>

                        <div class="col-sm-4">

<!-- 
                        <style>
                            .mySlides {display:none;}
                        </style>

                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                    <div class="w3-content w3-display-container">
                    @foreach($imagenesEmpresa as $imagenEmpresa)
                    <div class="w3-display-container mySlides">
                                <div class="scaling-image h-100">
                                    <div class="frame h-100">
                                        <div class="feature-img-bg h-100">
                                        <img src="{{asset('storage').'/'.$imagenEmpresa->img_empresa}}" class="animate__animated animate__fadeIn" width="333px" height="500px">
                                        </div>
                                    </div>
                                </div>
                        <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-dark-green" style="color: white; background-color: #007939;">
                        {{$imagenEmpresa->titulo_img}}
                        </div>
                    </div>
                    @endforeach

                    <button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

                    </div>
                    <script>
                        var slideIndex = 1;
                        showDivs(slideIndex);

                        function plusDivs(n) {
                        showDivs(slideIndex += n);
                        }

                        function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        if (n > x.length) {slideIndex = 1}
                        if (n < 1) {slideIndex = x.length}
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";  
                        }
                        x[slideIndex-1].style.display = "block";  
                        }
                    </script>
-->

                        <style>
                            @keyframes display {
                            0% {
                                transform: translateX(200px);
                                opacity: 0;
                            }
                            10% {
                                transform: translateX(0);
                                opacity: 1;
                            }
                            20% {
                                transform: translateX(0);
                                opacity: 1;
                            }
                            30% {
                                transform: translateX(-200px);
                                opacity: 0;
                            }
                            100% {
                                transform: translateX(-200px);
                                opacity: 0;
                            }
                            }

                            .pic-ctn > img {
                            position: absolute;
                            top: 0;
                            left: calc(50% - 100px);
                            opacity: 0;
                            animation: display 10s infinite;
                            }

                            img:nth-child(2) {
                            animation-delay: 2s;
                            }
                            img:nth-child(3) {
                            animation-delay: 4s;
                            }
                            img:nth-child(4) {
                            animation-delay: 6s;
                            }
                            img:nth-child(5) {
                            animation-delay: 8s;
                            }
                            img:nth-child(6) {
                            animation-delay: 10s;
                            }

                            .middle {
                            transition: .5s ease;
                            opacity: 0;
                            position: absolute;
                            top: 90%;
                            left: 50%;
                            transform: translate(-50%, -50%);
                            -ms-transform: translate(-50%, -50%);
                            text-align: center;
                            }

                            .container:hover .middle {
                            opacity: 1;
                            }

                            .text {
                            background-color: #4CAF50;
                            color: white;
                            font-size: 16px;
                            padding: 20px 32px;
                            }
                        </style>

                        <div class="pic-ctn">
                            @foreach($imagenesEmpresa as $imagenEmpresa)
                            <img src="{{asset('storage').'/'.$imagenEmpresa->img_empresa}}" width="333px" height="500px" alt="" class="pic">
                            @endforeach
                                        <br></br>
                                        <br></br>
                                        <br></br>
                                        <br></br>
                                        <br></br>
                        </div>

                        <br></br>
                                        <br></br>
                                        <br></br>
                                        <br></br>
                                        <br></br>
                        </div>

                    <!-- 
                        <div class="col-sm-1">
                        
                        </div>
                        <div class="col-md-5">
                            <div class="section-header text-left">
                                <h3 style="color: black;"><b>HISTORIA</b></h3>
                            </div>
                            <div class="about-text">
                                <p style="text-align: justify;">ELECTROMATIC INDUSTRIAL, se consolido en el año 2013 con el fin de dar soluciones alternativas en el campo de la energía, para los cual nos especializamos en el rubro eléctrico, electromecánico dedicada principalmente al dimensionamiento, instalación y mantenimiento de grupos electrógenos. Además, tableros de transferencia automática, auditorias energéticas, proyectos eléctricos y pozos de puesta a tierra, cumpliendo estándares y normas de calidad para una operación segura</p>
                            </div>
                                        
                        </div>

                        <div class="col-sm-4">

                                <style>

                                    @keyframes display {
                                    0% {
                                        transform: translateX(200px);
                                        opacity: 0;
                                    }
                                    10% {
                                        transform: translateX(0);
                                        opacity: 1;
                                    }
                                    20% {
                                        transform: translateX(0);
                                        opacity: 1;
                                    }
                                    30% {
                                        transform: translateX(-200px);
                                        opacity: 0;
                                    }
                                    100% {
                                        transform: translateX(-200px);
                                        opacity: 0;
                                    }
                                    }

                                    .pic-ctn > img {
                                    position: absolute;
                                    top: 0;
                                    left: calc(50% - 100px);
                                    opacity: 0;
                                    animation: display 10s infinite;
                                    }

                                    img:nth-child(2) {
                                    animation-delay: 2s;
                                    }
                                    img:nth-child(3) {
                                    animation-delay: 4s;
                                    }
                                    img:nth-child(4) {
                                    animation-delay: 6s;
                                    }
                                    img:nth-child(5) {
                                    animation-delay: 8s;
                                    }
                                    img:nth-child(6) {
                                    animation-delay: 10s;
                                    }
                                </style>

                            <div class="pic-ctn">
                                @foreach($imagenesEmpresa as $imagenEmpresa)
                                    <img src="{{asset('storage').'/'.$imagenEmpresa->img_empresa}}" width="333px" height="500px" alt="" class="pic">
                                @endforeach
                            </div>

                        </div>
                                -->
                    </div>
                </div>
            </div>
            <!-- About End -->

 <br></br>

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                                    <ul class="ca-menu">
                                        <li>
                                            
                                                <span class="ca-icon">
                                                    <img src="{{ asset('img/apoyo.png') }}" height="90" width="90">
                                                </span>
                                                <div class="ca-content">
                                                    <h2 style="font-family: 'Poppins', sans-serif;" class="ca-main">ATENCIÓN PERSONALIZADA</h2>
                                                </div>
                                    
                                        </li>
                                        <li>
                                            
                                                <span class="ca-icon">
                                                    <img src="{{ asset('img/gestion-de-proyectos.png') }}" height="90" width="90">
                                                </span>
                                                <div class="ca-content">
                                                    <h2 style="font-family: 'Poppins', sans-serif;" class="ca-main">TECNOLOGíA</h2>
                                                </div>
                                            
                                        </li>
                                        <li>
                                
                                                <span class="ca-icon">
                                                    <img src="{{ asset('img/soporte-tecnico.png') }}" height="90" width="90">
                                                </span>
                                                <div class="ca-content">
                                                    <h2 style="font-family: 'Poppins', sans-serif;" class="ca-main">SERVICIO TECNICO 24/7</h2>
                                                </div>
                                            
                                        </li>
                                    </ul>
                        </div>
                    </div>
                </div>

                </div>
            </div>
            <!-- About End -->

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-8">
                            <div class="about-img">
                                <div class="scaling-image h-100">
                                    <div class="frame h-100">
                                        <div class="feature-img-bg h-100">
                                            <img src="{{ asset('img/mision.png') }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-1"></div>


                        <div class="col-md-5">
                            <div class="section-header text-left">
                                <h3 style="font-family: 'Poppins', sans-serif; color: black;"><b>MISIÓN</b></h3>
                            </div>
                            <div class="about-text">
                                <p style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                Brindar a cada cliente soluciones innovadoras con calidad y seguridad, que se adapten a sus necesidades a través de un servicio personalizado.
                                </p>
                                
                            </div>
                            <br></br>
                        </div>


    
                        <div class="col-md-5">
                        <br></br>
                            <div class="section-header text-left">
                                <h3 style="font-family: 'Poppins', sans-serif; color: black;"><b>VISIÓN</b></h3>
                            </div>
                            <div class="about-text">
                                <p style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                Ser una empresa confiable, comprometida y reconocida por brindar servicios de alta calidad en el mercado eléctrico, electromecánico, obteniendo la satisfacción de nuestros clientes actuales y futuros.
                                </p>
                            </div>
                            <br></br>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <div class="scaling-image h-100">
                                    <div class="frame h-100">
                                        <div class="feature-img-bg h-100">
                                            <img src="{{ asset('img/vision.png') }}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- About End -->
            
            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="section-header text-center">
                       <h3 style=" font-family: 'Poppins', sans-serif; color: black;"><b>NUESTROS VALORES</b></h3> 
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                            <b>Actitud de servicio</b>
                                        </a>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a  style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                            <b>Compromiso</b>
                                        </a>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                        <b>Seguridad</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Segunda mitad-->
                        <div class="col-md-6">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                        <b>Responsabilidad</b>
                                        </a>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                        <b>Vocacion</b>
                                        </a>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a style="font-family: 'Poppins', sans-serif; text-align: justify;">
                                        <b>Adaptabilidad</b>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->
<br></br>

<!--  Nuevo clientes logos-->

<div class="slider">
	<div class="slide-track">
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/09.png') }}" height="80" width="250" alt="">
		</div>
		<div style="text-align: center;" class="slide">
			<img src="{{ asset('img/03.png') }}" height="80" width="250" alt="">
		</div>
		<div style="text-align: center;" class="slide">
			<img src="{{ asset('img/07.png') }}" height="100" width="250" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/credinka.png') }}" height="120" width="250" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/06.jpg') }}" height="100" width="280" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/10.png') }}" height="100" width="230" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/02.png') }}" height="100" width="250" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/logosenasa.png') }}" height="100" width="220" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/04.png') }}" height="100" width="250" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/01.png') }}" height="100" width="280" alt="">
		</div>
        <div style="text-align: center;" class="slide">
			<img src="{{ asset('img/blanco.jpg') }}" height="100" width="250" alt="">
		</div>
        <div class="slide">
			<p></p>
        </div>
        <div class="slide">
        <p></p>
            </div>
	</div>
</div>



            <!-- ======= Clients LOGO Section 
      <section id="clients" class="clients">
        <div class="container">
                    <div class="section-header text-center">
                       

                    </div>
          <div class="row">
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
              <img src="{{ asset('img/01.png') }}" class="img-fluid" alt="" width="1170px" height="1170px">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
              <img src="{{ asset('img/02.png') }}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
              <img src="{{ asset('img/03.jpg') }}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
              <img src="{{ asset('img/04.jpg') }}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
              <img src="{{ asset('img/08.png') }}" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
              <img src="{{ asset('img/06.png') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-1 col-md-1 col-2 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
              <img src="" class="img-fluid" alt="">
            </div>

            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
              <img src="{{ asset('img/07.jpg') }}" class="img-fluid" alt="">
            </div>


            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
              <img src="{{ asset('img/09.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
              <img src="{{ asset('img/10.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
              <img src="{{ asset('img/12.png') }}" class="img-fluid" alt="">
            </div>
  
          </div>
  
        </div>
      </section> End Clients Section 

-->
      <br><br>
            <!-- Team Start -->
            <div class="team" style="font-family: 'Poppins', sans-serif;">
                <div class="team-item">

                <!-- Footer Start -->
                    <div class="footer wow fadeIn" data-wow-delay="0.3s">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2">
                                    <div class="footer-link">
                                        <h2><i class="fa fa-phone-alt"></i> Telefonos</h2>		
                                        <a style="color: white;"> 054-399450</a>
                                        <a style="color: white;"> 964-770-354</a>
                                    </div>
                                            <!-- Frame del mapa 
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.21680939087483!2d-71.53906100252811!3d-16.400992816915345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5684292ea9%3A0x8745faeb5ca5bd33!2sELECTROMATIC%20INDUSTRIAL%20S.R.L.!5e0!3m2!1ses-419!2spe!4v1610986894827!5m2!1ses-419!2spe" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                            -->
                                </div>


                                
                                            <!-- Div 
                                                <div class="col-md-2 col-lg-1"></div>
                                                <div class="col-md-2 col-lg-1"></div>
                                            --> 
                                        

                                <div class="col-sm-5">
                                    <h2><i class="fa fa-envelope"></i> Correos</h2>
                                    <div class="footer-link">	
                                        <a style="color: white;">servicios_cliente@electromaticindustrial.com</a>
                                        <a style="color: white;">jcueva@electromaticindustrial.com</a>
                                    </div>
                                    <!-- Div personalizado  
                                        <div class=".col-sm-4 .col-sm-push-2">
                                            <!--
                                                <h2>INTRANET</h2>
                                                <p>
                                                    Solo para clientes, <a style="color: white;" href="http://intranet.electromaticindustrial.com/"><b><u>IR</u></b></a>
                                                </p>
                                                <br>
                                                <p>
                                                    Grupos electrogenos, <a style="color: white;" href="http://gruposelectrogenosei.com/"><b><u>IR</u></b></a>
                                                </p>
                                            -->  

                                            <!--   SCRIPT DE FACEBOOK
                                                    <script>(function(d, s, id) {
                                                                var js, fjs = d.getElementsByTagName(s)[0];
                                                                if (d.getElementById(id)) return;
                                                                js = d.createElement(s); js.id = id;
                                                                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1662789413962452";
                                                                fjs.parentNode.insertBefore(js, fjs);
                                                                }(document, 'script', 'facebook-jssdk'));
                                                    </script>
                                                    
                                                    <div class="fb-page" data-href="https://www.facebook.com/electromaticindustrialsrl/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>	
                                            -->

                                            <!-- SCRIPT DE TWITTER personalizado              
                                                <a class="twitter-timeline" data-lang="es" data-width="350" data-height="350" href="https://twitter.com/electromaticind?ref_src=twsrc%5Etfw">Tweets by electromaticind</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                            --> 
                                    <!--  </div> -->
                                </div>

                                <div class="col-sm-5">
                                    <div class="footer-contact">
                                        <h2><i class="fa fa-map-marker-alt"></i> Direcciones</h2>
                                            <div class="footer-link">
                                            <a style="color: white;">Calle Consuelo 307-A - Cercado Arequipa</a>
                                            <a style="color: white;">Calle Praga 232 Santa Rosa - M. Melgar</a>
                                            </div>
        
                                        <!--
                                        <div class="footer-social">
                                            <a href=""><i class="fab fa-twitter"></i></a>
                                            <a href=""><i class="fab fa-facebook-f"></i></a>
                                            <a href=""><i class="fab fa-youtube"></i></a>
                                            <a href=""><i class="fab fa-instagram"></i></a>
                                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                        -->
                                    </div>
                                </div>



                            </div>

                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                            <div class="text-left p-3" style="background-color: #717171">
                                ©<a style="color: white;" href="">Electromatic Industrial SRL </a>| Todos los derechos reservados 2013 - 2021
                            </div>
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-3" style="text-align: center;">
                                    <!-- Contador de visitas -->
                                
                                    <a href="http://www.websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
                                    <img style="border: 0px solid; display: inline;" alt="contador de visitas" src="http://www.websmultimedia.com/contador-de-visitas.php?id=289448"></a><br><a href='http://www.websmultimedia.com/contador-de-visitas-gratis'></a><br><a href='http://www.websmultimedia.com/diseno-logotipos'></a>
                                
                                    <!-- Fin Contador de visitas -->

                            </div>
                        </div>

                    </div>
                <!-- Footer End -->

                <!-- Inicio deslizable lateral social -->
                    <div class="team-social">
                        <hr>
                        <a class="social-tw" href="https://twitter.com/electromaticind"><i class="fab fa-twitter"></i></a>
                        <a class="social-fb" href="https://www.facebook.com/electromaticindustrialsrl/"><i class="fab fa-facebook-f"></i></a>
                        <a class="social-li" href="https://www.linkedin.com/in/electromatic-industrial-55857ba1?trk=nav_responsive_tab_profile"><i class="fab fa-linkedin-in"></i></a>
                        <a style="background-color: red" class="social-yt" href="https://www.youtube.com/channel/UCaDoRP93nUjVAhSYax_EYTg"><i class="fab fa-youtube"></i></a>
                    </div>
                <!-- fin deslizable lateral social -->
                </div>
            </div>
            <!-- Team End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/slick/slick.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
</html>
