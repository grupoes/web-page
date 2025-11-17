<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <!--publicidad-->

    <title>ASESORES DE TESISS</title>

    <link rel="icon" href="assets/img/grupoes.ico" type="image/x-icon">
    <!-- Bootstrap -->
    <link rel='stylesheet' type='text/css' href='assets/css/bootstrap/bootstrap.min.css'> <!-- Optional theme -->
    <link rel='stylesheet' type='text/css' href='assets/css/bootstrap/bootstrap-theme.min.css'> <!-- Custom css -->
    <link rel='stylesheet' type='text/css' href='assets/css/style.css'> <!-- Font Awesome -->
    <link rel='stylesheet' type='text/css' href='assets/css/font-awesome.min.css'> <!-- Flexslider -->
    <link rel='stylesheet' type='text/css' href='assets/css/flexslider.css'> <!-- Owl -->
    <link rel='stylesheet' type='text/css' href='assets/css/owl.carousel.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    <style type="text/css">
        p.heading {
            font-weight: bold !important;
        }

        .whatsapp-floating {
            position: fixed;
            bottom: 40px;
            right: 10px;
            width: 80px;
            /* Ajusta este valor según el tamaño que desees para el círculo */
            height: 80px;
            /* Asegura que sea un cuadrado para que el border-radius lo haga circular */
            padding: 0;
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            /* Hace que sea completamente circular */
            z-index: 1000;
            display: flex;
            align-items: center;
            /* Centra el contenido verticalmente */
            justify-content: center;
            /* Centra el contenido horizontalmente */
            text-decoration: none;
        }

        .whatsapp-floating i {
            font-size: 40px;
        }

        @media (max-width: 600px) {
            .floating-form {
                width: 90%;
                /* Ocupar la mayoría del ancho de la pantalla */
                bottom: 10px;
                /* Posicionarlo más abajo para que no interfiera con otros elementos */
                right: 5%;
                /* Centrarlo horizontalmente */
            }

        }

        /* Para pantallas con un ancho máximo de 480px (ejemplo de tamaño para móviles más pequeños) */
        @media (max-width: 480px) {
            .floating-form {
                width: 90%;
                /* Ocupar todo el ancho de la pantalla */
                bottom: 10px;
                right: 0;
                /* Asegurarse de que esté completamente a la derecha */
                border-radius: 0;
                /* Puedes quitar el border-radius si prefieres un diseño más ajustado para pantallas pequeñas */
            }


        }



        #comenzar {
            margin-top: 30px;
            border-radius: 30px;
            background-color: white !important;
            min-width: 180px;
            font-size: 20px;
            color: #3367D6;
            font-weight: 500;
        }


        .floating-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            /*background-color: #FF0000;*/
            color: #FFFFFF;
            /*border-radius: 50%;*/
            /*width: 60px;
                height: 60px;*/
            text-align: center;
            font-size: 24px;
            line-height: 60px;
            cursor: pointer;
            z-index: 999;
            /*box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);*/
        }

        /* Estilos del formulario flotante */
        .floating-form {
            display: none;
            position: fixed;
            bottom: 140px;
            right: 20px;
            width: 350px;
            /*padding: 20px;*/
            background-color: #FFFFFF;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
            border-radius: 15px;
            z-index: 999;
        }

        /* Estilo adicional para ocultar el botón cuando el formulario está visible */
        .floating-button.hide {
            display: none;
        }

        /* formulario whatsapp*/

        .form_whatsapp {
            max-width: 350px;
        }


        .form__whatsapp-header {
            background-color: #0b485b;
            color: #ffffff;
            padding: 1rem;
            border-radius: 15px 15px 0 0;
        }

        .form__whatsapp-header-title {
            font-size: 1rem;
            line-height: 1.2rem;
            margin: 0;
            color: #ffffff;
        }

        .form_whatsapp-body {
            padding: 1rem;
        }

        .form__whatsapp-message {
            background: #fff;
            border: 1px solid #cacaca;
            padding: 0.5rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .form__group--to-left {
            margin-right: auto;
            max-width: 350px;
        }

        .form__group {
            margin-bottom: 1rem;
        }

        .form__group--to-right {
            margin-left: auto;
            max-width: 350px;
        }

        .form__input {
            background-color: #e7ffe7;
            color: #4a4a4a;
            border: 1px solid #cacaca;
            outline: none;
            border-radius: 46px;
            width: 100%;
            display: block;
            font-size: 1rem;
            line-height: 1.5rem;
            padding: 0 0.5rem;
            height: 42px;
        }

        .form__sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        .form__whatsapp-message {
            background: #fff;
            border: 1px solid #cacaca;
            padding: 0.5rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .form__checkbox {
            display: block;
            min-height: 1.5rem;
            padding-left: 1.5em;
            margin-bottom: 0.125rem;
        }

        .idt-form__submit-container {
            text-align: center;
        }

        .button__whatsapp {
            background: rgba(0, 128, 150, 1);
            color: #ffffff;
            border: none;
            border-radius: 0.4rem;
            font-weight: normal;
            transform: scale(1);
            transition: 0.3s;
            padding: 10px 2rem;
        }
    </style>

    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NXNDXHM2');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Event snippet for whatsapp conversion page In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
    <script>
        function gtag_report_conversion(url) {
            var callback = function() {
                if (typeof(url) != 'undefined') {
                    window.location = url;
                }
            };
            gtag('event', 'conversion', {
                'send_to': 'AW-818479322/L4u5CIfG1f0BENqBpIYD',
                'event_callback': callback
            });
            return false;
        }
    </script>

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '304641022215982');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=304641022215982&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->





</head>

<body>

    <div id="myloader">
        <div class="loader">
            <div class="grid">
                <div class="cube cube1"></div>
                <div class="cube cube2"></div>
                <div class="cube cube3"></div>
                <div class="cube cube4"></div>
                <div class="cube cube5"></div>
                <div class="cube cube6"></div>
                <div class="cube cube7"></div>
                <div class="cube cube8"></div>
                <div class="cube cube9"></div>
            </div>
        </div>
    </div>

    <header id="header">
        <div class="top-nav">
            <div id="logo">
                <a class="navbar-brand" href="">
                    <img src='assets/img/logo-color.webp' class='normal' alt='logo-color'> </a>
            </div>
        </div>
        <nav class="navbar navbar-default">
            <div id="menu-classic">
                <div class="menu-holder">
                    <ul>
                        <li>
                            <a href="#" class="active-item">Principal</a>
                        </li>
                        <li>
                            <a href="#home-wrap" class="btn-down">Nosotros</a>
                        </li>
                        <li>
                            <a href="#home-areas" class="btn-down">Nuestras Áreas</a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0)">Normas de Citación</a>
                            <ul class="sub-menu">
                                <li><a href="#home-normas" class="btn-down">APA</a></li>
                                <li><a href="#home-normas" class="btn-down">HARVARD</a></li>
                                <li><a href="#home-normas" class="btn-down">ISO 9000</a></li>
                                <li><a href="#home-normas" class="btn-down">VANCOUVER</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0)">Sede</a>
                            <ul class="sub-menu">
                                <li><a href="#home-sedes" class="btn-down">Tarapoto</a></li>
                                <li><a href="#home-sedes" class="btn-down">Chiclayo</a></li>
                                <li><a href="#home-sedes" class="btn-down">Ayacucho</a></li>
                                <li><a href="#home-sedes" class="btn-down">Yurimaguas</a></li>
                                <li><a href="#home-sedes" class="btn-down">Lima</a></li>
                                <li><a href="#home-sedes" class="btn-down">Trujillo</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="https://www.grupoesconsultores.com/consultoria/" target="_blank">Intranet</a>
                        </li>
                        <li>
                            <a href="https://www.grupoesconsultores.com/consultoria/reserva" target="_blank">Cita Skype</a>
                        </li>
                        <li>
                            <a href="#home-contacto" class="btn-down">Contáctanos</a>
                        </li>
                        <li>
                            <a href="https://goo.gl/forms/gOTNEToWSULfuWuM2" target="_blank" class="btn-down">Trabaja con Nosotros</a>
                        </li>
                        <li>
                            <a href="https://tutema.grupoesconsultores.com/" target="_blank" class="btn-down">Crea tu tema</a>
                        </li>
                    </ul>
                </div>
                <div class="pull-right visible-md visible-lg">
                    <a id="ver_pause" onclick="parar()" style="display: inline-block; padding-left: 5px; padding-right: 5px">
                        <h3><i class="fa fa-pause" style="color: #507CBD" aria-hidden="true"></i></h3>
                    </a>

                    <a id="ver_play" onclick="playSound()" style="display: inline-block; padding-left: 5px; padding-right: 5px">
                        <h3><i class="fa fa-play" style="color: #507CBD" aria-hidden="true"></i></h3>
                    </a>

                    <a href="https://www.facebook.com/grupoesconsultores" style="display: inline-block; padding-left: 5px; padding-right: 5px">
                        <h3><i class="fa fa-facebook" style="color: #507CBD"></i></h3>
                    </a>
                    <a href="https://twitter.com/grupoesconsulto" style="display: inline-block; padding-left: 5px; padding-right: 5px">
                        <h3><i class="fa fa-twitter" style="color: #63CEF2"></i></h3>
                    </a>
                    <a href="https://www.instagram.com/grupoesconsultores/" style="display: inline-block; padding-left: 5px; padding-right: 5px">
                        <h3><i class="fa fa-instagram" style="color: #EA4C89"></i></h3>
                    </a>
                    <a href="https://www.instagram.com/grupoesconsultores/" style="display: inline-block; padding-left: 5px; padding-right: 5px">
                        <h3><i class="fa fa-youtube" style="color: #F26262"></i></h3>
                    </a>
                </div>
            </div>
            <div id="menu-responsive-classic">
                <div class="menu-button">
                    <span class="bar bar-1"></span>
                    <span class="bar bar-2"></span>
                    <span class="bar bar-3"></span>
                </div>
            </div>
            <div class="secondary-menu-mobile">
                <ul>
                </ul>
            </div>
        </nav>
    </header>

    <div id="main-wrap">
        <div id="page-content" class="header-static">
            <div id="flexslider-nav" class="fullpage-wrap small">
                <ul class="slides">
                    <li style="background-image:url(assets/img/button59a77de02d5638-81897989.webp)">
                        <div class="text center">
                            <p class="heading center white margin-bottom-small flex-animation">
                                <img src='assets/img/logo-es-consultores-blanco.webp' width='100%' alt='logo-es-consultores-blanco'>
                            </p>
                            <p class="heading white center margin-bottom flex-animation">Asesores Externos de Tesis en Ciencias Empresariales, Sociales, Educación y Salud (Pregrado y Posgrado) desde la elección del tema hasta tu sustentación final. </p>
                            <div class="padding-onlytop-md flex-animation">
                                <a href="#home-contacto" class="btn-alt small shadow margin-xs-bottom-small">CONTACTANOS</a>
                            </div>
                        </div>
                        <div class="gradient dark"></div>
                    </li>
                    <li style="background-image:url(assets/img/button59a77fb52236f4-92805801.webp)">
                        <div class="text center">
                            <p class="heading center white margin-bottom-small flex-animation">
                                <img src='assets/img/logo-es-consultores-blanco.webp' width='100%' alt='logo-es-consultores-blanco'>
                            </p>
                            <p class="heading white center margin-bottom flex-animation">Grupo Es Consultores te brinda la orientación necesaria en la elaboración de tu tesis. Asesorando a cientos de alumnos y más de 10 años de experiencia. </p>
                            <div class="padding-onlytop-md flex-animation">
                                <a href="#home-contacto" class="btn-alt small shadow margin-xs-bottom-small">CONTACTANOS</a>
                            </div>
                        </div>
                        <div class="gradient dark"></div>
                    </li>
                    <li style="background-image:url(assets/img/button59a78074288aa3-41807423.webp)">
                        <div class="text center">
                            <p class="heading center white margin-bottom-small flex-animation">
                                <img src='assets/img/logo-es-consultores-blanco.webp' width='100%' alt='logo-es-consultores-blanco'>
                            </p>
                            <p class="heading white center margin-bottom flex-animation">¡Olvídate del estrés de tu tesis! Con 10+ años de experiencia y 3000 tesis aprobadas, somos tu mejor opción. Especialistas en Ciencias Empresariales, Sociales, Educación y Salud. ¡Únete a nuestro equipo experto y logra tus metas académicas! </p>
                            <div class="padding-onlytop-md flex-animation">
                                <a href="#home-contacto" class="btn-alt small shadow margin-xs-bottom-small">CONTACTANOS</a>
                            </div>
                        </div>
                        <div class="gradient dark"></div>
                    </li>

                </ul>
                <div class="slider-navigation">
                    <a href="#" class="flex-prev"><i class="material-icons">keyboard_arrow_left</i></a>
                    <div class="slider-controls-container"></div>
                    <a href="#" class="flex-next"><i class="material-icons">keyboard_arrow_right</i></a>
                </div>
                <div id="godown">
                    <a href="#home-wrap" class="btn-down">
                        <i class="material-icons">keyboard_arrow_down</i>
                    </a>
                </div>
            </div>
            <div id="home-wrap" class="content-section fullpage-wrap">
                <div class="container">
                    <div class="row no-margin padding-onlytop-md">
                        <div class="col-md-6 padding-leftright-null">
                            <div data-responsive="parent-height" data-responsive-id="about" class="text">
                                <h2 class="margin-bottom-null left">Misión</h2>
                                <div class="padding-onlytop-sm">
                                    <p class="margin-bottom grey text-justify">
                                        Grupo Es Consultores S.A.C. es una empresa de servicios de consultora y/o asesoría a nivel nacional, atendiendo a empresarios en cuanto a las problemáticas de su gestión; Como también a estudiantes de la facultad de ciencias empresariales en sus proyectos y desarrollos de investigación, contamos con colaboradores capacitados en visión innovadora y alianzas estratégicas sólidas, que permiten brindar un servicio de calidad e innovación a nuestros clientes, incrementando de esta manera la competitividad comercial del país.</p>
                                    <a href="https://www.youtube.com/watch?v=o2_W-AJKZxA" target="_blank" class="btn-pro">Saber más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 padding-leftright-null hidden-xs hidden-sm">
                            <div data-responsive="child-height" data-responsive-id="about" class="section-image height-auto-sm">
                                <picture class="section right">
                                    <img src='assets/img/new/mision.webp' class='img-responsive corner-image' alt='mision'>
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="row no-margin">
                        <div class="col-md-6 padding-leftright-null hidden-xs hidden-sm">
                            <div data-responsive="child-height" data-responsive-id="about" class="section-image height-auto-sm">
                                <picture class="section right">
                                    <img src='assets/img/cuadrado-2.webp' class='img-responsive corner-image' alt='cuadrado'>
                                </picture>
                            </div>
                        </div>
                        <div class="col-md-6 padding-leftright-null">
                            <div data-responsive="parent-height" data-responsive-id="about" class="text">
                                <h2 class="margin-bottom-null left">Visión</h2>
                                <div class="padding-onlytop-sm">
                                    <p class="margin-bottom grey text-justify">
                                        Ser un referente importante e innovador para los empresarios y estudiantes de la facultad de ciencias empresariales, en los servicios de consultora y/o asesoría, con una alta y sólida presencia en el país, teniendo como base el compromiso de todos los integrantes en el desarrollo sostenible del Perú.</p>
                                    <a href="https://www.youtube.com/watch?v=o2_W-AJKZxA" target="_blank" class="btn-pro">Saber más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="secondary-background">
                    <div class="container">
                        <div class="row no-margin">
                            <div class="col-md-9 padding-leftright-null">
                                <div class="text text-md-center">
                                    <h2 class="white small" id="home-areas">Nuestras Áreas</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="light-background">
                    <div class="container">
                        <!-- Service -->
                        <div class="row no-margin padding-md">
                            <div class="col-md-3 padding-leftright-null">
                                <div class="text padding-topbottom-null">
                                    <h2 class="margin-bottom-null left">Contabilidad</h2>
                                </div>
                            </div>
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text padding-topbottom-null">
                                    <p class="margin-bottom-null text-justify">
                                        Los empresarios tienen el compromiso de hacer que este mundo sea un mejor lugar para vivir, por lo tanto cuentan con nuestro apoyo de asesoramiento en la gesti&oacute;n de sus negocios, mediante la presentaci&oacute;n oportuna de su informaci&oacute;n financiera, para que de esta manera tengan una afinada toma de decisiones. </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src='assets/img/contador-733x550.webp' width='100%' alt='areas'> <a href="https://www.youtube.com/watch?v=o2_W-AJKZxA" target="_blank" class="btn-alt small active margin-null">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="container">
                        <!-- Service -->
                        <div class="row no-margin padding-md">
                            <div class="col-md-3 padding-leftright-null">
                                <div class="text padding-topbottom-null">
                                    <h2 class="margin-bottom-null left">Asesoría de Tesis</h2>
                                </div>
                            </div>
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text padding-topbottom-null">
                                    <p class="margin-bottom-null text-justify">
                                        ¡Termina tu tesis de pre y post grado exitosamente. Contamos con los mejores especialistas a nivel nacional , con una trayectoria de más de 10 años y más de 3000 tesis aprobadas.
                                        Asesoramos TESIS
                                        Tesis de Pre grado
                                        Tesis de Postgrado
                                        Tesis Doctorado
                                        Con nosotros estás en buenas manos
                                        TE ASESORAREMOS HASTA TU SUSTENTACIÓN FINAL </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <img src='assets/img/button59a781b4877c80-59099423.webp' width='100%' alt='areas'> <a href="/consultora/investigacion" target="_blank" class="btn-alt small active margin-null">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="secondary-background">
                    <div class="container">
                        <div class="row no-margin">
                            <div class="col-md-9 padding-leftright-null">
                                <div class="text text-md-center">
                                    <h2 class="white small" id="home-normas">Normas de Citación</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="light-background">
                    <div class="row no-margin padding-lg">
                        <div class="container">
                            <div data-responsive="parent-height" data-responsive-id="services-corporate" class="text padding-topbottom-null">
                                <div class="row box-services padding-onlytop-md">
                                    <div class="col-md-3 padding-leftright-null">
                                        <div class="box-service">
                                            <h3 class="margin-bottom-extrasmall text-center">APA</h3>
                                            <p class="margin-bottom-null">
                                                <a href="https://drive.google.com/open?id=0BzhYLtcNLGiNTUdlSGpWZ3RwYVk" target="_blank" class="btn-alt margin-null btn-block">VER MÁS</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 padding-leftright-null">
                                        <div class="box-service">
                                            <h3 class="margin-bottom-extrasmall text-center">HARVARD</h3>
                                            <p class="margin-bottom-null">
                                                <a href="https://drive.google.com/open?id=0BzhYLtcNLGiNUHhVMW43ZTdmbFU" target="_blank" class="btn-alt margin-null btn-block">VER MÁS</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 padding-leftright-null">
                                        <div class="box-service">
                                            <h3 class="margin-bottom-extrasmall text-center">ISO 9000</h3>
                                            <p class="margin-bottom-null">
                                                <a href="https://drive.google.com/open?id=0BzhYLtcNLGiNeE5TbUI3bGMzaFk" target="_blank" class="btn-alt margin-null btn-block">VER MÁS</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 padding-leftright-null">
                                        <div class="box-service">
                                            <h3 class="margin-bottom-extrasmall text-center">VANCOUVER</h3>
                                            <p class="margin-bottom-null">
                                                <a href="https://drive.google.com/open?id=0BzhYLtcNLGiNS1liWjBBUEZNbDg" target="_blank" class="btn-alt margin-null btn-block">VER MÁS</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="text-center  padding-lg">Para nuestro mejor desempeño en el trabajo, trabajamos con las siguientes normas de citación.</h3>
                        </div>
                    </div>
                </div>
                <div class="light-background sedes" style="background: url(assets/img/new/otros.webp);">
                    <div style="background:rgba(0,0,0,0.4)">
                        <div class="container padding-lg">
                            <div class="row no-margin">
                                <div class="col-md-12 padding-leftright-null text-center">
                                    <h2 class="margin-bottom-small left" id="home-sedes" style="color:#fff">Nuestras sedes</h2>
                                </div>
                                <div class="row no-margin">
                                    <div class="col-md-6 padding-leftright-null">
                                        <div class="text padding-md-bottom-null" style="padding-bottom: 0;">
                                            <i class="material-icons color service left">map</i>
                                            <div class="service-content large">
                                                <h3 class="margin-bottom-extrasmall" style="color:#fff"><b>TARAPOTO</b></h3>
                                                <p style="color:#fff">Jirón Colon N° 566, Atumpampa</p>
                                                <p style="color:#fff">Telf: (042) 530047 / cel: 938669769</p>
                                                <p style="color:#fff">Correo: grupoesconsultores_tarapoto@outlook.es</p>
                                                <a target="_blank" href="https://www.google.com.pe/maps/place/Jr.+Colon+566,+Tarapoto/@-6.4907961,-76.3843662,17z/" class="btn-alt small active margin-null">Ubícanos</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 padding-leftright-null">
                                        <div class="text padding-md-bottom-null" style="padding-bottom: 0;">
                                            <i class="material-icons color service left">map</i>
                                            <div class="service-content large">
                                                <h3 class="margin-bottom-extrasmall" style="color:#fff"><b>CHICLAYO</b></h3>
                                                <p style="color:#fff">.</p>
                                                <p style="color:#fff">Telf: 970006017</p>
                                                <p style="color:#fff">Correo: esconsultoreschiclayo@gmail.com</p>
                                                <a target="_blank" href="https://www.google.com.pe/maps/@-6.7831099,-79.8446312,3a,75y,46.24h,115.98t/data=!3m9!1e1!3m7!1sNUkHNVfoHrUMD5CIC4-l1A!2e0!7i13312!8i6656!9m2!1b1!2i50" class="btn-alt small active margin-null">Ubícanos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-margin">
                                    <div class="col-md-6 padding-leftright-null">
                                        <div class="text padding-md-bottom-null" style="padding-bottom: 0;">
                                            <i class="material-icons color service left">map</i>
                                            <div class="service-content large">
                                                <h3 class="margin-bottom-extrasmall" style="color:#fff"><b>AYACUCHO</b></h3>
                                                <p style="color:#fff">Avenida San Lorenzo N° 383 2do Piso, Huamanga</p>
                                                <p style="color:#fff">Telf: 972506867</p>
                                                <p style="color:#fff">Correo: esconsultoresayacucho@gmail.com</p>
                                                <a target="_blank" href="https://www.google.com.pe/maps/@-13.1648492,-74.2244169,3a,75y,254.19h,91.68t/data=!3m9!1e1!3m7!1ss4166dGQJdYM9BXRsAQP9Q!2e0!7i13312!8i6656!9m2!1b1!2i50" class="btn-alt small active margin-null">Ubícanos</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 padding-leftright-null">
                                        <div class="text padding-md-bottom-null" style="padding-bottom: 0;">
                                            <i class="material-icons color service left">map</i>
                                            <div class="service-content large">
                                                <h3 class="margin-bottom-extrasmall" style="color:#fff"><b>YURIMAGUAS</b></h3>
                                                <p style="color:#fff">Calle Mariscal Castilla N° 608</p>
                                                <p style="color:#fff">Telf: (065) 354506 / Cel: 930135100</p>
                                                <p style="color:#fff">Correo: contabilidad@grupoesconsultores.com</p>
                                                <a target="_blank" href="https://www.google.com.pe/maps/place/Mariscal+Castilla+605,+Yurimaguas/@-5.8908797,-76.1062139,19z" class="btn-alt small active margin-null">Ubícanos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-margin">
                                    <div class="col-md-6 padding-leftright-null">
                                        <div class="text padding-md-bottom-null" style="padding-bottom: 0;">
                                            <i class="material-icons color service left">map</i>
                                            <div class="service-content large">
                                                <h3 class="margin-bottom-extrasmall" style="color:#fff"><b>LIMA</b></h3>
                                                <p style="color:#fff">Jr. Emilio Fernandez Nº 160 Dpto . 1506. Urbanización Santa Beatriz-Cercado de Lima</p>
                                                <p style="color:#fff">Telf: Telf: (01) 4305858 / telf: 913009215</p>
                                                <p style="color:#fff">Correo: esconsultoreslima@gmail.com</p>
                                                <a target="_blank" href="https://www.google.com.pe/maps/place/Concepto+Urbano+Plus,+altura+cdra.+9+Av.+Arequipa,+Emilio+Fern%C3%A1ndez+160,+Cercado+de+Lima+15046/@-12.0736593,-77.0373092,18.75z/" class="btn-alt small active margin-null">Ubícanos</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container content-section">
            <div class="row no-margin padding-lg">
                <div class="col-md-12 padding-leftright-null">
                    <div class="text text-left padding-topbottom-null">
                        <h2 id="home-contacto">Contactanos</h2>
                    </div>
                </div>
                <div class="row no-margin padding-onlytop-md">
                    <!--  Contact Form  -->
                    <div class="col-md-5 padding-leftright-null">
                        <div class="text padding-md-top-null">
                            <div class="box-form inverse-box">
                                <form id="contact-form">
                                    <input type="hidden" name="origen" value="FORMULARIO" />
                                    <input type="datetime-local" name="fecha" id="fecha" value="2023-12-04T08:22:11">
                                    <!--<input type="date" name="fecha" id="fecha" value="2023-12-04">-->
                                    <div class="row no-margin">
                                        <div class="col-md-12 padding-leftright-null">
                                            <input class="form-field" name="nombre" id="nombre" type="text" placeholder="Tu nombre">
                                        </div>
                                        <div class="col-md-12 padding-leftright-null">
                                            <input class="form-field" name="correo" id="correo" type="email" placeholder="Tu correo electrónico">
                                        </div>
                                        <div class="col-md-12 padding-leftright-null">
                                            <input class="form-field" name="celular" id="celular" type="tel" placeholder="Tu celular">
                                        </div>
                                        <div class="col-md-12 padding-leftright-null">
                                            <input class="form-field" name="carrera" id="carrera" type="text" placeholder="Tu carrera profesional">
                                        </div>
                                        <div class="col-md-12 padding-leftright-null">
                                            <input class="form-field" name="universidad" id="universidad" type="text" placeholder="Tu universidad">
                                        </div>
                                        <div class="col-md-12 padding-leftright-null">
                                            <input class="form-field" name="ciudad" id="ciudad" type="text" placeholder="Tu ciudad">
                                        </div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="col-md-12 padding-leftright-null">
                                            <div class="submit-area padding-onlytop-sm">
                                                <input type="submit" id="submit-contact" class="btn-alt active shadow" value="CONTACTARNOS">
                                                <div id="msg" class="message">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--  END Contact Form  -->
                    <!--  Contact Info  -->
                    <div class="col-md-7 padding-leftright-null">
                        <div class="row no-margin padding-onlytop-md">
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text padding-md-top-null">
                                    <h3 class="margin-bottom-small"><i class="fa fa-facebook" style="color: #507CBD"></i></h3>
                                    <p class="margin-null"><a href="https://www.facebook.com/grupoesconsultores" target="_blank" class="btn-pro margin-null">grupoesconsultores</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text padding-md-top-null">
                                    <h3 class="margin-bottom-small"><i class="fa fa-twitter" style="color: #63CEF2"></i></h3>
                                    <p class="margin-bottom-extrasmall"><a href="https://twitter.com/grupoesconsulto" target="_blank" class="btn-pro margin-null">grupoesconsulto</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row no-margin">
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text padding-md-top-null">
                                    <h3 class="margin-bottom-small"><i class="fa fa-instagram" style="color: #EA4C89"></i></h3>
                                    <p class="margin-bottom-extrasmall"><a href="https://www.instagram.com/grupoesconsultores/" target="_blank" class="btn-pro margin-null">grupoesconsultores</a></p>
                                </div>
                            </div>
                            <div class="col-md-6 padding-leftright-null">
                                <div class="text padding-md-top-null padding-md-bottom-null">
                                    <h3 class="margin-bottom-small"><i class="fa fa-youtube" style="color: #F26262"></i></h3>
                                    <p class="margin-bottom-extrasmall"><a href="https://www.youtube.com/channel/UCsdCxKI9Zi3THuJyvbusayQ" target="_blank" class="btn-pro margin-null">Youtube</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  END Contact Info  -->
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="modal_inicio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="background: #3367D6;">
                    <div class="modal-header" style="border-bottom: none">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-5">

                            </div>
                            <div class="col-md-7">
                                <h2 style="color: white; line-height: 60px;font-size: 50px; font-weight: 300">Crea tu</h2>
                                <h2 style="color: white; line-height: 60px;font-size: 50px; font-weight: 300">Tema de</h2>
                                <h1 style="color: white; line-height: 100px;font-weight: 800">Tesis</h1>
                                <h2 style="color: white; line-height: 60px; margin-left: 10%">En 2 </h2>
                                <h2 style="color: white; line-height: 60px; margin-left: 10%">PASOS </h2>

                                <button type="button" class="btn" id="comenzar">Comenzar</button>

                                <div>
                                    <img src="assets/img/logo-es-consultores-blanco.webp" style="width: 30%; margin-left: 65%" alt="logo-es-consultores-blanco">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="copy">
            <div class="container">
                <div class="row no-margin">
                    <div class="col-md-6 text">
                        <p>©2017 <a href="#">Grupo ES Consultores</a>. Todos los derechos reservados. </p>
                    </div>
                </div>
            </div>
        </div>
        <amp-auto-ads type="adsense" data-ad-client="ca-pub-3935509020065112">
        </amp-auto-ads>
        <script type='text/javascript' src='assets/js/jquery.min.js'></script>
        <script type='text/javascript' src='assets/js/bootstrap/bootstrap.min.js'></script>
        <script type='text/javascript' src='assets/js/jquery.flexslider-min.js'></script>
        <script type='text/javascript' src='assets/js/owl.carousel.min.js'></script>
        <script type='text/javascript' src='assets/js/isotope.min.js'></script>
        <script type='text/javascript' src='assets/js/jquery.magnific-popup.min.js'></script>
        <script type='text/javascript' src='assets/js/jquery.scrollTo.min.js'></script>
        <script type='text/javascript' src='assets/js/smooth.scroll.min.js'></script>
        <script type='text/javascript' src='assets/js/jquery.appear.js'></script>
        <script type='text/javascript' src='assets/js/jquery.countTo.js'></script>
        <script type='text/javascript' src='assets/js/jquery.scrolly.js'></script>
        <script type='text/javascript' src='assets/js/plugins-scroll.js'></script>
        <script type='text/javascript' src='assets/js/imagesloaded.min.js'></script>
        <script type='text/javascript' src='assets/js/pace.min.js'></script>
        <script type='text/javascript' src='assets/js/main.js'></script>
        <script type='text/javascript' src='assets/js/formulario.js'></script>

        <a href="https://wa.me/51938669769?text=Hola%20quiero%20consultar%20sobre%20la%20asesoria%20de%20tesis" target="_blank" class="whatsapp-floating" onclick="toggleForm(event)">
            <i class="bi bi-whatsapp"></i>

        </a>


        <div id="formContainer" class="floating-form">
            <form class="form_whatsapp">
                <div class="form__whatsapp-header">
                    <h2 class="form__whatsapp-header-title">Grupo Es Consultores S.A.C.</h2>
                    <span id="closeModal" style="cursor:pointer; position:absolute; right:10px; top:5px;font-size: 30px;">&times;</span>
                </div>
                <div class="form_whatsapp-body">
                    <div class="form__whatsapp-message form__group--to-left">
                        ¡Hola! somos Grupo ES Consultores, te ayudamos con tu tesis de INICIO hasta la sustentación FINAL, déjanos tus datos y te llamaremos a la brevedad. </div>
                    <div class="form__group form__group--to-right">
                        <label for="form-input-name" class="form__sr-only">Nombre</label>
                        <input type="text" class="form__input" id="form-input-name" name="name" placeholder="Nombre" data-error-msg="Campo requerido" required="" style="border-radius: 10px;">
                    </div>
                    <div class="form__group form__group--to-right" style="display: flex; align-items: center; width: 100%;">
                        <label for="form-input-phone" class="form__sr-only">Número de teléfono</label>
                        <select class="form__input" id="form-input-prefijo" name="phone-prefix" required="" style="width: 45%; border-radius: 10px 0 0 10px;">
                            <!-- Inserta tus opciones aquí. Ejemplo: -->
                            <option value="51">+51 Peru</option>
                            <option value="51">+51</option>
                            <!-- puedes añadir todas las opciones de prefijo de país que necesites aquí -->
                        </select>
                        <input type="text" class="form__input" id="form-input-phone" name="phone" placeholder="Número de teléfono" data-error-msg="Campo requerido" data-validate-type="true" required="" style="border-radius: 0px 10px 10px 0;">
                    </div>
                    <div class="form__group form__whatsapp-message">
                        <div class="form__checkbox">
                            <input class="form__checkbox-input" type="checkbox" name="legalConsent" value="He leído y acepto los, términos y condiciones y la política de tratamiento de datos personales" id="form-input-legal-consent" data-error-msg="Campo requerido" required="" checked>
                            <label class="form__checkbox-label" for="form-input-legal-consent">
                                He leído y acepto los, <a href="https://www.b2chat.io/terminos-de-servicio/" target="_blank" rel="noopener">términos y condiciones</a> y la <a href="https://www.b2chat.io/politica-de-privacidad/" target="_blank" rel="noopener">política de tratamiento de datos personales</a>
                            </label>
                        </div>
                    </div>

                    <div class="idt-form__submit-container">
                        <button type="button" class="button__whatsapp" id="iniciar_conversacion">Iniciar conversación</button>
                        <!--<a class="button__whatsapp" id="iniciar_conversacion">Iniciar conversación</a>-->
                    </div>
                </div>
            </form>
        </div>

        <!-- Load Facebook SDK for JavaScript -->
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v4.0',
                    "C_HTKLFfrOSkw": {
                        "on": "visible",
                        "vars": {
                            "event_name": "conversion",
                            "send_to": ["AW-818479322/9rWACLzmxMsCENqBpIYD"]
                        }
                    }
                });
            };
        </script>

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXNDXHM2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <script type="text/javascript" src="https://cdn.ywxi.net/js/1.js" async></script>
        <script type="text/javascript">
            $(function() {

                $("#fecha").hide();

            });
            //var audio

            var comenzar = document.getElementById('comenzar');

            comenzar.addEventListener('click', () => {
                window.open('https://tutema.grupoesconsultores.com/');
            })


            const modal = document.getElementById('formContainer');
            const closeModalIcon = document.getElementById('closeModal');

            // Ocultar modal al hacer clic en el ícono "X"
            closeModalIcon.addEventListener('click', function() {
                modal.style.display = 'none';
            });

            function toggleForm(e) {
                e.preventDefault();
                var formContainer = document.getElementById("formContainer");
                var floatingButton = document.querySelector(".floating-button");

                if (formContainer.style.display === "none" || formContainer.style.display === "") {
                    formContainer.style.display = "block";
                    //floatingButton.classList.add("hide");
                } else {
                    formContainer.style.display = "none";
                    //floatingButton.classList.remove("hide");
                }
            }

            const btnInitConversation = document.getElementById("iniciar_conversacion");

            btnInitConversation.addEventListener('click', (e) => {
                e.preventDefault();

                e.target.disabled = false;

                const nameCustomer = document.getElementById("form-input-name");
                const prefijo = document.getElementById("form-input-prefijo");
                const phone = document.getElementById("form-input-phone");

                const numPhone = phone.value;

                if (nameCustomer.value === "") {
                    alert("Agregue su nombre para iniciar la conversación");
                    return false;
                }

                if (numPhone === "") {
                    alert("Agregue su número de whatsapp para iniciar la conversación");
                    return false;
                }

                if (numPhone.length != 9) {
                    alert('Agregue un número válido por favor');
                    return false;
                }

                e.target.disabled = true;

                const numeroWhatsapp = prefijo.value + "" + numPhone;

                const formData = new FormData();

                const nombre = document.getElementById('nombre');
                const correo = document.getElementById('correo');
                const celular = document.getElementById('celular');
                const carrera = document.getElementById('carrera');
                const universidad = document.getElementById('universidad');
                const ciudad = document.getElementById('ciudad');

                formData.append('nombre', nameCustomer.value);
                formData.append('correo', "");
                formData.append('celular', numPhone);
                formData.append('carrera', "");
                formData.append('universidad', "");
                formData.append('ciudad', "");
                formData.append('origen', "ICONO WHATSAPP");

                fetch('./saveContacto', {
                        method: 'POST',
                        body: formData
                    })
                    .then(res => res.json())
                    .then(data => {
                        fetch('https://esconsultoresyasesores.com:4000/sendMensajeWhatsapp', {
                                mode: 'cors',
                                method: 'post',
                                body: JSON.stringify({
                                    nombre: nameCustomer.value,
                                    numero: numeroWhatsapp
                                }),
                                headers: {
                                    'Content-Type': 'application/json'
                                }
                            })
                            .then(res => res.json())
                            .then(data => {
                                e.target.disabled = false;
                                console.log(data);
                                if (data.message === 'ok') {
                                    alert('La solicitud fue enviado correctamente');
                                }
                            })
                            .catch((e) => {
                                // Manejas cualquier error que pueda ocurrir durante la solicitud.
                                console.error("Error durante la solicitud:", e); // Por ejemplo, puedes imprimir el error en la consola.
                                /* modal.style.display = 'none';
                                btnInitConversation.disabled = false;
                                
                                alert('La solicitud fue enviado correctamente'); */
                            });
                    })


                //limpieza de los datos
                nameCustomer.value = "";
                phone.value = "";

            });
        </script>

</body>

</html>
<script>
    function Snipe() {}
    Snipe.route = function(route) {
        return "" + route
    };
    var SessionData = [];
    Snipe.sessions = function(literal) {
        if (SessionData.hasOwnProperty(literal)) {
            return SessionData[literal];
        } else {
            return SessionData;
        }
    }
</script>