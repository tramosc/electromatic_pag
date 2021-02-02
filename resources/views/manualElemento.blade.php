<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>MANUALES - ELECTROMATIC</title>
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
                                            <div class="container">
                                                <div class="sidebar">
                                                    <div class="sidebar-widget wow fadeInUp">
                                                        <h2 class="widget-title" style=" text-align: left; color: black;"><b>{{$manual->titulo_manual}} </b></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        <!-- Service-detalle Start -->
                                        <div class="service">
                                            <div class="container">

                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group" style="text-align: right;">
                                                                    <strong style="text-align: right; color: black;">Subido el dia:</strong>
                                                                    {{$manual->fecha}}
                                                                </div>
                                                            </div>
                                                
                                                        <div class="card-body">
                                                            <!-- Zona de elemento descripcion -->
                                                            @if (($manual->descripcion))
                                                                        <div class="container">
                                                                                    <div class="card text-center">
                                                                                        <div class="card-body">
                                                                                            <h5 style="color: black; text-align: left;">DESCRIPCION DEL MANUAL:</h5>
                                                                                        
                                                                                            <p class="card-text">{{ $manual->descripcion }}</p>
                                                                                        </div>
                                                                                    </div>
                                                                            <br>
                                                                        </div>
                                                            @else
                                                                <!-- mensaje de que no hay descripcion--->
                                                            @endif
                                                            <!-- Zona de elemento descripcion -->


                                                            <!-- Zona de elemento detalles -->
                                                                @if (($manual->detalles))
                                                                        <div class="container">
                                                                                    <div class="card text-center">
                                                                                        <div class="card-body">
                                                                                            <h5 style="color: black; text-align: left;">DETALLES DEL MANUAL:</h5>
                                                                                            
                                                                                            <p class="card-text">{{$manual->detalles}}</p>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                            <br>
                                                                        </div>
                                                                @else                
                                                                    <!-- mensaje de que no hay detalles--->
                                                                @endif
                                                            <!-- Zona de elemento detalles -->    


                                                                <!-- Zona de elemento referencias -->
                                                                    @if (($manual->referencias))
                                                                        <div class="container">
                                                                                    <div class="card text-center">
                                                                                        <div class="card-body">
                                                                                            <h5 style="color: black; text-align: left;">REFERENCIAS DEL MANUAL:</h5>
                                                                                            <p class="card-text">{{$manual->referencias}}</p>
                                                                                        </div>
                                                                                    </div>
                                                                            <br>
                                                                        </div>
                                                                    @else
                                                                        <!-- mensaje de que no hay referencias--->
                                                                    @endif
                                                                <!-- Fin Zona de elemento referencias -->    



                                                                <!-- Zona de elemento archivo url -->
                                                                    @if (($manual->archivo_url))
                                                                        <div class="container">
                                                                                    <div class="card text-center">
                                                                                        <div class="card-body">
                                                                                            <h5 style="color: black; text-align: left;">RECURSOS EXTRAS:</h5>
                                                                                                
                                                                                                        <div class="about-img">
                                                                                                            <a href="{{asset('storage').'/'.$manual->archivo_url}}" download><img src="{{ asset('img/pdf.png') }}" alt="Image" height="100" width="90"></a>
                                                                                                        </div>
                                                                                                        <a style="text-align: center;">Descargar recurso PDF</a>
                                                                                        </div>
                                                                                    </div>
                                                                            <br>
                                                                        </div>
                                                                    @else
                                                                        <!-- mensaje de que no hay pdf--->
                                                                    @endif
                                                                <!-- FIN de Zona de elemento archivo url -->  

                                                        </div>
                                        </div>  
                        </div>
                    </div>
                    <!-- Fin de Elementos de la zona de la izquierda -->

                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 style="color: black;" class="widget-title">CONTACTO</h2>
                                </div>

                                <img class="sticky" src="https://as01.epimg.net/meristation/imagenes/2020/03/06/betech/1583503603_543698_1583504166_noticia_normal_recorte1.jpg"  width="450px" height="440px" alt="Responsive image">
                                <br></br>
                                <div class="sidebar-widget wow fadeInUp">
                                    <h2 style="color: black;" class="widget-title">Otros</h2>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <div class="card-header">
                                        Nuestros servicios
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Grupos electrogenos</li>
                                        <li class="list-group-item">Auditoria energetica</li>
                                        <li class="list-group-item">Ups</li>
                                        <li class="list-group-item">Pozos de puesta a tierra</li>
                                    </ul>
                                </div>
                                <br></br>
                                <!--Script de facebook -->
                                    <div class="sidebar-widget wow fadeInUp">
                                        <h2 style="color: black;" class="widget-title">Siguenos en Facebook</h2>
                                    </div>
                                            <script>(function(d, s, id) {
                                                        var js, fjs = d.getElementsByTagName(s)[0];
                                                        if (d.getElementById(id)) return;
                                                        js = d.createElement(s); js.id = id;
                                                        js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7&appId=1662789413962452";
                                                        fjs.parentNode.insertBefore(js, fjs);
                                                        }(document, 'script', 'facebook-jssdk'));
                                            </script>

	                                    <div class="fb-page" data-href="https://www.facebook.com/electromaticindustrialsrl/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>	
                                <!-- Fin de script de facebook-->
                            </div>
                            
                        </div>
                    </div>
            </div>
            <!-- Single Post End-->   





 


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
