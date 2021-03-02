<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SERVICIOS - ELECTROMATIC</title>
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
    </head>

    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">

                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="">
                                <img src="{{ asset('img/logo1.png') }}" width="350" height="110" alt="Image">
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                </a>
                            </div>
                        </div>

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
                                            <h3>LLámanos</h3>
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
                                        <a href="http://localhost/electromatic/public/#contactos">Cotizar</a>
                                        </div>
                                    </div>
                                </div>
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
                                    <a href="http://localhost/electromatic/public/Vista-Empresa" class="nav-item nav-link">NOSOTROS</a>
                                    <a href="http://localhost/electromatic/public/Vista-Servicios" class="nav-item nav-link">SERVICIOS</a>
                                    
                                    <!-- 
                                        <div class="nav-item dropdown">
                                            <a href="http://localhost/electromatic/public/Vista-Servicios" class="nav-link dropdown-toggle" data-toggle="dropdown">SERVICIOS</a>
                                            <div class="dropdown-menu">
                                                <a href="http://localhost/electromatic/public/1/Vista-Servicio-Elemento" class="dropdown-item">GRUPOS ELECTROGENOS</a>
                                                <a href="http://localhost/electromatic/public/2/Vista-Servicio-Elemento" class="dropdown-item">POZOS DE PUESTA A TIERRA</a> 
                                                <a href="http://localhost/electromatic/public/3/Vista-Servicio-Elemento" class="dropdown-item">AUDITORIA ENERGETICA</a>
                                                <a href="http://localhost/electromatic/public/4/Vista-Servicio-Elemento" class="dropdown-item">UPS</a>
                                            </div>
                                        </div>
                                    -->
                                    <!-- <a href="http://localhost/electromatic/public/Vista-Repuestos" class="nav-item nav-link">REPUESTOS</a> -->
                                    <a href="http://localhost/electromatic/public/Vista-Suministros-Generales" class="nav-item nav-link">SUMINISTROS</a>
                                    <!-- 
                                    <div class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SUMINISTROS</a>
                                        <div class="dropdown-menu">
                                            <a href="http://localhost/electromatic/public/Vista-Grupos" class="dropdown-item">GRUPOS ELECTROGENOS</a>
                                            <a href="http://localhost/electromatic/public/Vista-Pozos" class="dropdown-item">POZOS DE PUESTA A TIERRA</a>
                                            <a href="http://localhost/electromatic/public/Vista-UPS" class="dropdown-item">UPS</a>
                                            <a href="http://localhost/electromatic/public/Vista-Suministros" class="dropdown-item">SUMINISTROS</a>
                                        </div>
                                    </div>
                                    -->
                                    <a href="http://localhost/electromatic/public/Vista-Manuales" class="nav-item nav-link">MANUALES</a>
                                    <a href="http://localhost/electromatic/public/Vista-Capacitaciones" class="nav-item nav-link">CAPACITACIONES</a>
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

            <!-- Single Post Start-->
            <div class="single">
                
                    <div class="row">
                        <!-- Elementos de la zona de la izquierda -->
                        <div class="col-lg-8">
                            <!-- Elementos de izquierda -->
                                <!-- Service-detalle Start -->

                                       <div class="container">
                                           
                                           <div class="sidebar">
                                                <div class="container">
                                                    <div class="sidebar-widget wow fadeInUp">
                                                        <h2 class="widget-title" style=" text-align: left; color: black;"><b>{{ $servicio->titulo_servicios }}</b></h2>
                                                    </div>
                                                </div>
                                           </div>
     
                                       </div>     

                            <div class="service">
                                <div class="container">
                                        <div class="card-body">


                                    <!-- Nueva animacion de imagenes  -->
                                                <style>
                                                        * {
                                                        padding: 0;
                                                        margin: 0;
                                                        }
                                                        .contenidos {
                                                        width: 100%;
                                                        min-height: 50vh;
                                                        }
                                                        .image {
                                                        perspective: 3000px;
                                                        width: 50%;
                                                        position: absolute;
                                                        left: 50%;
                                                        top:50%;
                                                        transform: translate(-50%, -50%);
                                                        transform-style: preserve-3d;
                                                        }
                                                        .image img {
                                                        transform: rotateX(70deg) rotateZ(-60deg) translate3d(-120px, 0px, 70px);
                                                        box-shadow: -80px 60px 15px 5px rgba(0,0,0,0.4);
                                                        transition: all .4s;
                                                        transform-style: preserve-3d;
                                                        }
                                                        .image:hover img {
                                                        transform: rotateX(0deg) rotateZ(0deg) translate3d(0px, 0px, 0px);
                                                        box-shadow: 0px 0px 0px 0px rgba(0,0,0,0.0);
                                                        }

                                                        
                                                        .responsive {
                                                        width: 100%;
                                                        max-width: 700px;
                                                        height: auto;
                                                        }

                                                </style>
                                                <div class="contenidos">
                                                    <center>
                                                        <div class="image" style="width:100%;">  <!-- width="500px" height="400px" --->
                                                            <img src="{{asset('storage').'/'.$servicio->img_portada}}" class="img responsive" alt="">
                                                        </div>
                                                    </center>
                                                    
                                                </div>
                                                <br></br>
                                                <br></br>
                                                <br></br>

                                    <!-- Fin de la nuema animacion-->
                                        </div>

                                            <br></br>
  
                                </div> 
                            </div>

                                    <center>
                                        @if (($servicio->titulo1)||($servicio->parrafo1))

                                        <div class="card" style="background-color: #007939; width: 80%;">
                                            <div class="card-header" style="color: white;">
                                                <h5 style="text-align: left;"><b>{{$servicio->titulo1}}</b></h5>
                                            </div>
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item">{{ $servicio->parrafo1 }}</li>
                                                
                                                </ul>
                                        </div>
                                        
                                            @else
                                            <!-- mensaje de que no hay descripcion--->
                                        @endif

                                    </center>
                                            <br>

                                        @if (($servicio->titulo2)||($servicio->parrafo2))
                                        <center>
                                            <div class="card" style="background-color: #007939; width: 80%;">
                                                <div class="card-header" style="color: white;">
                                                    <h5 style="text-align: left;"><b>{{$servicio->titulo2}}</b></h5>
                                                </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">{{ $servicio->parrafo2 }}</li>
                                                    
                                                    </ul>
                                            </div>

                                        </center>
                                        @else
                                            <!-- mensaje de que no hay descripcion--->
                                        @endif
                                        <br>
                  
                                        @if (($servicio->titulo3)||($servicio->parrafo3))
                                        <center>
                                            <div class="card" style="background-color: #007939; width: 80%;">
                                                <div class="card-header" style="color: white;">
                                                    <h5 style="text-align: left;"><b>{{$servicio->titulo3}}</b></h5>
                                                </div>
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item">{{ $servicio->parrafo3 }}</li>
                                                    
                                                    </ul>
                                            </div>
                                        </center>
                                        @else
                                            <!-- mensaje de que no hay descripcion--->
                                        @endif
                                        <br>
                            <!-- Service-detalle End -->
                        </div>

                            <!-- Fin de Elementos de la zona de la izquierda -->





                        <div class="col-lg-4">

                            
                                
                                
                                <style>
                                    .title{
                                        border-bottom: #007939 1px solid;
                                        padding: 12px;    
                                        border-radius: 10px 10px 0px 0px;
                                        color: white;
                                        margin-bottom: 0px;
                                        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#299a0b+0,299a0b+100;Green+Flat+%231 */
                                        background: #007939; /* Old browsers */
                                        background: -moz-linear-gradient(top,  #007939 0%, #007939 100%); /* FF3.6-15 */
                                        background: -webkit-linear-gradient(top,  #007939 0%,#007939 100%); /* Chrome10-25,Safari5.1-6 */
                                        background: linear-gradient(to bottom,  #007939 0%,#007939 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
                                        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007939', endColorstr='#007939',GradientType=0 ); /* IE6-9 */
                                    }
                                    .titulo{
                                        background: white;
                                        border-radius: 0px 30px 30px 0px;
                                        margin-left: -15px;
                                        margin-top: 45px;
                                        padding: 15px 5px 1px 40px;
                                        font-weight: bold;
                                    }
                                </style>

                                <div class="col-md-10" style="background:gainsboro">
                                            <br>
                                    <h5 class="title" style="background-color: #007939 ;"> NUESTROS SERVICIOS </h5>
                                    <ul class="list-group">                    
                                                    <li style="font-size: 20px;" class="list-group-item"><a href=""> Grupos Electrógenos </a></li>                         
                                                    <li style="font-size: 20px;" class="list-group-item"><a href=""> Pozos de puesta a tierra </a></li>
                                                    <li style="font-size: 20px;" class="list-group-item"><a href=""> UPS </a></li>
                                                    <li style="font-size: 20px;" class="list-group-item"><a href=""> Auditoria energetica </a></li>
                                    </ul>
                                    <br>

                                    <style>
                                  
                                        div.sticky {
                                        position: -webkit-sticky;
                                        position: sticky;
                                        top: 0;
                                        padding: 5px;
                                        }
                                    </style>

                                    <div class="sticky">
                                    <br></br>
                                    <br>
                                    <div id="fb-root"><h5 class="title"> SIGUENOS EN FACEBOOK </h5></div>
                                    <script>(function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s); js.id = id;
                                    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1662789413962452";
                                    fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                    <div class="fb-page" data-href="https://www.facebook.com/electromaticindustrialsrl/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>	
                                    </div>
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                    <br></br>
                                    <br></br>

                                </div>

                            
                        </div>

                    </div>
                    </div>
                
            </div></div>
            <!-- Single Post End-->   

            <!-- Galeria Start -->
                <div class="service">
                    <div class="container">

                        @if(($servicio->img_uno)||($servicio->img_dos)||($servicio->img_tres)||($servicio->img_cuatro)||($servicio->img_cinco)||($servicio->img_seis)||($servicio->img_siete)||($servicio->img_ocho)||($servicio->img_nueve))
                            <div class="section-header text-center">
                                <h2 style="color: black;">Galeria</h2>
                            </div>
                            <div class="row">
                                <!-- Imagen 1 -->
                                @if (($servicio->img_uno))
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <img src="{{asset('storage').'/'.$servicio->img_uno}}" width="100px" height="280px" alt="Image">
                                            </div>
                                            <div class="service-text">
                                                <h3 style="text-align: center;">Galeria Electromatic</h3>
                                                <a class="btn" href="{{asset('storage').'/'.$servicio->img_uno}}" data-lightbox="service">+</a>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->



                                <!-- Imagen 2 -->
                                @if (($servicio->img_dos))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_dos}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_dos}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                                <!-- Imagen 3 -->
                                @if (($servicio->img_tres))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_tres}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_tres}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                                <!-- Imagen 4 -->
                                @if (($servicio->img_cuatro))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_cuatro}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_cuatro}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                                <!-- Imagen 5 -->
                                @if (($servicio->img_cinco))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_cinco}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_cinco}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                                <!-- Imagen 6 -->
                                @if (($servicio->img_seis))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_seis}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_seis}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                                <!-- Imagen 7 -->
                                @if (($servicio->img_siete))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_siete}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_siete}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                                <!-- Imagen 8 -->
                                @if (($servicio->img_ocho))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_ocho}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_ocho}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                                <!-- Imagen 9 -->
                                @if (($servicio->img_nueve))
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_nueve}}" width="100px" height="280px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">Galeria Electromatic</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$servicio->img_nueve}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                    <!-- mensaje de que no hay descripcion--->
                                @endif
                                <!-- Zona de elemento descripcion -->

                            </div>
                        @else
                            <!-- mensaje de que no hay imagenes--->
                        @endif
                    </div>
                </div>
            <!-- Galeria End -->
        <br></br>
            <style>
                .button {
                border-radius: 4px;
                background-color: #007939;
                border: none;
                color: #FFFFFF;
                text-align: center;
                font-size: 28px;
                padding: 20px;
                width: 200px;
                transition: all 0.5s;
                cursor: pointer;
                margin: 5px;
                }

                .button span {
                cursor: pointer;
                display: inline-block;
                position: relative;
                transition: 0.5s;
                }

                .button span:after {
                content: '\00bb';
                position: absolute;
                opacity: 0;
                top: 0;
                right: -20px;
                transition: 0.5s;
                }

                .button:hover span {
                padding-right: 25px;
                }

                .button:hover span:after {
                opacity: 1;
                right: 0;
                }
            </style>
            <center><a href="http://localhost/electromatic/public/#contactos" class="button"><span style="color: white;">Cotizar Ahora...</span></a></center>
        <br></br>

            <!-- Team Start -->
            <div class="team" style="width: 100%;">
                    <div class="team-item">

                    <!-- Footer Start -->
                        <div class="footer wow fadeIn" data-wow-delay="0.3s">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="footer-link">
                                            <h2><i class="fas fa-phone-alt"></i> Teléfonos</h2>		
                                            <a style="color: white;"> 054-399450</a>
                                            <a style="color: white;"> 964-770-354</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-5">
                                        <h2><i class="fa fa-envelope"></i> Correos</h2>
                                        <div class="footer-link">	
                                            <a style="color: white;">servicios_cliente@electromaticindustrial.com</a>
                                            <a style="color: white;">jcueva@electromaticindustrial.com</a>
                                        </div>
                                    </div>

                                    <div class="col-sm-5">
                                        <div class="footer-contact">
                                            <h2><i class="fas fa-map-marker-alt"></i> Direcciones</h2>
                                                <div class="footer-link">
                                                <a style="color: white;">Calle Consuelo 307-A - Cercado Arequipa</a>
                                                <a style="color: white;">Calle Praga 232 Santa Rosa - M. Melgar</a>
                                                </div>
        
                                        </div>
                                    </div>



                                </div>

                            </div>


                            <div class="row">
                                <div class="col-sm-3"></div>
                                <div class="col-sm-6">
                                <div class="text-left p-3" style="background-color: #717171">
                                    ©<a style="color: white;" href=""><b>Electromatic Industrial SRL</b> </a>| Todos los derechos reservados 2013 - 2021
                                </div>
                                </div>
                                
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




            <!-- Boton de whatsapp -->
            <style>
                .float{
                    position:fixed;
                    width:60px;
                    height:60px;
                    bottom:40px;
                    right:40px;
                    background-color:#25d366;
                    color:#FFF;
                    border-radius:50px;
                    text-align:center;
                font-size:30px;
                    box-shadow: 2px 2px 3px #999;
                z-index:100;
                }
                .float:hover {
                    text-decoration: none;
                    color: #25d366;
                background-color:#fff;
                }

                .my-float{
                    margin-top:16px;
                }
            </style>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <a href="https://api.whatsapp.com/send?phone=964770354&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20sus%20Servicios%20." class="float" target="_blank"><i class="fa fa-whatsapp my-float"></i></a>
            <!-- Fin de Boton de whatsapp -->




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
