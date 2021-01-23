<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>POZOS - ELECTROMATIC</title>
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
                                <img src="{{ asset('img/logotipo.png') }}" width="300" height="300" alt="Image">
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
                                <!--
                                <a href="http://localhost/electromatic/public/Vista-Servicios" class="nav-item nav-link">SERVICIOS</a>
                                -->
                                <div class="nav-item dropdown">
                                    <a href="http://localhost/electromatic/public/Vista-Servicios" class="nav-link dropdown-toggle" data-toggle="dropdown">SERVICIOS</a>
                                    <div class="dropdown-menu">
                                        <a href="http://localhost/electromatic/public/1/Vista-Servicio-Elemento" class="dropdown-item">Grupos ELECTROGENOS</a>
                                        <a href="http://localhost/electromatic/public/3/Vista-Servicio-Elemento" class="dropdown-item">Auditoria energetica</a>
                                        <a href="http://localhost/electromatic/public/2/Vista-Servicio-Elemento" class="dropdown-item">UPS</a>
                                        <a href="http://localhost/electromatic/public/4/Vista-Servicio-Elemento" class="dropdown-item">Pozos de puesta a tierra</a> 
                                    </div>
                                </div>
                                <!-- <a href="http://localhost/electromatic/public/Vista-Repuestos" class="nav-item nav-link">REPUESTOS</a> -->
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SUMINISTROS</a>
                                    <div class="dropdown-menu">
                                        <a href="http://localhost/electromatic/public/Vista-Repuestos" class="dropdown-item">REPUESTOS</a>
                                        <a href="http://localhost/electromatic/public/Vista-Grupos" class="dropdown-item">GRUPOS ELECTROGENOS</a>
                                        <a href="http://localhost/electromatic/public/Vista-Pozos" class="dropdown-item">POZOS DE PUESTA A TIERRA</a>
                                        <a href="http://localhost/electromatic/public/Vista-UPS" class="dropdown-item">UPS</a>
                                        <a href="http://localhost/electromatic/public/Vista-Capacitaciones" class="dropdown-item">CAPACITACIONES Y CURSOS</a>
                                    </div>
                                </div>
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





            <!-- Single Post Start-->
            <div class="single">
                <div class="container">
                    <div class="row">
                    <!-- Elementos de la zona de la izquierda -->
                        <div class="col-lg-8">

                                    <!-- Elementos de izquierda -->
                                        <!-- Service-detalle Start -->
                                        <div class="service">
                                            <div class="container">
                                                <div class="section-header text-center">
                                                    <h2 style="color: black;">Datos del Grupo</h2> <br>
                                                </div>

                                                <div class="card text-center">
                                                        <div class="card-body">
                                                                <div class="sidebar">
                                                                    <div class="sidebar-widget wow fadeInUp">
                                                                        <h2 class="widget-title" style=" text-align: left; color: black;"><b>{{ $pozo->titulo_pozo }}</b></h2>
                                                                    </div>
                                                                </div>
                                                           
                                                            
                                                            <br></br>

                                                            <img src="{{asset('storage').'/'.$pozo->img_uno}}" width="450" height="250">

                                                            <div class="card text-center">
                                                                    <div class="card-body">
                                                                        <h5 style="color: black; text-align: left;">Descripcion:</h5>
                                                                        <p class="card-text">{{ $pozo->descripcion_pozo }}</p>
                                                                        <h5 style="color: black; text-align: left;">Costo: <span class="card-text">S/{{ $pozo->precio }}</span> </h5>
                                                    
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Service Start -->
                                        <div class="service">
                                            <div class="container">
                                                <div class="section-header text-center">
                                                    <h2 style="color: black;">Galeria</h2>
                                                </div>

                                                <div class="row">
                                                    <!-- Imagen 2 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                                        <div class="service-item">
                                                            <div class="service-img">
                                                                <img src="{{asset('storage').'/'.$pozo->img_dos}}" width="100px" height="200px" alt="Image">
                                                            </div>
                                                            <div class="service-text">
                                                                <h3 style="text-align: center;">Pozo</h3>
                                                                <a class="btn" href="{{asset('storage').'/'.$pozo->img_dos}}" data-lightbox="service">+</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Imagen 3 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                                        <div class="service-item">
                                                            <div class="service-img">
                                                                <img src="{{asset('storage').'/'.$pozo->img_tres}}" width="100px" height="200px" alt="Image">
                                                            </div>
                                                            <div class="service-text">
                                                                <h3 style="text-align: center;">Pozo </h3>
                                                                <a class="btn" href="{{asset('storage').'/'.$pozo->img_tres}}" data-lightbox="service">+</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Imagen 4 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                                        <div class="service-item">
                                                            <div class="service-img">
                                                                <img src="{{asset('storage').'/'.$pozo->img_cuatro}}" width="100px" height="200px" alt="Image">
                                                            </div>
                                                            <div class="service-text">
                                                                <h3 style="text-align: center;">Pozo </h3>
                                                                <a class="btn" href="{{asset('storage').'/'.$pozo->img_cuatro}}" data-lightbox="service">+</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Imagen 5 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                                        <div class="service-item">
                                                            <div class="service-img">
                                                                <img src="{{asset('storage').'/'.$pozo->img_cinco}}" width="100px" height="200px" alt="Image">
                                                            </div>
                                                            <div class="service-text">
                                                                <h3 style="text-align: center;">Pozo </h3>
                                                                <a class="btn" href="{{asset('storage').'/'.$pozo->img_cinco}}" data-lightbox="service">+</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Imagen 6 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                                        <div class="service-item">
                                                            <div class="service-img">
                                                                <img src="{{asset('storage').'/'.$pozo->img_seis}}" width="100px" height="200px" alt="Image">
                                                            </div>
                                                            <div class="service-text">
                                                                <h3 style="text-align: center;">Pozo </h3>
                                                                <a class="btn" href="{{asset('storage').'/'.$pozo->img_seis}}" data-lightbox="service">+</a>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Imagen 6 -->
                                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                                        <div class="service-item">
                                                            <div class="service-img">
                                                                <img src="{{asset('storage').'/'.$pozo->img_siete}}" width="100px" height="200px" alt="Image">
                                                            </div>
                                                            <div class="service-text">
                                                                <h3 style="text-align: center;">Pozo</h3>
                                                                <a class="btn" href="{{asset('storage').'/'.$pozo->img_siete}}" data-lightbox="service">+</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                                
                                                </div>
                                        </div>
                                        <!-- Service End -->

                        </div>
                    <!-- Fin de Elementos de la zona de la izquierda -->

                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 style="color: black;" class="widget-title">CONTACTO</h2>
                                </div>

                                <img class="sticky" src="https://as01.epimg.net/meristation/imagenes/2020/03/06/betech/1583503603_543698_1583504166_noticia_normal_recorte1.jpg" style="position: fixed;" width="450px" height="440px" alt="Responsive image">
                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Post End-->   
















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
                        <h2>Ubicanos</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d239.21680939087483!2d-71.53906100252811!3d-16.400992816915345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5684292ea9%3A0x8745faeb5ca5bd33!2sELECTROMATIC%20INDUSTRIAL%20S.R.L.!5e0!3m2!1ses-419!2spe!4v1610986894827!5m2!1ses-419!2spe" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>

                        <div class="col-md-2 col-lg-1">
                            
                        </div>
                        <div class="col-md-2 col-lg-1">
                            
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Nuestros Sitios</h2>
                                <p>
                                    <b>Intranet</b>, destinado a nuestros clientes, <a style="color: white;" href="http://intranet.electromaticindustrial.com/">Ir al sitio</a>
                                </p>
                                <br>
                                <p>
                                    <b>Grupos electrogenos</b>, <a style="color: white;" href="http://gruposelectrogenosei.com/">Ir al sitio</a>
                                </p>
                                
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container footer-menu">
                    <h4><b>Nuestras redes sociales</b></h4>
                    <div class="f-menu">
                        <a href=""><img src="https://assets.stickpng.com/images/584ac2d03ac3a570f94a666d.png" width="35" height="35" ></a>
                        <a></a>
                        <a></a>
                        <a href=""><img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c53e.png" width="55" height="55"></a> 
                        <a></a>
                        <a></a>
                        <a href=""><img src="https://cdn.icon-icons.com/icons2/195/PNG/256/YouTube_23392.png" width="50" height="50"></a>
                        <a></a>
                        <a></a>
                        <a href=""><img src="https://revistaitnow.com/wp-content/uploads/2020/03/LinkedIn_logo_initials.png" width="35" height="35"></a>
                        <!-- 48*48 -->
                    </div>
                </div>
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="#" style="color: white;">ELECTROMATIC INDUSTRIAL</a></p>
                        </div>
                        <div class="col-md-6">

                            <!-- Contador de visitas -->
                            <center><a href="http://www.websmultimedia.com/contador-de-visitas-gratis" title="Contador De Visitas Gratis">
                            <img style="border: 0px solid; display: inline;" alt="contador de visitas" src="http://www.websmultimedia.com/contador-de-visitas.php?id=289448"></a><br><a href='http://www.websmultimedia.com/contador-de-visitas-gratis'></a><br><a href='http://www.websmultimedia.com/diseno-logotipos'></a></center>
                            <!-- Fin Contador de visitas -->


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
