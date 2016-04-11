<?php header('Content-Type: text/html; charset=UTF-8'); ?>
    <!DOCTYPE html>
    <html lang="es-Es">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="sitio web Bureau Veritas Alimentos">
        <meta name="author" content="motiondesign">
        <title>Bureau veritas - Food</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- flexslider css-->
        <link href="css/flexslider.css" rel="stylesheet" type="text/css">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <!--    favicon-->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    </head>
    <!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->

    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--<a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>-->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#page-top">
                            <img id="desktop" src="img/bureau_veritas_logo.jpg" alt="Bureau Veritas" />
                            <img id="movil" src="img/bureau_veritas_logo_movil.jpg" alt="Bureau Veritas" />
                            <h1>Bureau Veritas Alimentos</h1>
                        </a>
                    </div>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li>
                            <a class="page-scroll" href="#page-top">Home</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#actualidad">Actualidad</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#lineas">Lineas de Servicios</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#equipo">Nuestro Equipo</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#contacto">Contacto</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="http://www.cesmec.cl/cgi-bin/login.cgi" target="_blank">Acceso Clientes</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
                <!-- /.container -->
        </nav>

        <!-- Intro Section -->
        <section id="intro" class="intro-section">
            <!--  Inicio  flexslider-->
            <div class="flexslider-container">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="content_caption">

                                <?php include('includes/llamanos_vitrina.php'); ?>

                                    <div class="caption">
                                        <h3>Alimentos</h3>
                                        <p>
                                            Realizamos diferentes actividades de muestreo y análisis a productos utilizados como materias primas para uso general de la industria o productos terminados.
                                        </p>
                                    </div>
                            </div>

                            <img src="img/vitrinas/vitrina_1.jpg" />

                        </li>
                        <li>

                            <div class="content_caption">

                                <?php include('includes/llamanos_vitrina.php'); ?>

                                    <div class="caption">
                                        <h3 style="line-height: 30px;font-size: 2em;">
                                        red global a lo largo del mundo</h3>
                                        <p style="font-size: 1.8em;">
                                            50 laboratorios
                                            <br>de test
                                        </p>
                                    </div>
                            </div>

                            <img src="img/vitrinas/vitrina_2.jpg" />
                        </li>
                        <li>
                            <div class="content_caption">

                                <?php include('includes/llamanos_vitrina.php'); ?>

                                    <div class="caption">
                                        <h3>Muestreo y Análisis</h3>
                                        <p>
                                            Muestreo y análisis a productos utilizados como materias primas para uso general de la industria o productos terminados.
                                        </p>
                                    </div>
                            </div>
                            <img src="img/vitrinas/vitrina_3.jpg" />
                        </li>
                    </ul>
                </div>

            </div>
            <!--  cierre  flexslider-->
            <article id="llamanos">
                <div class="container">
                    <div class="row llamanos">
                        <span class="icon-iconos_Artboard20"></span>
                        <div class="col-xs-12">
                            <p class="inline">Llámanos ahora </p><a href="+56223502100"><span class="glyphicon glyphicon-earphone"></span>(+56 2) 2350 2100 </a></div>
                        <div class="col-xs-12">Escríbenos a</div>
                        <div class="col-xs-12"><a href="#"><span class="glyphicon glyphicon-envelope"></span>Consultas@bureauveritas.cl</a></div>
                        <div class="col-xs-12">O Contactanos a través de nuestro </div>
                        <div class="col-xs-12"> <a href=""><span class="glyphicon glyphicon-list-alt"></span>Formulario</a></div>
                    </div>
                </div>
            </article>

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p id="intro" class="lead">El objetivo de esta <strong>División</strong> es proporcionar a los productores, exportadores, traders, compradores, etc., un servicio integral para todos los tipos de alimentos de consumo humano y animal, abarcando los requerimientos de <strong>inspección, muestreo, análisis y certificación.</strong>
                            <div id="line"></div>
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <a id="actualidad"></a>
        <!-- Actualidad Section -->
        <section>
            <div class="container">
                <div class="row actualidad-section">
                    <div class="col-lg-12">
                        <a href="#"><span class="glyphicon glyphicon-globe"></span>Actualidad</a>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <!--tarjeta1-->
                        <div id="tarjeta" class="col-xs-12 col-sm-6 col-md-6">
                            <div class="row box-shadow">
                                <figure>
                                    <img class="lib-img-show" src="img/actualidad/actualidad_noticia01_thumb.jpg">
                                </figure>
                                <article>
                                    <h3>
                                        Bureau Veritas potencia sus servicios para la industria acuícola-pesquera
                                        <div class="lib-header-seperator"></div>
                                    </h3>
                                    <p>
                                        Actualmente, la División Alimentos de Bureau Veritas Chile posee una de las redes de laboratorios y operaciones más grande del país ...
                                        <a href="#" class="mas">
                                            <span class="ver">ver más
                                            <span class="glyphicon glyphicon-plus"></span>
                                            </span>
                                        </a>
                                    </p>
                                </article>
                            </div>
                        </div>
                        <!--fin tarjeta1-->
                        <!--tarjeta2-->
                        <div id="tarjeta" class="col-xs-12 col-sm-6 col-md-6">
                            <div class="row box-shadow">
                                <figure>
                                    <img class="lib-img-show" src="img/actualidad/actualidad_noticia01_thumb.jpg">
                                </figure>
                                <article>
                                    <h3>
                                        Bureau Veritas potencia sus servicios para la industria acuícola-pesquera
                                        <div class="lib-header-seperator"></div>
                                    </h3>
                                    <p>
                                        Actualmente, la División Alimentos de Bureau Veritas Chile posee una de las redes de laboratorios y operaciones más grande del país ...
                                        <a href="#" class="mas">
                                            <span class="ver">ver más
                                            <span class="glyphicon glyphicon-plus"></span>
                                            </span>
                                        </a>
                                    </p>
                                </article>
                            </div>
                        </div>
                        <!--fin tarjeta2-->
                        <!--tarjeta2-->
                        <div id="tarjeta" class="col-xs-12 col-sm-6 col-md-6">
                            <div class="row box-shadow">
                                <figure>
                                    <img class="lib-img-show" src="img/actualidad/actualidad_noticia01_thumb.jpg">
                                </figure>
                                <article>
                                    <h3>
                                        Bureau Veritas potencia sus servicios para la industria acuícola-pesquera
                                        <div class="lib-header-seperator"></div>
                                    </h3>
                                    <p>
                                        Actualmente, la División Alimentos de Bureau Veritas Chile posee una de las redes de laboratorios y operaciones más grande del país ...
                                        <a href="#" class="mas">
                                            <span class="ver">ver más
                                            <span class="glyphicon glyphicon-plus"></span>
                                            </span>
                                        </a>
                                    </p>
                                </article>
                            </div>
                        </div>
                        <!--fin tarjeta2-->
                        <!--tarjeta2-->
                        <div id="tarjeta" class="col-xs-12 col-sm-6 col-md-6">
                            <div class="row box-shadow">
                                <figure>
                                    <img class="lib-img-show" src="img/actualidad/actualidad_noticia01_thumb.jpg">
                                </figure>
                                <article>
                                    <h3>
                                        Bureau Veritas potencia sus servicios para la industria acuícola-pesquera
                                        <div class="lib-header-seperator"></div>
                                    </h3>
                                    <p>
                                        Actualmente, la División Alimentos de Bureau Veritas Chile posee una de las redes de laboratorios y operaciones más grande del país ...
                                        <a href="#" class="mas">
                                            <span class="ver">ver más
                                            <span class="glyphicon glyphicon-plus"></span>
                                            </span>
                                        </a>
                                    </p>
                                </article>
                            </div>
                        </div>
                        <!--fin tarjeta2-->
                    </div>
                </div>
            </div>
        </section>

        <!-- Servicios -->
        <a id="lineas"></a>
        <div id="lineas" class="container">
            <div class="row servicios-section">
                <div class="col-lg-12">
                    <a id="titulo" href="#">
                        <!--                    <span class="glyphicon glyphicon-cog"></span>-->
                        <span class="icon-iconos-10"></span> lineas de servicios enfocadas a la industria
                    </a>
                </div>
            </div>
        </div>
        <section id="servicios">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <p id="intro" class="lead"><strong>La División Food, Aguas y Riles del Grupo Bureau Veritas Chile S.A.</strong> está enfocada en apoyar a las empresas en materia de calidad, cumplimiento, inocuidad y medio ambiente a través de sus servicios de inspección, muestreo, análisis, y auditorías. Como parte de su estrategia de crecimiento en Chile y América Latina, el 2008 la compañía adquirió el Centro de Estudios de Medición y Certificación de Calidad (Cesmec), el 2010 Inspectorate, y el 2014 Andes Control. Gracias a lo anterior la División Food, Aguas y Riles es hoy la red de servicios y laboratorios más grande del país, integrando estas marcas a sus más de 11 oficinas operativas y 3 laboratorios a nivel nacional (Iquique, Concepción y Multilaboratorio Colina, Santiago). La División posee acreditaciones y autorizaciones vigentes con las principales entidades internacionales y nacionales entre las cuales destacan: INN, SERNAPESCA, SISS, SAG, A2LA (Estados Unidos), DAKKS (Alemania). A través de sus áreas de Microbiología, Química, Cromatografía, Medioambiente y una plataforma de servicios complementaria de primer nivel, las principales líneas de negocios y servicios son:
                        </p>
                        <div id="line"></div>
                        <p></p>

                    </div>
                </div>
            </div>

            <div class="container align_center">
                <div class="row">
                    <!--tarjeta1-->
                    <div id="miniaturas_servicios" class="col-xs-12 col-sm-4 col-md-3">
                        <a href="#">
                            <div class="thumbnail">

                                <div class="caption">
                                    <p>ver mas<span class="icon-iconos_Artboard20copy"></span></p>
                                </div>
                                <img src="img/linea-horeca-thumb.jpg" />
                            </div>
                            <p>linea horeca</p>
                        </a>
                    </div>
                    <div id="miniaturas_servicios" class="col-xs-12 col-sm-4 col-md-3">
                        <a href="#">
                            <div class="thumbnail">

                                <div class="caption">
                                    <p>ver mas<span class="icon-iconos_Artboard20copy"></span></p>
                                </div>
                                <img src="img/linea-agricola-thumb.jpg" />
                            </div>
                            <p>linea agricola</p>
                        </a>
                    </div>
                    <div id="miniaturas_servicios" class="col-xs-12 col-sm-4 col-md-3">
                        <a href="#">
                            <div class="thumbnail">

                                <div class="caption">
                                    <p>ver mas<span class="icon-iconos_Artboard20copy"></span></p>
                                </div>
                                <img src="img/linea_feed.jpg" />
                            </div>
                            <p>linea feed, seafood y pesquero</p>
                        </a>
                    </div>
                    <div id="miniaturas_servicios" class="col-xs-12 col-sm-4 col-md-3" style="margin-bottom: 51px;">
                        <a href="#">
                            <div class="thumbnail">

                                <div class="caption">
                                    <p>ver mas<span class="icon-iconos_Artboard20copy"></span></p>
                                </div>
                                <img src="img/linea-food-retail-thumb.jpg" />
                            </div>
                            <p>linea food y retail</p>
                        </a>
                    </div>
                    <div id="miniaturas_servicios" class="col-xs-12 col-sm-4 col-md-3">
                        <a href="#">
                            <div class="thumbnail">

                                <div class="caption">
                                    <p>ver mas<span class="icon-iconos_Artboard20copy"></span></p>
                                </div>
                                <img src="img/lineas_medio-ambiente-thumb.jpg" />
                            </div>
                            <p>linea medio ambiente</p>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <a id="equipo"></a>
        <section id="equipo">
            <div id="titulo" class="container">
                <div class="row actualidad-section">
                    <div class="col-lg-12">
                        <a href="#"><span class="icon-iconos-09">
                
                </span>Nuestro Equipo</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-sm-6">
                        <article>
                            <h3>Mardiah Polanco</h3>
                            <a href="#"><span class="icon-iconos-14"></span>+ 56 2 2485 9070</a>
                            <a href="#"><span class="icon-iconos_Artboard2copy17"></span>mardiah.polanco@bureauveritas.cl</a>
                        </article>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <article>
                            <h3>Mardiah Polanco</h3>
                            <a href="#"><span class="icon-iconos-14"></span>+ 56 2 2485 9070</a>
                            <a href="#"><span class="icon-iconos_Artboard2copy17"></span>mardiah.polanco@bureauveritas.cl</a>
                        </article>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <article>
                            <h3>Mardiah Polanco</h3>
                            <a href="#"><span class="icon-iconos-14"></span>+ 56 2 2485 9070</a>
                            <a href="#"><span class="icon-iconos_Artboard2copy17"></span>mardiah.polanco@bureauveritas.cl</a>
                        </article>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <article>
                            <h3>Mardiah Polanco</h3>
                            <a href="#"><span class="icon-iconos-14"></span>+ 56 2 2485 9070</a>
                            <a href="#"><span class="icon-iconos_Artboard2copy17"></span>mardiah.polanco@bureauveritas.cl</a>
                        </article>
                    </div>
                </div>
            </div>

        </section>
        <section id="consulta">
            <p>Consulta por nuestros Servicios</p>
        </section>

        <!-- Contact Section -->
        <a id="contacto"></a>
        <section id="contacto">
            <div id="titulo" class="container">
                <div class="row actualidad-section">
                    <div class="col-lg-12">
                        <a href="#"><span class="icon-iconos-12">
                </span>
                Contacto</a>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <article>
                            <h3>Santiago</h3>
                            <span class="icon-iconos_Artboard17">
                            </span>
                            <p>
                                Av. Maratón 2595, Macul - Chile.
                            </p>
                            <span class="icon-iconos-14">
                            </span>
                            <a href="#">
                                Tel: + 56 2 24859000
                            </a>
                            <br>
                            <br>
                            <span class="icon-iconos_Artboard17">
                            </span>
                            <p>
                                Ramón Freire 50, Parque Industrial Los Libertadores, Colina.
                            </p>
                            <span class="icon-iconos-14">
                            </span>
                            <a href="#">
                                 Tel: +56 2 23607400
                            </a>
                        </article>

                        <article>
                            <h3>Iquique:</h3>
                            <span class="icon-iconos_Artboard17">
                            </span>
                            <p>
                                Ruta A-16, Km 10,Sitio 4 Nº 4544, Alto Hospicio, Iquique
                            </p>
                            <span class="icon-iconos-14">
                            </span>
                            <a href="#">
                                 Tel.: 572405000
                            </a>
                        </article>

                        <article>
                            <h3>Concepcion</h3>
                            <span class="icon-iconos_Artboard17">
                            </span>
                            <p>
                                Avenida Collao 2137
                            </p>
                            <span class="icon-iconos-14">
                            </span>
                            <a href="#">
                                 Tel.: 412205600
                            </a>
                        </article>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="form-area">
                            <form role="form">
                                <br style="clear:both">
                                <!--                                <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>-->
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="* Nombre y Apellido" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="* Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="* Asunto" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="* Teléfono" required>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" placeholder="* Comentario" maxlength="140" rows="7"></textarea>
                                    <!--
                                    <span class="help-block">
                                    <p id="characterLeft" class="help-block ">You have reached the limit</p></span>
-->
                                </div>
                                <button type="button" id="submit" name="submit">Enviar Mensaje</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map" class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <section id="cd-google-map">
                            <div id="google-container"></div>
                            <div id="cd-zoom-in">+</div>
                            <div id="cd-zoom-out">-</div>
                            <div id="relleno"></div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div id="footer" class="container">
                <div class="row">
                    <div class="col-xs-6 col-md-4">
                        <figure><img src="img/logo_bureauveritas_byn.png" alt="bureau veritas"></figure>
                    </div>
                    <div class="col-xs-6 col-md-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum voluptatem unde minima error, quis beatae sunt, numquam dolorem at voluptatum. Dolorem qui esse dolores, ab ullam doloribus id quod at.</p>
                    </div>

                    <div class="col-xs-12 col-md-4">
                        <address>
                        <article>
                           <p id="detalle">Teléfono:</p>
                            <span class="icon-iconos-14">
                
                </span>
                           <p id="descrip">(+56 2) 2350 2100 </p>
                        </article>
                   
                        <article>
                           <p id="detalle">Email:</p>
                            <span class="icon-iconos_Artboard2copy17">
                            </span>
                            <p id="descrip">consultas@bureauveritas.cl</p>
                        </article>
                        
                        
                        <article>
                           <p id="detalle">Dirección:</p>
                            <span id="map" class="icon-iconos_Artboard17">
                            </span>
                            <p id="descrip">Bureau Veritas S.A.</br> 
Av. Maratón 2595, Macul - Santiago - Chile. </p>
                        </article>
                    </address>
                    </div>
                </div>
        </footer>
           <aside>
                    <div id="aside" class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                <p id="copy">© Copyright Bureau Veritas  2016</p>
                            </div>

                            <div class="col-xs-6">
                                <a class="motiondesign" href="#">
                                   <p>
                                    Desarrollado por Motiondesign</p></a>
                                
                            </div>
                        </div>
                    </div>
                </aside>
        <!-- Biblioteca jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Scrolling Nav JavaScript -->
        <script src="js/jquery.easing.min.js"></script>
        <!-- Flexslider js-->
        <script src="js/jquery.flexslider.js"></script>
        <!-- Funciones-->
        <script src="js/funciones.js"></script>
        <!--Google maps api-->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    </body>

    </html>