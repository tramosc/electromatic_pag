<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>ELECTROMATIC INDUSTRIAL</title>
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

        <!-- Css para el mostrador de imagenes con titulo -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style2L.css') }}" />

        <!-- Css para el mostrador de Iconos con titulo -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style8.css') }}" />
        
            
    </head>

    <body>
        
        <div class="wrapper">
        
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="logo">
                                <a href="{{ url('/') }}">
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
                                        <a href="#contactos">Cotizar</a>
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
    

            <!---  VIDEO - ZONA -->

            <section class="showcase">
                <div class="video-container">
                    <video autoplay muted loop>
                        <source src="{{ asset('img/video480.mp4') }}" type="video/mp4">
                </video>
                </div>
                <!-- 
                <div class="content">
                    <h1 style="color: white;"><b>BIENVENIDO  A ELECTROMATIC INDUSTRIAL</b></h1>
                    <h3 style="color: white;">CONFIANZA QUE DA CALIDAD</h3>
                </div>
-->
            </section>


<br></br>
<style>
    .services-area1 .single-service-cap{
        overflow:hidden
        }
    .services-area1 .single-service-cap .service-img{
        overflow:hidden
        }
    .services-area1 .single-service-cap .service-img img{
        width:100%;transform:scale(1);
        -webkit-transition:all .5s ease-out 0s;
        -moz-transition:all .5s ease-out 0s;
        -ms-transition:all .5s ease-out 0s;
        -o-transition:all .5s ease-out 0s;
        transition:all .5s ease-out 0s
        }
    .services-area1 .single-service-cap .service-cap{
        padding:20px 30px 20px 30px;background:#fcfdff
        }
    .services-area1 .single-service-cap .service-cap h4{
        margin-bottom:35px
        }
    .services-area1 .single-service-cap .service-cap h4 a{
        color:#0e132a;
        font-size:24px;
        font-weight:700
        }
        @media (max-width: 575px){
            .services-area1 .single-service-cap .service-cap h4 a{
                font-size:18px}
                }
    .services-area1 .single-service-cap .service-cap h4 a:hover{
        color:#007939 
        }
    .services-area1 .single-service-cap .service-icon img{
        width:100%
        }
</style>



        <!-- Services Area Start -->
            
                <div class="services-area1 section-padding30">
                    <div class="container">
                        
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-tittle mb-55">
                                <div class="section-header text-center">
                                        <h2 style="color: black;">Nuestros Servicios</h2>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            @foreach($servicios as $servicio)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="single-service-cap mb-30">
                                        <div class="service-img">
                                            <img src="{{asset('storage').'/'.$servicio->img_portada}}" alt="Image">
                                        </div>
                                        <div class="service-cap">
                                            <h4><a href="{{ url('/'.$servicio->id.'/Vista-Servicio-Elemento') }}">{{$servicio->titulo_servicios}}</a></h4>
                                            <p>{{$servicio->descripcion}}</p>
                                            <a href="{{ url('/'.$servicio->id.'/Vista-Servicio-Elemento') }}" class="more-btn">Ver Mas...<i class="ti-plus"></i></a>
                                        </div>
                                        <div class="service-icon">
                                            <hr></hr>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
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
                                            <center><a href="{{ url('/Vista-Servicios') }}" class="button"><span style="color: white;">Ver Todos Los servicios</span></a></center>
                    </div>
                </div>
                
        <!-- Services Area End -->



            <br></br>
            <br></br>
            <!-- Feature Start-->
                    <div class="section-header text-center">
                        <h2 style="color: black;">Sectores que Cubrimos</h2>
                    </div>
                <div class="feature wow fadeInUp" data-wow-delay="0.1s" style="width:100%; height: 100%;">
                    
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                    
                                        <ul class="ca-menu">
                                            <li>
                                                
                                                    <span class="ca-icon">
                                                        <img src="{{ asset('/img/industria_img.png') }}" height="90" width="90">
                                                    </span>
                                                    <div class="ca-content">
                                                        <h2  class="ca-main">EMPRESAS DEL SECTOR INDUSTRIAL</h2>
                                                    </div>
                                        
                                            </li>
                                            <li>
                                                
                                                    <span class="ca-icon">
                                                        <img src="{{ asset('/img/banco_img.png') }}" height="90" width="90">
                                                    </span>
                                                    <div class="ca-content">
                                                        <h2 class="ca-main">BANCOS Y FINANCIERAS </h2>
                                                    </div>
                                                
                                            </li>
                                            <li>
                                    
                                                    <span class="ca-icon">
                                                        <img src="{{ asset('/img/edificios-hospitalarios_img.png') }}" height="90" width="90">
                                                    </span>
                                                    <div class="ca-content">
                                                        <h2  class="ca-main">HOSPITALES <br>Y CLINICAS</h2>
                                                    </div>
                                                
                                            </li>
                                        </ul>
                                    
                            </div>
                        </div>
                    
                </div>
            <!-- Feature End-->
            <br><br>
            <!-- Testimonial Start -->
            <div class="testimonial wow fadeIn" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-1.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-2.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-3.jpg" alt="Testimonial"></div>
                                <div class="slider-nav"><img src="img/testimonial-4.jpg" alt="Testimonial"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                                <div class="slider-item">
                                    <h3>Customer Name</h3>
                                    <h4>profession</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->
<br></br>




        <section id="contactos" class="ftco-section ftco-no-pt ftco-no-pb contact-section">

                    <div class="section-header text-center">
                        <h2 style="color: black;">Contáctanos</h2>
                    </div>

			<div class="container">
				<div class="row d-flex align-items-stretch no-gutters">
					<div class="col-md-6 p-4 p-md-5 order-md-last bg-light" style="background-color: #007939 !important;">
                        <form action="enviarcorreo.php">
                            <div class="form-group">
                                <input name="nombre" type="text" class="form-control" placeholder="Tu Nombre" required>
                            </div>
                            <div class="form-group">
                                <input name="telefono" type="text" class="form-control" placeholder="Tu Telefono" required>
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Tu Email" required>
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="motivo" id="motivo" required>
                                    <option value="">Mencione su motivo...</option>
                                    <option name="motivo" id="motivo">Compra de un grupo electrógeno</option>
                                    <option name="motivo" id="motivo">Alquiler de un grupo electrógeno</option>
                                    <option name="motivo" id="motivo">Mantenimiento de un grupo electrógeno</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <textarea name="mensaje" id="" cols="30" rows="7" class="form-control" required placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group">
                                <input style="border-color: white;" type="submit" value="Enviar" class="btn btn-success py-3 px-5">
                            </div>
                        </form>
					</div>
					<div class="col-md-6 d-flex align-items-stretch">
						
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.4696016253074!2d-71.54112898513709!3d-16.400959688676743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424a5684292ea9%3A0x8745faeb5ca5bd33!2sELECTROMATIC%20INDUSTRIAL%20S.R.L.!5e0!3m2!1ses-419!2spe!4v1614279308893!5m2!1ses-419!2spe" width="600" height="580" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        
					</div>
				</div>
			</div>
		</section>


    <br></br>

            <!-- Service Start -->
                <!-- 
                <div class="service">
                    
                        <div class="col-sm-6">
                            <div class="justify-content-center align-items-center">
                                <div class="section-header text-center">
                                    <h2 style="color: black;">Contactenos</h2>
                                </div>
                                        <form style="background-color: #f8f8f8; padding: 30px;" action="enviarcorreo.php" method="POST" enctype="multipart/form-data" class=" align-items-center">
                                                
                                            
                                                <div class="col-7">
                                                    <label style="color: black;" for="nombres">Nombre Completo</label>
                                                        <input type="text" class="form-control" name="nombres" id="nombres" required>
                                                </div>
                                                
                                                <div class="col-5">
                                                    <label style="color: black;" for="empresa">Empresa</label>
                                                        <input type="text" class="form-control" name="empresa" id="empresa" required>
                                                </div>
                                                
                                            
                                            
                                                <div class="col-8">
                                                    <label style="color: black;" for="email">Correo Electronico</label>
                                                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                                                </div>
                                                <div class="col-5">
                                                    <label style="color: black;" for="telefono">Telefono</label>
                                                        <input type="number" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="6" maxlength="9"   name="telefono" id="telefono" required>
                                                </div>
                                            
                                            <br>
                                            
                                                <div class="col-7">
                                                    <label style="color: black;" for="motivo">¿Qué necesita?</label>
                                                        <select class="form-control" name="motivo" id="motivo" required>
                                                            <option value="">Seleccione...</option>
                                                            <option name="motivo" id="motivo">Compra de un grupo electrógeno</option>
                                                            <option name="motivo" id="motivo">Alquiler de un grupo electrógeno</option>
                                                            <option name="motivo" id="motivo">Mantenimiento de un grupo electrógeno</option>
                                                        </select>
                                                </div>
                                            
                                                <br>
                                            
                                                <div class="col-10">
                                                    <label style="color: black;" for="mensaje">Otros detalles</label>
                                                    <textarea class="form-control" name="mensaje" id="mensaje" required rows="3"></textarea>
                                                </div>
                                            

                                            <div class="form-group form-check required">
                                                <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1" style="color: black;"><b>Acepto el uso de mis datos personales.</b></label>
                                            </div>
                                            <div class="col-sm-3" > 
                                                <a type="submit" onclick="return confirm('¿Desea Enviar sus datos?');" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Enviar</a>
                                            </div>
                                        </form>
                            </div>
                        </div>
                    
                </div>
                -->
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