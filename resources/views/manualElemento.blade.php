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

            <!-- Single Post Start-->
            <div class="single">
                    <div class="row">
                    <!-- Elementos de la zona de la izquierda -->
                        <div class="col-lg-8">

                                    <!-- Elementos de izquierda -->
                                            <div class="container">
                                                <div class="sidebar">
                                                    <div class="sidebar-widget wow fadeInUp">
                                                        <h2 class="widget-title" style=" text-align: left; color: black;">{{$manual->titulo_manual}}</h2>
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
                                <div class="sidebar" style="background-color: #fbf9ff;">
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
                                        <h5 class="title" style="background-color: #007939 ;"> NUESTROS SERVICIOS </h5>
                                        <ul class="list-group">                    
                                                        <!-- <li style="background-color: #f8f5f0;" class="list-group-item active"><a href="?page=pozos-de-puesta-a-tierra">Pozos de puesta a tierra </a></li>-->
                                                        <li style="font-size: 20px;" class="list-group-item"><a href=""> Grupos Electrógenos </a></li>                         
                                                        <li style="font-size: 20px;" class="list-group-item"><a href=""> Pozos de puesta a tierra </a></li>
                                                        <li style="font-size: 20px;" class="list-group-item"><a href=""> UPS </a></li>
                                                        <li style="font-size: 20px;" class="list-group-item"><a href=""> Auditoria energetica </a></li>
                                        </ul>
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
                                        <br><br/>
                                    </div>



                                </div>
                                
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
