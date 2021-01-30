<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>EMPRESA - ELECTROMATIC</title>
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
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style2.css') }}" />

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
                                <img src="{{ asset('img/logo1.png') }}" width="350" height="110" alt="Image" align="right">
                                    <!-- <img src="img/logo.jpg" alt="Logo"> -->
                                
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
            
            
            <!-- Page Header Start -->
            <!-- 
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2 style="color: white;">EMPRESA</h2>
                        </div>
                        <div class="col-12">
                            <a href="">Inicio</a>
                            <a href="">Empresa</a>
                        </div>
                    </div>
                </div>
            </div>
            -->
            <!-- Page Header End -->

            <br></br>
            

            <section id="services" class="services section-bg">
                <div class="container">
                  <div class="container">
                    <div class="portfolio-description">
                    <div class="section-header text-left">
                    <p style="text-align: center;">Empresa Electromatic</p>
                    <h1 style="color: black; text-align:center"><b>NUESTRA HISTORIA</b></h1>
                    </div>
                      
                      <center><iframe width="560" height="315" src="https://www.youtube.com/embed/N6FTAgmxnFk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                    </div>
                </div>
          </section><!-- End Services Section -->

          <br></br>


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Sobre Electromatic industrial</p>
                                <h2 style="color: black;">¿Quienes somos?</h2>
                            </div>
                            <div class="about-text">
                                <p>Electromatic Industrial está orientada a entregar un servicio integral en el Suministro, instalación y mantenimiento de grupos electrógenos,cableado estructurado, pozos de puesta a tierra, electrobombas, aire acondicionado, UPS, automatización industrial, atendiendo y proporcionando soluciones de ingeniería en diversos sectores productivos, bajo estándares nacionales e internacionales.</p>
                            </div>
                        </div>
                        <!-- Nueva zona de imagenes con efecto css -->
                            <div class="col-lg-5 col-md-6">
                                        <div class="hs-wrapper">
                                            <img src="{{ asset('img/img_modelos/1.jpg') }}" alt="image01"/>
                                            <img src="{{ asset('img/img_modelos/2.jpg') }}" alt="image02"/>
                                            <img src="{{ asset('img/img_modelos/3.jpg') }}" alt="image03"/>
                                            <img src="{{ asset('img/img_modelos/4.jpg') }}" alt="image04"/>
                                            <img src="{{ asset('img/img_modelos/5.jpg') }}" alt="image05"/>
                                            <img src="{{ asset('img/img_modelos/6.jpg') }}" alt="image06"/>
                                            <img src="{{ asset('img/img_modelos/7.jpg') }}" alt="image07"/>
                                            <img src="{{ asset('img/img_modelos/8.jpg') }}" alt="image08"/>

                                                <div class="hs-titles">
                                                    <span style="text-align: center;">Numero 1</span>
                                                    <span style="text-align: center;">Numero 2</span>
                                                    <span style="text-align: center;">Numero 3</span>
                                                    <span style="text-align: center;">Numero 4</span>
                                                    <span style="text-align: center;">Numero 5</span>
                                                    <span style="text-align: center;">Numero 6</span>
                                                    <span style="text-align: center;">Numero 7</span>
                                                    <span style="text-align: center;">Numero 8</span>
                                                </div>
                                        </div>

                                        <script type="text/javascript" src="{{ asset('js/modernizr.custom.04022.js') }}"></script>
                            </div>
                        <!-- Fin de Nueva zona de imagenes con efecto css -->
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
                                    <img src="{{ asset('img/garantia.png') }}" width="70px" height="70px">
                                    </div>
                                    <div class="fact-text">
                                        <h4 style="text-align: center; color: #20773A;"><b>GARANTÍA INMEJORABLE DE COSTO BENEFICIO PARA EL CLIENTE</b></h4>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                    <img src="{{ asset('img/soporte-tecnico.png') }}" width="70px" height="70px">
                                    </div>
                                    <div class="fact-text">
                                        <h4 style="text-align: center; color: #20773A;"><b>SERVICIO TECNICO 24/7</b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 fact-right wow slideInRight">
                            <div class="row">
                                <div class="col-6">
                                    <div class="fact-icon">
                                    <img src="{{ asset('img/servicio-al-cliente.png') }}" width="70px" height="70px">
                                    </div>
                                    <div class="fact-text">
                                        <h4 style="text-align: center; color: #20773A;"><b>ATENCIÓN PERSONALIZADA</b></h4>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="fact-icon">
                                    <img src="{{ asset('img/supervision.png') }}" width="70px" height="70px">
                                    </div>
                                    <div class="fact-text">
                                        <h4 style="text-align: center; color: #20773A;" ><b>MONITOREO A DISTANCIA CONSTANTE</b></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fact End -->

            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <div class="scaling-image h-100">
                                    <div class="frame h-100">
                                        <div class="feature-img-bg h-100">
                                            <img src="https://2.bp.blogspot.com/-rPodlj7D3S4/WsOrEk98MGI/AAAAAAAABxY/ZRHiAxy7J0s1-lcy0fFBds-6zAU78Z7PgCLcBGAs/s750/_Electr%25C3%25B3nica_Industrial.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <h2 style="color: black;">Mision</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                            </div>
                            <br></br>
                        </div>


    
                        <div class="col-lg-7 col-md-6">
                        <br></br>
                            <div class="section-header text-left">
                                <h2 style="color: black;">Vision</h2>
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
                                            <img src="https://ingenieromarino.com/wp-content/uploads/portada-2.jpg" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- About End -->
            
            
            
            
            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container">
                    <div class="section-header text-center">
                        <p>Valores de Electromatic</p>
                        <h2 style="color: black;">NUESTROS VALORES</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div id="accordion-1">
                                <div class="card wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne">
                                            <b>HONESTIDAD</b>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                        La transparencia, sinceridad y franqueza, son valores que actualmente el público no solamente desea para las empresas, las exige.
                                        Esto tiene que ver con usar la verdad como herramienta para ganarse la confianza y credibilidad frente al entorno.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.2s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo">
                                            <b>INNOVACION</b>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                        La innovación no solo se basa en desarrollar nuevos productos, también supone impulsar nuevos modelos de negocio, ofrecer nuevos servicios y mejorar procesos para hacer más fácil la vida de las personas. Pero sobre todo, se basa en que estos estos avances lleguen a quienes los necesitan.
                                        </div>
                                    </div>
                                </div>
                                <div class="card wow fadeInLeft" data-wow-delay="0.3s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree">
                                        <b>COMPROMISO</b>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                        Partimos de la definición del compromiso como “la capacidad que tiene el ser humano para tomar conciencia de la importancia que tiene cumplir con el desarrollo de su trabajo dentro del tiempo estipulado para ello”. Al comprometernos, ponemos al máximo nuestras capacidades para sacar adelante la tarea encomendada.
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="card wow fadeInLeft" data-wow-delay="0.4s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour">
                                            TRABAJO EN EQUIPO
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
                                            COMPROMISO
                                        </a>
                                    </div>
                                    <div id="collapseFive" class="collapse" data-parent="#accordion-1">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
-->
                            </div>
                        </div>
                        <!-- Segunda mitad-->
                        <div class="col-md-6">
                            <div id="accordion-2">
                                <div class="card wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="card-header">
                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseSix">
                                        <b>DESARROLLO DE PERSONAS</b>
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
                                        <b>TRABAJO EN EQUIPO</b>
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
                                            <b>CALIDAD</b>
                                        </a>
                                    </div>
                                    <div id="collapseEight" class="collapse" data-parent="#accordion-2">
                                        <div class="card-body">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                        </div>
                                    </div>
                                </div>
                                <!--
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
-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FAQs End -->

            <!-- ======= Clients LOGO Section ======= -->
      <section id="clients" class="clients">
        <div class="container">
          <h1 style="color: black;">NUESTROS CLIENTES</h1>
          <div class="row">
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="100">
              <img src="https://d500.epimg.net/cincodias/imagenes/2015/05/08/pyme/1431098283_691735_1431098420_noticia_normal.jpg" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="200">
              <img src="https://starteq.net/wp-content/uploads/2019/11/mcdonalds-png-logo-picture-3-1024x1001.png" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="300">
              <img src="https://us.123rf.com/450wm/netkoff/netkoff1502/netkoff150200044/36370600-colorido-juego-vector-icono-abstracto-sobre-un-fondo-blanco.jpg?ver=6" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="400">
              <img src="https://us.123rf.com/450wm/maudis60/maudis601601/maudis60160100042/49900954-vector-de-la-muestra-de-paneles-solares.jpg?ver=6" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="500">
              <img src="https://image.freepik.com/vector-gratis/logo-panel-solar_93835-52.jpg" class="img-fluid" alt="">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center" data-aos="zoom-in" data-aos-delay="600">
              <img src="https://previews.123rf.com/images/deniskolt/deniskolt1608/deniskolt160800027/61841548-logotipo-de-la-energ%C3%ADa-solar-o-icono-vector-de-la-muestra-de-paneles-solares-.jpg" class="img-fluid" alt="">
            </div>
  
          </div>
  
        </div>
      </section><!-- End Clients Section -->



            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-lg-3">
                            <div class="footer-contact">
                                <h2>Oficina de contacto</h2>
                                <table>
                                    <tr>
                                        <td><i class="fa fa-map-marker-alt"></i></td>
                                        <td></td>
                                        <td><p>Calle Consuelo 307-A - Cercado Arequipa</p></td>
                                    </tr>

                                    <tr>
                                        <td><i class="fa fa-phone-alt"></i></td>
                                        <td></td>
                                        <td><p>054-399450 - 964-770-354</p></td>
                                    </tr>

                                    <tr>
                                        <td><i class="fa fa-envelope"></i></td>
                                        <td></td>
                                        <td><p>servicios_cliente<br>@electromaticindustrial.com</p></td>
                                    </tr>
                                </table>
                                
                                
                                
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
                                <h2>INTRANET</h2>
                                <p>
                                    Solo para clientes, <a style="color: white;" href="http://intranet.electromaticindustrial.com/"><b><u>IR</u></b></a>
                                </p>
                                <br>
                                <p>
                                    Grupos electrogenos, <a style="color: white;" href="http://gruposelectrogenosei.com/"><b><u>IR</u></b></a>
                                </p>
                                
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="container footer-menu">
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
