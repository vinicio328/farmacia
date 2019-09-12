<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Farmacias Galeno</title>
    <link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/jquery.smartmenus.bootstrap.css">
    <link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/ie10-viewport-bug-workaround.css">
    <link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/justified-nav.css">
    <!-- jQuery -->
    <script src="//code.jquery.com/jquery-3.3.1.js"></script>

</head>
<body>
    <div id="app">
        <div class="container">
            <div class="navbar-logo" role="navigation">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="{{route('home')}}" style="float: left;">
                                <img src="http://www.farmaciasgaleno.com.gt/images/logo.png" width="225"/>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">
                                <img src="http://www.farmaciasgaleno.com.gt/images/descargar-suplemento.png">
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ubicaciones')}}">
                                <img src="http://www.farmaciasgaleno.com.gt/images/nuestras-ubicaciones.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">

                    <!-- Left nav -->
                    <!--<ul id="ulMenu" class="nav navbar-nav">
                        Carga Menu index.js
                    </ul>-->
                    <ul id="ulMenu" class="nav navbar-nav" data-smartmenus-id="15681785530500994">
                        <li><a href="#" class="has-submenu" id="sm-14823422684210542-1" aria-haspopup="true" aria-controls="sm-14823422684210542-2" aria-expanded="false">
                                <img src="http://www.farmaciasgaleno.com.gt/images/menu-1.png">&nbsp;Medicamentos <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-2" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-1" aria-expanded="false">
                                <a href="#"></a>
                                <li><a href="#"></a><a href="#">Analgésicos </a></li>
                                <li><a href="#">Anestésicos </a></li>
                                <li><a href="#">Antibióticos </a></li>
                                <li><a href="#">Aparato Cardiovascular </a></li>
                                <li><a href="#" class="has-submenu" id="sm-14823422684210542-3" aria-haspopup="true" aria-controls="sm-14823422684210542-4" aria-expanded="false">Aparato Respiratorio <span class="caret pull-right"></span></a>
                                    <ul class="dropdown-menu" id="sm-14823422684210542-4" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-3" aria-expanded="false">
                                        <a href="#"></a>
                                        <li><a href="#"></a><a href="#">Gripe y Tos</a></li>
                                        <li><a href="#">Antihistamínicos</a></li>
                                        <li><a href="#">Antitusígenos</a></li>
                                        <li><a href="#">Asma</a></li>
                                        <li><a href="#">Revulsivos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Oftalmológicos </a></li>
                                <li><a href="#">Dermatológicos </a></li>
                                <li><a href="#">Diabeticos </a></li>
                                <li><a href="#" class="has-submenu" id="sm-14823422684210542-5" aria-haspopup="true" aria-controls="sm-14823422684210542-6" aria-expanded="false">Estomacales <span class="caret pull-right"></span></a>
                                    <ul class="dropdown-menu" id="sm-14823422684210542-6" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-5" aria-expanded="false">
                                        <a href="#"></a>
                                        <li><a href="#"></a><a href="#">Antiparasitarios</a></li>
                                        <li><a href="#">Aparato Digestivo y Metabolismo</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Hormonas </a></li>
                                <li><a href="#">Otológicos </a></li>
                                <li><a href="#">Prescripcion Médica</a></li>
                                <li><a href="#">Prod.Genito Urinarios </a></li>
                                <li><a href="#">Sangre y Hematología </a></li>
                                <li><a href="#" class="has-submenu" id="sm-14823422684210542-9" aria-haspopup="true" aria-controls="sm-14823422684210542-10" aria-expanded="false">Sistema Nervioso <span class="caret pull-right"></span></a>
                                    <ul class="dropdown-menu" id="sm-14823422684210542-10" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-9" aria-expanded="false">
                                        <a href="#"></a>
                                        <li><a href="#"></a><a href="#">Antineuríticos</a></li>
                                        <li><a href="#">Antiepilépticos</a></li>
                                        <li><a href="#">Antiparkinsonianos</a></li>
                                        <li><a href="#">Psicolépticos</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Soluciones Hospitalarias </a></li>
                                <li><a href="#" class="has-submenu" id="sm-14823422684210542-11" aria-haspopup="true" aria-controls="sm-14823422684210542-12" aria-expanded="false">Suplementos Alimenticios <span class="caret pull-right"></span></a>
                                    <ul class="dropdown-menu" id="sm-14823422684210542-12" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-11" aria-expanded="false">
                                        <a href="#"></a>
                                        <li><a href="#"></a><a href="#">Alimentos Generales</a></li>
                                        <li><a href="#">Complementos Alimenticios</a></li>
                                        <li><a href="#">Leche</a></li>
                                        <li><a href="#">Suplementos Alimenticios</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Varios </a></li>
                                <li><a href="#">Vitaminas </a></li>
                            </ul>
                        </li>
                        <li><a href="#">
                                <img src="http://www.farmaciasgaleno.com.gt/images/menu-2.png">&nbsp;Primeros Auxilios </a></li>
                        <li><a href="#" class="has-submenu" id="sm-14823422684210542-13" aria-haspopup="true" aria-controls="sm-14823422684210542-14" aria-expanded="false">
                                <img src="http://www.farmaciasgaleno.com.gt/images/menu-3.png">&nbsp;Mamá y Bebé <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-14" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-13" aria-expanded="false">
                                <a href="#"></a>
                                <li><a href="#"></a><a href="#">Accesorios para el bebé  </a></li>
                                <li><a href="#">Cosméticos para el bebé </a></li>
                                <li><a href="#">Fórmulas y cereales infantiles </a></li>
                                <li><a href="#">Hogar </a></li>
                                <li><a href="#">Pañales </a></li>
                                <li><a href="#">Toallas Humedas </a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="has-submenu" id="sm-14823422684210542-15" aria-haspopup="true" aria-controls="sm-14823422684210542-16" aria-expanded="false">
                                <img src="http://www.farmaciasgaleno.com.gt/images/menu-4.png">&nbsp;Cuidado Personal <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-16" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-15" aria-expanded="false">
                                <a href="#"></a>
                                <li><a href="#"></a><a href="#">Accesorios </a></li>
                                <li><a href="#">Cuidado Bucal </a></li>
                                <li><a href="#">Cuidado de la Piel </a></li>
                                <li><a href="#">Cuidado del Cabello </a></li>
                                <li><a href="#">Cuidado Femenino </a></li>
                                <li><a href="#">Dermocosmético </a></li>
                                <li><a href="#">Pañales para Adultos </a></li>
                            </ul>
                        </li>
                        <li><a href="#">
                                <img src="http://www.farmaciasgaleno.com.gt/images/menu-5.png">&nbsp;Misceláneos </a></li>
                        <li><a href="#" class="has-submenu" id="sm-14823422684210542-19" aria-haspopup="true" aria-controls="sm-14823422684210542-20" aria-expanded="false">
                                <img src="http://www.farmaciasgaleno.com.gt/images/menu-6.png">&nbsp;Salud Sexual <span class="caret"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-20" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-19" aria-expanded="false">
                                <a href="#"></a>
                                <li><a href="#"></a><a href="#">Anticonceptivos </a></li>
                                <li><a href="#">Preservativos </a></li>
                                <li><a href="#">Pruebas de Embarazo </a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>

            @yield('content')
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-3 division">
                    <h2>NUESTRAS UBICACIONES</h2>
                    <p>Galeno más cerca de ti.</p>
                    <a href="{{route('ubicaciones')}}">
                        <img src="http://www.farmaciasgaleno.com.gt/images/division-1.jpg">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 division">
                    <h2>¿QUÉ ESTÁS BUSCANDO?</h2>
                    <p>Busca tu marca preferida.</p>
                    <a href="#">
                        <img src="http://www.farmaciasgaleno.com.gt/images/division-3.jpg">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 division">
                    <h2>FARMACIAS EN TURNO</h2>
                    <p>24 horas, los 365 días al año.</p>
                    <a href="#">
                        <img src="http://www.farmaciasgaleno.com.gt/images/division-4.jpg">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3 division">
                    <h2>INFORMACIÓN MEDICAMENTOS</h2>
                    <p>Conoce más nuestros productos.</p>
                    <a href="#">
                        <img src="http://www.farmaciasgaleno.com.gt/images/division-5.jpg">
                    </a>
                </div>
            </div>

            <div class="row row-division2">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 division2">
                    <img src="http://www.farmaciasgaleno.com.gt/images/division2-1.png">
                    <h2>Llámanos</h2>
                    <a href="{{route('contactanos')}}">
                        <h2 style="font-weight: bold;">2506-9595</h2>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 division2">
                    <img src="http://www.farmaciasgaleno.com.gt/images/division2-2.png">
                    <h2>Trabaja</h2>
                    <p>con nosotros y forma parte de la familia Galeno.</p>
                    <p>Envía a: rhgaleno@gmail.com</p>
                    <a href="#">
                        <p class="text-danger" style="font-size: 12px;">Ingresa tu curriculum aquí</p>
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2 division2">
                    <img src="http://www.farmaciasgaleno.com.gt/images/division2-3.png">
                    <h2>Aseguradoras</h2>
                    <p>con las que trabajamos.</p>
                    <a href="#">
                        <img src="http://www.farmaciasgaleno.com.gt/images/division2-3-1.png">
                    </a>
                </div>
                <div class="col-xs-6 col-sm-6 col-lg-2 division2">
                    <img src="http://www.farmaciasgaleno.com.gt/images/division2-4.png">
                    <h2>Síguenos</h2>
                    <p>en nuestras redes sociales.</p>
                    <a style="background-color: #fff;" href="https://www.facebook.com/farmaciasgalenosa/">
                        <img src="http://www.farmaciasgaleno.com.gt/images/facebook-footer.png" width="40"></a>
                    <a style="background-color: #fff;" href="tel:51333300">
                        <img src="http://www.farmaciasgaleno.com.gt/images/whatsapp-footer.png" width="40"></a>
                    <a style="background-color: #fff;" href="https://www.twitter.com/farmaciasgaleno">
                        <img src="http://www.farmaciasgaleno.com.gt/images/twitter-footer.png" width="40"></a>
                </div>
                <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-0 col-lg-4 col-lg-offet-0 division2">
                    <img src="http://www.farmaciasgaleno.com.gt/images/division2-5.png">
                    <a href="{{route('contactanos')}}">
                        <h2>Contáctenos</h2>
                    </a>
                    <p>y déjanos saber qué piensas.</p>
                </div>
            </div>


            <div id="menuFooter" class="row">
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-links">
                    <h3>Medicamentos</h3>
                    <p>Analgesicos</p>
                    <p>Anestesicos</p>
                    <p>Antibióticos</p>
                    <p>Aparato Cardiovascular</p>
                    <p>Aparato Respiratorio</p>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-links">
                    <h3>Primeros Auxilios</h3>
                    <p>Alcohol</p>
                    <p>Gasa</p>
                    <p>Item 4</p>
                    <p>Vendas</p>
                    <p>Item 5</p>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-links">
                    <h3>Mama y Bebe</h3>
                    <p>Accesorios para el bebe </p>
                    <p>Cosméticos para el bebe</p>
                    <p>Fórmulas y cereales infantiles</p>
                    <p>Hogar</p>
                    <p>Pañales</p>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-links">
                    <h3>Cuidado Personal</h3>
                    <p>Accesorios</p>
                    <p>Cuidado Bucal</p>
                    <p>Cuidado de la Piel</p>
                    <p>Cuidado del Cabello</p>
                    <p>Cuidado Femenino</p>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-links">
                    <h3>Miscelaneos</h3>
                    <p>Item 1</p>
                    <p>Item 2</p>
                    <p>Item 3</p>
                    <p>Item 4</p>
                    <p>Item 5</p>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4 col-lg-2 footer-links">
                    <h3>Salud Sexual</h3>
                    <p>Anticonceptivos</p>
                    <p>Preservativos</p>
                    <p>Pruebas de Embarazo</p>
                </div>
            </div>

            <footer class="footer">
                <p>© 2019. Farmacias Galeno.</p>
            </footer>
        </div>
    </div>

    <style type="text/css">
        .footer-links
        {
            color: #332f7c;
            margin-top: 20px;
            margin-bottom: 25px;
            height: 150px;
        }
        .footer-links h3
        {
            text-align: left;
        }
    </style>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="http://www.farmaciasgaleno.com.gt/js/bootstrap.min.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/ie10-viewport-bug-workaround.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/scale.fix.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/jquery.smartmenus.js"></script>
    <script src="http://www.farmaciasgaleno.com.gt/js/jquery.smartmenus.bootstrap.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <!-- Bootstrap JavaScript -->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <!-- App scripts -->
    @stack('scripts')

</body>
</html>
