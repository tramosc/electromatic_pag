<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CONTACTO - ELECTROMATIC INDUSTRIAL</title>
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
                                            <a href="http://localhost/electromatic/public/#contactos">Cotizar</a>
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

    <!-- referencia
    https://www.youtube.com/watch?v=okmsJ8Y-w1c
     -->
            <br>
            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container" >
                    <h3>Contáctenos</h3>
                        <br>
                        <div class="justify-content-center align-items-center">
                            <form style="background-color: #f8f8f8; padding: 30px;" action="enviarcorreo.php" method="POST" enctype="multipart/form-data" class=" align-items-center">
                                    
                                <div class="form-row">
                                    <div class="col-6">
                                        <label style="color: black;" for="nombres">Nombre Completo</label>
                                            <input type="text" class="form-control" name="nombres" id="nombres" required>
                                    </div>
                                    
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label style="color: black;" for="empresa">Empresa</label>
                                            <input type="text" class="form-control" name="empresa" id="empresa" required>
                                    </div>
                                    <div class="col-3">
                                        <label style="color: black;" for="ruc">Ruc de la empresa</label>
                                            <input type="number" class="form-control" name="ruc" id="ruc" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-4">
                                        <label style="color: black;" for="email">Correo Electronico</label>
                                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="col-3">
                                        <label style="color: black;" for="telefono">Telefono</label>
                                            <input type="number" class="form-control" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" minlength="6" maxlength="9"   name="telefono" id="telefono" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-3">
                                        <label style="color: black;" for="tipo">Tipo de cliente</label>
                                            <select class="form-control" name="tipo" id="tipo" required>
                                            <option>Seleccione...</option>
                                            <option name="tipo" id="tipo">Almacén</option>
                                            <option name="tipo" id="tipo">Alquilador</option>
                                            <option name="tipo" id="tipo">Cliente final</option>
                                            <option name="tipo" id="tipo">Constructora</option>
                                            <option name="tipo" id="tipo">Distribuidor</option>
                                            <option name="tipo" id="tipo">EPC</option>
                                            <option name="tipo" id="tipo">Gran cuenta</option>
                                            <option name="tipo" id="tipo">Ingeniería</option>
                                            <option name="tipo" id="tipo">Instalador Eléctrico</option>
                                            <option name="tipo" id="tipo">Otros</option>
                                            <option name="tipo" id="tipo">Particular</option>
                                            </select>
                                    </div>

                                    <div class="col-3">
                                        <label style="color: black;" for="lugar">Lugar de la instalacion</label>
                                            <input type="text" class="form-control" name="lugar" id="lugar" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-sm-4">
                                        <label style="color: black;" for="potencia">Indíquenos la potencia del equipo (kVA)</label>
                                            <input type="text" class="form-control" name="potencia" id="potencia" required>
                                    </div>
                                </div>
                                <br>
                                <div class="form-row">
                                    <div class="col-5">
                                        <label style="color: black;" for="motivo">¿Qué necesita?</label>
                                            <select class="form-control" name="motivo" id="motivo" required>
                                                <option value="">Seleccione...</option>
                                                <option name="motivo" id="motivo">Compra de un grupo electrógeno</option>
                                                <option name="motivo" id="motivo">Alquiler de un grupo electrógeno</option>
                                                <option name="motivo" id="motivo">Mantenimiento de un grupo electrógeno</option>
                                            </select>
                                    </div>
                                </div>
                                    <br>
                                <div class="form-row">
                                    <div class="col-5">
                                        <label style="color: black;" for="mensaje">Otros detalles</label>
                                        <textarea class="form-control" name="mensaje" id="mensaje" required rows="3"></textarea>
                                    </div>
                                </div>

                                <div class="form-group form-check required">
                                    <input type="checkbox" class="form-check-input" required id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1" style="color: black;"><b>Acepto el uso de mis datos personales.</b></label>
                                </div>

                                <button type="submit" onclick="return confirm('¿Desea Enviar sus datos?');" class="btn btn-success btn-lg btn-block">Enviar datos</button>

            
                            </form>
                        </div>
                    
                </div>
            </div>
            <!-- About End -->
        <br>



<!-- https://pruebahostingaom.000webhostapp.com/index.html 
    https://files.000webhost.com/
 -->
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
