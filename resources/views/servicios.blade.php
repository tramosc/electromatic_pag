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




            
            <!-- Team Start -->
                <br></br>
                    <div class="team">
                        <div class="container">
                            <div class="section-header text-center">
                                <!-- <p>Servicios Electromatic</p>-->
                                <h2 style="color: black;">Brindamos estos servicios</h2>
                            </div>
                            <div class="row">


                                @foreach($servicios as $servicio)
                                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                
                                        <div class="team-item">
                                            <div class="team-img">
                                                <img src="{{asset('storage').'/'.$servicio->img_portada}}" alt="Team Image">
                                            </div>
                                            <div class="team-text">
                                                <a class="btn" href="{{ url('/'.$servicio->id.'/Vista-Servicio-Elemento') }}">
                                                    <h2 style="color: white;">{{$servicio->titulo_servicios}}</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <br></br>
                                    </div>
                                    
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                
            <!-- Team End -->

            <!--  Nueva version de servicios -->
            <!-- Service Start -->
                <!-- 
                    <div class="service">
                        <div class="container">
                            <div class="section-header text-center">
                                <h2 style="color: black;">Servicios de Electromatic </h2>
                            </div>
                            <div class="row" style="display: flex; align-items: center; justify-content: center;">
                                    
                            @foreach($servicios as $servicio) 
                                    <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item">
                                            
                                            <div class="service-img">
                                                <img src="{{asset('storage').'/'.$servicio->img_portada}}" alt="Image">
                                                
                                                <div class="service-overlay">
                                                    
                                                    <p>{{$servicio->descripcion}}</p>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="service-text">
                                                <h3>{{$servicio->titulo_servicios}}</h3>
                                                <a class="btn" href="{{ url('/'.$servicio->id.'/Vista-Servicio-Elemento') }}">+</a>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach

                            </div>
                        </div>
                    </div>
                -->
            <!-- Service End -->
            

<br></br>

            <!-- Service Start -->
                <!-- 
                    <div class="service">
                        <div class="container">
                            <div class="section-header text-center">
                                <p>Servicios Electromatic</p>
                                <h2 style="color: black;">Brindamos estos servicios</h2>
                            </div>
                            <div class="row">
                            @foreach($servicios as $servicio)
                                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_portada}}" width="100px" height="200px" alt="Image">
                                            <div class="service-overlay">
                                                <p>
                                                {{$servicio->definicion}}
                                                </p>
                                            </div>
                                        </div>
                                        <div class="service-text">
                                            <h3>{{$servicio->titulo_servicios}}</h3>
                                            <a class="btn" href="{{ url('/'.$servicio->id.'/Vista-Servicio-Elemento') }}">+</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                -->
            <!-- Service End -->





        <!-- Carousel -->
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

            <!--  Nuevo clientes logos-->
                    <div class="section-header text-center">
                        <h3 style="color: black;">Empresas que confian en Electromatic</h3>
                    </div>
                <div class="slider" style="width: 100%;">
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
            <!--  Fin clientes logos-->
        <!-- Fin Carousel -->
            
            


            <!-- Team Start -->
                <div class="team">
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
