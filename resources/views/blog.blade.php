<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BLOGS - ELECTROMATIC</title>
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
                                        <a href="{{ url('/#contactos') }}">Cotizar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="{{ url('/') }}">
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
                                <a href="{{ url('/') }}" class="nav-item nav-link active">INICIO</a>
                                <a href="{{ url('/Vista-Empresa') }}" class="nav-item nav-link">NOSOTROS</a>
                                <a href="{{ url('/Vista-Servicios') }}" class="nav-item nav-link">SERVICIOS</a>
                                <a href="{{ url('/Vista-Suministros-Generales') }}" class="nav-item nav-link">SUMINISTROS</a>
                                <a href="{{ url('/Vista-Manuales') }}" class="nav-item nav-link">MANUALES</a>
                                <a href="{{ url('/Vista-Capacitaciones') }}" class="nav-item nav-link">CAPACITACIONES</a>
                                <a href="{{ url('/Vista-Blog') }}" class="nav-item nav-link">Blog</a>
                            </div>
                            <div class="ml-auto">
                                <a class="btn" href="http://intranet.electromaticindustrial.com/" target="_blank">ZONA CLIENTES</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Nav Bar End -->

             <!-- Blog Start -->
            <div class="blog">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 style="color: black;">Ultimas Actualizaciones </h2>
                    </div>

        <style>

            .thumb {
                width: 500px;
                height: 400px;
                margin: 70px auto;
                perspective: 1000px;
            }

            .thumb a {
                display: block;
                width: 100%;
                height: 100%;
                background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), 
                    url("https://www.peru.travel/Contenido/Destino/Imagen/pe/27/1.1/Principal/Plaza%20de%20Armas%20Arequipa.jpg");
                background-size: 0, cover;
                transform-style: preserve-3d;
                transition: all 0.5s;
            }

            .thumb:hover a {
                transform: rotateX(80deg);
                transform-origin: bottom;
            }
            .thumb a:after {
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 36px;
                background: inherit;
                background-size: cover, cover;
                background-position: bottom;
                transform: rotateX(90deg);
                transform-origin: bottom;
            }
            .thumb a span {
                color: white;
                text-transform: uppercase;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                font: bold 12px/36px "Open Sans";
                text-align: center;
                transform: rotateX(-89.99deg);
                transform-origin: top;
                z-index: 1;
            }
            .thumb a:before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                box-shadow: 0 0 100px 50px rgba(0, 0, 0, 0.5);
                transition: all 0.5s;
                opacity: 0.15;
                transform: rotateX(95deg) translateZ(-80px) scale(0.75);
                transform-origin: bottom;
            }

            .thumb:hover a:before {
                opacity: 1;
                box-shadow: 0 0 25px 25px rgba(0, 0, 0, 0.5);
                transform: rotateX(0) translateZ(-60px) scale(0.85);
            }
            
        </style>
                    
                    <div class="thumb" style="width: 100%;">
                        <a >
                                <span>Blogs - Electromatic </span>
                        </a>
                    </div>

                    <br></br>

                    <div class="row blog-page">
                        @foreach($blogs as $blog)
                            <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="blog-item col-lg-12" style="display: flex; flex-direction: wrap">
                                
                                    <div class="blog-img col-lg-4">
                                        <img src="{{asset('storage').'/'.$blog->img_portada}}" alt="Image">
                                    </div>
                                    <div class="col-lg-7">
                                        <p style="text-align: left;"><span style="background-color: #007939; color: white;"> Blogs-Electromatic </span></p>
                                        <p style="text-align: left;">
                                        <a>📆 {{$blog->fecha}}</a>
                                        <a>🏷️ Admin</a>
                                        </p>
                                            <a href="{{ url('/'.$blog->id.'/Vista-Blog-Elemento') }}"><h3 style="text-align: left;">{{$blog->titulo_blog}}</h3></a>
                                        <p style="text-align: justify;">{{$blog->descripcion_blog}}</p>
                                    </div>
                                </div>
                                <hr style="background-color:#007939 ;">
                            </div>
                        @endforeach
                    </div>

                    {{ $blogs->links() }}


                </div>
                
            </div>
            <!-- Blog End -->





            <!-- Postulantes Start -->
                <!-- 
                    <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                <h1 style="color: white;" >¿Le interesa trabajar con nosotros?</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                <div class="ml-auto">
                                        <a class="btn btn-secondary btn-lg" href="{{ url('postulantes/create') }}">POSTULA AQUI</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                -->
            <!-- Postulantes End -->



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
