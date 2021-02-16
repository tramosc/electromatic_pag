<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>SUMINISTROS - ELECTROMATIC</title>
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

        <link rel="stylesheet" href="{{ asset('css/efectos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/vanilla-zoom/vanilla-zoom.css') }}">

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



            <!-- Single Post Start-->
            <div class="single">
                    <div class="row">
                    <!-- Elementos de la zona de la izquierda -->
                        <div class="col-lg-8">
                                    <div class="container">
                                        <div class="sidebar">
                                            <div class="sidebar-widget wow fadeInUp">
                                                <h2 class="widget-title" style=" text-align: left; color: black;"><b>{{ $suministro->titulo_suministro }}</b></h2>
                                            </div>
                                        </div>
                                    </div>
                                                                
                                    <!-- Elementos de izquierda -->
                                        <!-- Service-detalle Start -->
                                        <div class="service">
                                                        <div class="card-body">

                                                <!-- Inicio de Nuevo elemento zoom -->
                                                    <!-- Inicio -  jquery zoom -->
                                                            <link rel="stylesheet" href="{{ asset('css/smoothproducts.css') }}">
                                                            @if(($suministro->img_zoom1)||($suministro->img_zoom2)||($suministro->img_zoom3)||($suministro->img_zoom4))
                                                                <center>
                                                                    <div class="page">
                                                                            
                                                                        <div class="sp-wrap">
                                                                            @if(($suministro->img_zoom1))
                                                                                    <a href="{{asset('storage').'/'.$suministro->img_zoom1}}"><img src="{{asset('storage').'/'.$suministro->img_zoom1}}" alt=""></a>
                                                                                @else
                                                                            @endif

                                                                            @if(($suministro->img_zoom2))
                                                                                    <a href="{{asset('storage').'/'.$suministro->img_zoom2}}"><img src="{{asset('storage').'/'.$suministro->img_zoom2}}" alt=""></a>
                                                                                @else
                                                                            @endif

                                                                            @if(($suministro->img_zoom3))
                                                                                    <a href="{{asset('storage').'/'.$suministro->img_zoom3}}"><img src="{{asset('storage').'/'.$suministro->img_zoom3}}" alt=""></a>
                                                                                @else
                                                                            @endif

                                                                            @if(($suministro->img_zoom4))
                                                                                    <a href="{{asset('storage').'/'.$suministro->img_zoom4}}"><img src="{{asset('storage').'/'.$suministro->img_zoom4}}" alt=""></a>
                                                                                @else
                                                                            @endif
                                                                            
                                                                        </div>

                                                                    </div>
                                                                </center>
                                                                @else

                                                            @endif

                                                            <script type="text/javascript" src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
                                                            <script type="text/javascript" src="{{ asset('js/smoothproducts.min.js') }}"></script>
                                                            <script type="text/javascript">
                                                                /* wait for images to load */
                                                                $(window).load(function() {
                                                                    $('.sp-wrap').smoothproducts();
                                                                });
                                                            </script>
                                                    <!-- Fin -  jquery zoom -->
                                                <!-- Fin de Nuevo elemento zoom -->



                                                            <!--  Zona de zoom galeria -->
                                                                <!-- 
                                                                    @if(($suministro->img_zoom1)||($suministro->img_zoom2)||($suministro->img_zoom3)||($suministro->img_zoom4))
                                                                        <div class="container">
                                                                            <div id="my-gallery" class="vanilla-zoom">
                                                                                <div class="sidebar">
                                                                                    @if(($suministro->img_zoom1))
                                                                                            <img src="{{asset('storage').'/'.$suministro->img_zoom1}}" class="small-preview">
                                                                                        @else
                                                                                    @endif

                                                                                    @if(($suministro->img_zoom2))
                                                                                            <img src="{{asset('storage').'/'.$suministro->img_zoom2}}" class="small-preview">
                                                                                        @else
                                                                                    @endif

                                                                                    @if(($suministro->img_zoom3))
                                                                                            <img src="{{asset('storage').'/'.$suministro->img_zoom3}}" class="small-preview">
                                                                                        @else
                                                                                    @endif

                                                                                    @if(($suministro->img_zoom4))
                                                                                            <img src="{{asset('storage').'/'.$suministro->img_zoom4}}" class="small-preview">
                                                                                        @else
                                                                                    @endif
                                                                                        
                                                                                </div>
                                                                                <div class="zoomed-image"></div>
                                                                            </div>
                                                                        </div>
                                                                        @else
                                                                    @endif
                                                                    <script src="{{ asset('css/vanilla-zoom/vanilla-zoom.js') }}"></script>
                                                                        <script>
                                                                            vanillaZoom.init('#my-gallery');
                                                                            vanillaZoom.init('#my-gallery2');
                                                                        </script>
                                                                -->
                                                            <!-- Final de Zona de zoom galeria -->
                                                            <br></br>
                                                            <br></br>
                                                            <div class="card text-center">
                                                                    <div class="card-body">
                                                                        <h5 style="color: black; text-align: left;">Descripcion:</h5>
                                                                        <p class="card-text">{{ $suministro->descripcion_suministro }}</p>
                                                                        <h5 style="color: black; text-align: left;">Costo: <span class="card-text">S/{{ $suministro->precio }}</span> </h5>
                                                    
                                                            </div>
                                                        </div>
                                        </div>

                                        

                        </div>
                    <!-- Fin de Elementos de la zona de la izquierda -->
                        </div>
                    <div class="col-lg-4">
                            
                                            <br>
                                
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
                                                    <!-- <li style="background-color: #f8f5f0;" class="list-group-item active"><a href="?page=pozos-de-puesta-a-tierra">Pozos de puesta a tierra </a></li>-->
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
                                </div>

                            
                            
                        </div>
                    </div>
            </div>
        </div>
            </div>
            <!-- Single Post End-->   

            <!-- Service Start -->
            <div class="service">
                <div class="container">
                    @if(($suministro->img_dos)||($suministro->img_tres)||($suministro->img_cuatro)||($suministro->img_cinco)||($suministro->img_seis)||($suministro->img_siete))
                        <div class="section-header text-center">
                            <h2 style="color: black;">Galeria</h2>
                        </div>

                        <div class="row">
                            @if (($suministro->img_dos))
                                <!-- Imagen 2 -->
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$suministro->img_dos}}" width="100px" height="250px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">suministro</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$suministro->img_dos}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <!-- mensaje de que no hay descripcion--->
                            @endif

                            @if (($suministro->img_tres))
                                <!-- Imagen 3 -->
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$suministro->img_tres}}" width="100px" height="250px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">suministro </h3>
                                            <a class="btn" href="{{asset('storage').'/'.$suministro->img_tres}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <!-- mensaje de que no hay descripcion--->
                            @endif

                            @if (($suministro->img_cuatro))
                                <!-- Imagen 4 -->
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$suministro->img_cuatro}}" width="100px" height="250px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">suministro </h3>
                                            <a class="btn" href="{{asset('storage').'/'.$suministro->img_cuatro}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <!-- mensaje de que no hay descripcion--->
                            @endif

                            @if (($suministro->img_cinco))
                                <!-- Imagen 5 -->
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$suministro->img_cinco}}" width="100px" height="250px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">suministro </h3>
                                            <a class="btn" href="{{asset('storage').'/'.$suministro->img_cinco}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <!-- mensaje de que no hay descripcion--->
                            @endif

                            @if (($suministro->img_seis))
                                <!-- Imagen 6 -->
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$suministro->img_seis}}" width="100px" height="250px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">suministro </h3>
                                            <a class="btn" href="{{asset('storage').'/'.$suministro->img_seis}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <!-- mensaje de que no hay descripcion--->
                            @endif

                            @if (($suministro->img_siete))
                                <!-- Imagen 6 -->
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"> 
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$suministro->img_siete}}" width="100px" height="250px" alt="Image">
                                        </div>
                                        <div class="service-text">
                                            <h3 style="text-align: center;">suministro</h3>
                                            <a class="btn" href="{{asset('storage').'/'.$suministro->img_siete}}" data-lightbox="service">+</a>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <!-- mensaje de que no hay descripcion--->
                            @endif
                        </div>
                        @else
                    @endif
                </div>
                    
                    </div>
            </div>
            <!-- Service End -->

            <!-- Team Start -->
            <div class="team">
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
                                </div>

                                <div class="col-sm-5">
                                    <div class="footer-contact">
                                        <h2><i class="fa fa-map-marker-alt"></i> Direcciones</h2>
                                            <div class="footer-link">
                                            <a style="color: white;">Calle Consuelo 307-A - Cercado Arequipa</a>
                                            <a style="color: white;">Calle Praga 232 Santa Rosa - M. Melgar</a>
                                            </div>
        
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
        <!--<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>-->
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
