<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>BLOG - ELECTROMATIC</title>
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
                                        <a href="http://localhost/electromatic/public/1/Vista-Servicio-Elemento" class="dropdown-item">Grupos ELECTROGENOS</a>
                                        <a href="http://localhost/electromatic/public/2/Vista-Servicio-Elemento" class="dropdown-item">Auditoria energetica</a>
                                        <a href="http://localhost/electromatic/public/3/Vista-Servicio-Elemento" class="dropdown-item">UPS</a>
                                        <a href="http://localhost/electromatic/public/4/Vista-Servicio-Elemento" class="dropdown-item">Pozos de puesta a tierra</a> 
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
                                        <a href="http://localhost/electromatic/public/Vista-Capacitaciones" class="dropdown-item">CAPACITACIONES Y CURSOS</a>
                                    </div>
                                </div>
                                <a href="http://localhost/electromatic/public/Vista-Manuales" class="nav-item nav-link">MANUALES</a>
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

        <style>
            .blog-item {
                background: #f1f1f1;
                padding: 20px;
            }
            .image-blog img{
                padding: 0 !important;
                width: 100%;
                margin: 0 !important;
                opacity: 1;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
                -moz-opacity: 1;
                -khtml-opacity: 1;
                -webkit-transition: all 150ms ease-in-out;
                -moz-transition: all 150ms ease-in-out;
                -o-transition: all 150ms ease-in-out;
                -ms-transition: all 150ms ease-in-out;
                transition: all 150ms ease-in-out;
            }
            .image-blog img:hover{
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
                -moz-opacity: 0.8;
                -khtml-opacity: 0.8;
                opacity: 0.8;
            }
            .blog-item .meta-info-blog{
                margin-top: 25px;
                padding: 0;
                text-transform: uppercase;
                font-size: 12px;
                font-weight: 300;
            }
            .meta-info-blog > span {
                display: inline-block;
                padding-right: 14px;
                color: #777;
            }
            .meta-info-blog > span > a {
                color: #007939;
            }
            .meta-info-blog > span > a:hover {
                color: #4babb1;
            }
            .blog-title > h2{
                margin: 15px 0;
                padding: 0px;
            }
            .blog-title a {
                font-size: 18px;
                line-height: 25px;
                font-weight: 500;
                color: #555;
                text-transform: capitalize;
            }
            .blog-button .hover-btn-new{
                line-height: 35px;
            }
            .blog-button a.hover-btn-new::before, .blog-button a.hover-btn-new::after {
                background: #007939; 
                content: '';
                position: absolute;
                z-index: 1;
            }
            .blog-button a.hover-btn-new::after {
                background: #333333 !important;
                height: 100%;
                left: 0;
                top: 0;
                width: 100%;
            }
            .blog-button a.hover-btn-new span {
                position: relative;
                z-index: 2;
                color: #fff;
            }
            .blog-button a.hover-btn-new:hover span {
                color: #333333;
            }
            .blog-button a.hover-btn-new::before {
                height: 100%;
                left: 0;
                top: 0;
                width: 100%;
            }
            .blog-button a.hover-btn-new:hover::after {
                height: 0;
                left: 50%;
                top: 50%;
                width: 0;
            }
            .blog-button a.hover-btn-new::after {
                -webkit-transition: all 0.3s;
                -moz-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }



            .widget-categories{
                margin-bottom: 30px;
            }
            .widget-categories .widget-title{
                font-size: 18px;
                font-weight: 400;
                padding: 0px;
                margin-bottom: 15px;
                border-right: 3px solid #007939;
            }
            .widget-categories ul{
                list-style: none;
                margin: 0px;
                padding: 0px;
            }
            .widget-categories ul li{
                border-bottom: 1px solid #f2f2f2;
                font-size: 12px;
                line-height: 20px;
                padding: 8px 2px 8px 12px;
            }
            .widget-categories ul li a{
                color: #777;
                font-size: 13px;
            }
            .widget-categories ul li a:hover{
                color: #007939;
            }
            .widget-tags .widget-title{
                font-size: 18px;
                font-weight: 400;
                padding: 0px;
                margin-bottom: 15px;
                border-right: 3px solid #007939;
            }
            .widget-tags .tags{
                list-style: none;
                margin: 0px;
                padding: 0px;
            }
            .tags li {
                float: left;
                padding: 0px;
                margin: 0px 5px 5px 0px;
                list-style-type: none;
                line-height: 25px;
            }
            .tags li a {
                border: 1px solid #007939;
                color: #212121;
                text-transform: capitalize;
                float: left;
                font-size: 12px;
                padding: 3px 8px;
                -webkit-transition: all 0.2s;
                -moz-transition: all 0.2s;
                -ms-transition: all 0.2s;
                -o-transition: all 0.2s;
                transition: all 0.2s;
            }
            .tags li a:hover {
                border-color: #007939;
                background: #007939;
                color: #ffffff;
            }

        </style>
    <div id="overviews" class="section wb">
            <style>
                .contain {
                position: relative;
                }

                .center {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                font-size: 18px;
                }

            </style>

            <div class="contain">
                <img style="opacity: 0.4; height: auto; width: 100%;" src="{{asset('storage').'/'.$blog->img_portada}}" alt="Cinque Terre" width="1000" height="300">
                <div class="center">
                    <h1 style="text-align: center;">{{$blog->titulo_blog}}</h1> 
                    <br> <p style="text-align: center;"><a href="">INICIO</a> | <a>{{$blog->fecha}}</a></p></div>
            </div>
            <br>
        <div class="container">
            <div class="row"> 

                <div class="col-lg-9 blog-post-single">
                    <div class="blog-item">
						<div class="post-content">
							<div class="meta-info-blog">
								<span><i class="fa fa-calendar"></i> {{$blog->fecha}}</span>
								<span><i class="fa fa-tag"></i>  <a href="">Blog</a> </span>
							</div>
							<div class="blog-title">
								<h2>{{$blog->titulo_blog}}</h2>
							</div>
							<div class="blog-desc">
                           
								<p>{{$blog->descripcion_blog}}</p>
                                @if(($blog->parrafo1))
                                    <blockquote class="default">
                                    {{$blog->parrafo1}}
                                    </blockquote>
                                    @else
                                <!-- No hay parrafo 1 -->
                                @endif

                                @if(($blog->parrafo2))
								    <p>{{$blog->parrafo2}}</p>
                                @else
                                <!-- No hay parrafo 1 -->
                                @endif
								
							</div>	
                            <div class="image-blog">
							<img src="{{asset('storage').'/'.$blog->img_contenido}}" alt="" class="img-fluid">
						</div>						
						</div>
					</div>

                    <br></br>

                </div><!-- end col -->

                <style>
                    /* Establecemos el ancho y la altura como deseemos, elimina la perspectiva si no deseas el efecto 3D */
                    .flip-card {
                    background-color: transparent;
                    width: 300px;
                    height: 300px;
                    border: 1px solid #f1f1f1;
                    perspective: 1000px; /* Borra esta línea si no quieres el efecto 3D */
                    }
                    /* Este contenedor es necesario para colocar el anverso y el reverso */
                    .flip-card-inner {
                    position: relative;
                    width: 50%;
                    height: 50%;
                    text-align: center;
                    transition: transform 0.8s;
                    transform-style: preserve-3d;
                    }
                    /* Hace un giro horizontal cuando muevas el ratón sobre el contenedor de la caja */
                    .flip-card:hover .flip-card-inner {
                    transform: rotateY(180deg);
                    }
                    /* Coloca el anverso y el reverso */
                    .flip-card-front, .flip-card-back {
                    position: absolute;
                    width: 100%;
                    height: 100%;
                    -webkit-backface-visibility: hidden; /* Safari */
                    backface-visibility: hidden;
                    }
                    /* Estilos de la parte trasera (alternativa por si falta la imagen) */
                    .flip-card-front {
                    background-color: #bbb;
                    color: black;
                    }
                    /* Estilos de la parte trasera */
                    .flip-card-back {
                    background-color: #000;
                    color: white;
                    transform: rotateY(180deg);
                    }
                </style>
                
				<div class="col-lg-3 col-12 right-single">
                        <br></br>
                        <div class="sidebar-widget wow fadeInUp">
                                <div class="widget-tags">
                                    <h4 class="widget-title">Blogs Recientes</h4>
                                </div>
                                    <div class="row blog-page">
                                    <div style="display: none">
                    {{$contador = 0}}
                    </div>
                    @foreach($blogs as $blogpost)
                    <div style="display: none">
                        @if ($contador == 4)
                             @break
                        @else
                            {{$contador = $contador + 1}}
                        @endif
                        </div>
                        @if ($blogpost->id != $blog->id)

                           
                        
                        <style>

                            .flip-card {
                            background-color: transparent;
                            width: 300px;
                            height: 150px;
                            perspective: 1000px;
                            border-radius: 10%;
                            }

                            .flip-card-inner {
                            position: relative;
                            width: 100%;
                            height: 100%;
                            text-align: center;
                            transition: transform 0.6s;
                            transform-style: preserve-3d;
                            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                            border-radius: 10%;
                            }

                            .flip-card:hover .flip-card-inner {
                            transform: rotateY(180deg);
                            }

                            .flip-card-front, .flip-card-back {
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            -webkit-backface-visibility: hidden;
                            backface-visibility: hidden;
                            border-radius: 10%;
                            }

                            .flip-card-front {
                            background-color: #bbb;
                            color: black;
                            }

                            .flip-card-back {
                            background-color: #007939;
                            color: white;
                            transform: rotateY(180deg);

                            }
                        </style>

                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                <img src="{{asset('storage').'/'.$blogpost->img_portada}}" alt="Avatar" style="border-radius: 10%; width:280px;height:150px;">
                                </div>
                                <div class="flip-card-back">
                                <br>
                                <h3>{{$blogpost->titulo_blog}}</h3> 
                                <p>{{$blogpost->fecha}}</p>
                                <a href="{{ url('/'.$blogpost->id.'/Vista-Blog-Elemento') }}" style="color: white">ver mas</a>
                                </div>
                            </div>
                        </div>
                        
                        @else
                            @continue
                        @endif
                    @endforeach

                    </div>
                    <br>
                    <div class="sm-col-3"></div>
                    <div class="sm-col-2">
                    {{ $blogs->links() }}
                    </div>
                                </div>

                    <div class="widget-categories">
						<h3 style="color: black;" class="widget-title">Siguenos en Twitter</h3>
						<ul>
							<li>
                            
                            <a class="twitter-timeline" data-lang="es" data-width="300" data-height="400" href="https://twitter.com/electromaticind?ref_src=twsrc%5Etfw">Tweets by electromaticind</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </li>
						</ul>
					</div>
                    
				</div>

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


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
