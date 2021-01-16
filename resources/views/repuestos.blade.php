<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Repuestos - ELECTROMATIC</title>
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
                                <a href="index.html">
                                <img src="{{ asset('img/logotipo.png') }}" width="200" height="300" alt="Image">
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
                                            <h3>Correo</h3>
                                            <a href="mailto:servicios_cliente@electromaticindustrial.com">Nuestro correo</a>
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
                                <a href="http://localhost/electromatic/public/Vista-Empresa" class="nav-item nav-link">EMPRESA</a>
                                <a href="http://localhost/electromatic/public/Vista-Servicios" class="nav-item nav-link">SERVICIOS</a>
                                <a href="http://localhost/electromatic/public/Vista-Repuestos" class="nav-item nav-link">REPUESTOS</a>
                                <a href="http://localhost/electromatic/public/Vista-Manuales" class="nav-item nav-link">MANUALES</a>
                                <a href="http://localhost/electromatic/public/Vista-Contacto" class="nav-item nav-link">CONTACTO</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="http://intranet.electromaticindustrial.com/">ZONA CLIENTES</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->
            
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 style="color: white;">REPUESTOS</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Inicio</a>
                            <a href="">Repuestos</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


           <!-- Team Start -->
           <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Repuestos y equipo</p>
                    <h2 style="color: black;">Nuestros repuestos disponibles</h2>
                </div>
                <div class="row">


                @foreach($repuestos as $repuesto)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{asset('storage').'/'.$repuesto->img_repuesto}}" width="100px" height="230px" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2 style="color: white;">{{$repuesto->titulo_repuesto}}</h2>
                                <a href="{{ url('/'.$repuesto->id.'/Vista-Repuesto-Elemento') }}" style="color: white;">Saber mas...</a>
                            </div>
                        </div>
                    </div>
                @endforeach

                </div>
            </div>
        </div>
        <!-- Team End -->


             <!-- Footer Start -->
             <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="footer-contact">
                                <h2>Oficina de contacto</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Calle Consuelo 307-A - Cercado Arequipa</p>
                                <p><i class="fa fa-phone-alt"></i>054-399450 - 964-770-354</p>
                                <p><i class="fa fa-envelope"></i>servicios_cliente<br>@electromaticindustrial.com</p>
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
                        <div class="col-md-2 col-lg-1">
                            
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <p>.</p>
                            <!--<div class="footer-link">
                                <h2>Nuestras Paginas</h2>
                                <a href="">Empresa</a>
                                <a href="">Contactanos</a>
                                <a href="">Servicios</a>
                                <a href="">Manuales</a>
                                <a href="">Repuestos</a>
                                <a href="">Postulantes</a>
                            </div> -->

                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Nuestros Sitios</h2>
                                <p>
                                    <b>Intranet</b>, destinado a nuestros clientes <a href="http://intranet.electromaticindustrial.com/">Ir al sitio</a>
                                </p>
                                <br>
                                <p>
                                    <b>Grupos electrogenos</b>, <a href="http://gruposelectrogenosei.com/">Ir al sitio</a>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <div class="container footer-menu">
                    <h4><b>Nuestras redes sociales</b></h4>
                    <div class="f-menu">
                        <a href=""><i class="fab fa-twitter fa-4x"></i></a>
                        <a href=""><i class="fab fa-facebook-f fa-4x"></i></a>
                        <a href=""><i class="fab fa-youtube fa-4x"></i></a>
                        <a href=""><i class="fab fa-instagram fa-4x"></i></a>
                        <a href=""><i class="fab fa-linkedin-in fa-4x"></i></a>
                    </div>
                </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#" style="color: white;">ELECTROMATIC INDUSTRIAL</a></p>
                        </div>
                        <div class="col-md-6">
                             <!-- <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>  -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


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
