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


            <!-- Carousel Start -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://micarrerauniversitaria.com/wp-content/uploads/2018/02/ingenieria-electrica-1.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Somos profesionales</p>
                            <h1 class="animated fadeInLeft">Para el apoyo de sus proyectos</h1>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://aptus.com.ar/wp-content/uploads/2020/04/img_738_686.jpg" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Profesionales Capacitados</p>
                            <h1 class="animated fadeInLeft">Somos una empresa enfocada en grupos electrogenos</h1> 
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://i0.wp.com/www.ms-ingenieria.com.mx/wp-content/uploads/2020/01/proveedor-de-ingenieria-electrica-industrial-en-mexico.jpg?resize=870%2C500&ssl=1" alt="Carousel Image">
                        <div class="carousel-caption">
                            <p class="animated fadeInRight">Somos de confianza</p>
                            <h1 class="animated fadeInLeft">Para el mantenimiento de sus proyectos</h1>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Carousel End -->


            <!-- Feature Start-->
            <div class="feature wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-worker"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Expertos en grupos electrogenos</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-building"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Trabajos de calidad</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-call"></i>
                                </div>
                                <div class="feature-text">
                                    <h3>Soporte de calidad</h3>
                                    <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Feature End-->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <div class="scaling-image h-100">
                                    <div class="frame h-100">
                                        <div class="feature-img-bg h-100">
                                            <img src="img/about.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Bienvenido a Electromatic industrial</p>
                                <h2 style="color: black;">8 Años de Experiencia</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                                <a class="btn" href="">Saber Mas...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Fact Start -->
            <div class="fact">
                <div class="container-fluid">
                    <div class="row counters">
                        <div class="col-md-6 fact-left wow slideInLeft">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-worker"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">109</h2>
                                        <p>Expert Workers</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-building"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">485</h2>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-address"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">789</h2>
                                        <p>Completed Projects</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                        <i class="flaticon-crane"></i>
                                    </div>
                                    <div class="fact-text">
                                        <h2 data-toggle="counter-up">890</h2>
                                        <p>Running Projects</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->

            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Un vistazo por nuestros servicios</p>
                        <h2 style="color: black;">Nuestros servicios</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                            <b>Lorem ipsum dolor sit amet?</b>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFive">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseSix" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseSeven">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseSeven" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseEight">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseNine">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseNine" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInRight" data-wow-delay="0.5s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTen">
                                            Lorem ipsum dolor sit amet?
                                        </a>
                                    </div>
                                    <div id="collapseTen" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->



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

             <!-- About Start -->
             <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Somos una empresa comprometida con el cliente</p>
                                <h2 style="color: black;">Compromiso con el cliente</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <div class="scaling-image h-100">
                                    <div class="frame h-100">
                                        <div class="feature-img-bg h-100">
                                            <img src="https://dsiservicios.com/wp-content/uploads/2015/11/ingenieros-electricos.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


             <!-- Service Start -->
             <div class="service">
                <div class="container">
                    <div class="section-header text-center">
                        <h2 style="color: black;">Galeria</h2>
                        
                    </div>
                    <div class="row">
                    @foreach($imagenesInicio as $imagenInicio)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{asset('storage').'/'.$imagenInicio->imagen_inicio}}" width="100px" height="300px" alt="Image">
                                </div>
                                <div class="service-text">
                                    <h3 style="text-align: center;">{{$imagenInicio->titulo_img}}</h3>
                                    <a class="btn" href="{{asset('storage').'/'.$imagenInicio->imagen_inicio}}" data-lightbox="service">+</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    
                </div>
                <!-- DIRECCION A POSTULANTES  
                <a href="{{ url('postulantes/create') }}" class="btn btn-danger">ir a postulantes</a>
                --->
            </div>
            <!-- Service End -->



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
