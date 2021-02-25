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
                                            <a href="http://localhost/electromatic/public/#contactos">Cotizar</a>
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
                <img style="opacity: 0.4; height: auto; width: 100%;" src="{{asset('storage').'/'.$blog->img_portada}}" alt="Cinque Terre">
                <div class="center">
                    <h1 style="text-align: center;">{{$blog->titulo_blog}}</h1> 
                    <br> <p style="text-align: center;"><a href="">INICIO</a> | <a>{{$blog->fecha}}</a></p>
                </div>
            </div>
            <br>
        <div class="container">
            <div class="row"> 

                <div class="col-lg-8 blog-post-single">
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
                                    <!-- No hay parrafo 2 -->
                                @endif

                                @if(($blog->parrafo3))
                                        <p>{{$blog->parrafo3}}</p>
                                    @else
                                    <!-- No hay parrafo 3 -->
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

                                <div class="col-md-14">
                                    <h5 class="title" style="background-color: #007939 ;"> BLOGS RECIENTES </h5>
                                    
                                    
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
                                    width: 350px;
                                    height: 150px;
                                    perspective: 1000px;
                                    border-radius: 10%;
                                    }

                                    .flip-card-inner {
                                    position: relative;
                                    width: 100%;
                                    height: 100%;
                                    text-align: center;
                                    align-items: center;
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
                            <center>
                                <div class="flip-card">
                                    
                                    <div class="flip-card-inner">
                                        <div class="flip-card-front">
                                        <img src="{{asset('storage').'/'.$blogpost->img_portada}}" alt="Avatar" style="border-radius: 10%; width:350px;height:150px;">
                                        </div>
                                        <div class="flip-card-back">
                                        <br>
                                        <h3><a href="{{ url('/'.$blogpost->id.'/Vista-Blog-Elemento') }}" style="color: white">{{$blogpost->titulo_blog}}</a></h3> 
                                        <p>{{$blogpost->fecha}}</p>
                                        <a href="{{ url('/'.$blogpost->id.'/Vista-Blog-Elemento') }}" style="color: white">Ver mas...</a>
                                        </div>
                                    </div>
                                    
                                </div>
                            </center>
                                
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

                                    <br>

                                    
                                    <style>
                                        div.sticky {
                                        position: -webkit-sticky;
                                        position: sticky;
                                        top: 0;
                                        padding: 5px;
                                        }
                                    </style>
                                       
                                    <div class="sticky"> <!--   -->
                                                        <br>
                                                    <br></br>
                                        <div id="fb-root"><h5 class="title"> SIGUENOS EN TWITTER </h5></div>
                                            <div class="card">
                                                <div class="card-body"> 
                                                <a class="twitter-timeline" data-width="350" data-height="450" data-theme="light" href="https://twitter.com/electromaticind?ref_src=twsrc%5Etfw">Tweets by electromaticind</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                                </div>
                                            </div>
                                
                                                        <br></br>
                                        </div>

                                    </div>
                                    
                                    <br><br/>
                </div>


            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->


            <!-- Team Start -->
                <div id="contactos" class="team">
                    <div class="team-item">

                    <!-- Footer Start -->
                        <div class="footer wow fadeIn" data-wow-delay="0.3s">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="footer-link">
                                            <h2><i class="fas fa-phone-alt"></i> Telefonos</h2>		
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
