@extends('layouts.website')

@section('content')

<link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/bootstrap.min.css">
<link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/jquery.smartmenus.bootstrap.css">
<link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/ie10-viewport-bug-workaround.css">
<link rel="stylesheet" href="http://www.farmaciasgaleno.com.gt/css/justified-nav.css">
<link rel="stylesheet" href="https://static.helloumi.com/webchat-widget/css/main.css">

<script src="http://www.farmaciasgaleno.com.gt/js/ie-emulation-modes-warning.js"></script>
<script src="http://www.farmaciasgaleno.com.gt/js/jquery-3.1.1.min.js"></script>


<div class="container">
    <div class="navbar-logo" role="navigation">
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/home" style="float: left;">
                        <img src="http://www.farmaciasgaleno.com.gt/images/logo.png" width="225"/>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="promociones.aspx">
                        <img src="http://www.farmaciasgaleno.com.gt/images/descargar-suplemento.png">
                    </a>
                </li>
                <li>
                    <a href="ubicaciones.aspx?horario=false">
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
                <li><a href="productos.aspx?tag=Medicamentos" class="has-submenu" id="sm-14823422684210542-1" aria-haspopup="true" aria-controls="sm-14823422684210542-2" aria-expanded="false">
                    <img src="http://www.farmaciasgaleno.com.gt/images/menu-1.png">&nbsp;Medicamentos <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="sm-14823422684210542-2" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-1" aria-expanded="false">
                        <a href="productos.aspx?tag=Medicamentos"></a>
                        <li><a href="productos.aspx?tag=Medicamentos"></a><a href="productos.aspx?tag=Analgesicos">Analgésicos </a></li>
                        <li><a href="productos.aspx?tag=Anestesicos">Anestésicos </a></li>
                        <li><a href="productos.aspx?tag=Antibioticos">Antibióticos </a></li>
                        <li><a href="productos.aspx?tag=Aparato Cardiovascular">Aparato Cardiovascular </a></li>
                        <li><a href="productos.aspx?tag=Aparato Respiratorio" class="has-submenu" id="sm-14823422684210542-3" aria-haspopup="true" aria-controls="sm-14823422684210542-4" aria-expanded="false">Aparato Respiratorio <span class="caret pull-right"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-4" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-3" aria-expanded="false">
                                <a href="productos.aspx?tag=Aparato Respiratorio"></a>
                                <li><a href="productos.aspx?tag=Aparato Respiratorio"></a><a href="productos.aspx?tag=Gripe y Tos">Gripe y Tos</a></li>
                                <li><a href="productos.aspx?tag=Antihistaminicos">Antihistamínicos</a></li>
                                <li><a href="productos.aspx?tag=Antitusigenos">Antitusígenos</a></li>
                                <li><a href="productos.aspx?tag=Asma">Asma</a></li>
                                <li><a href="productos.aspx?tag=Revulsivos">Revulsivos</a></li>
                            </ul>
                        </li>
                        <li><a href="productos.aspx?tag=Oftalmologicos">Oftalmológicos </a></li>
                        <li><a href="productos.aspx?tag=Dermatologicos">Dermatológicos </a></li>
                        <li><a href="productos.aspx?tag=Diabeticos">Diabeticos </a></li>
                        <li><a href="productos.aspx?tag=Estomacales" class="has-submenu" id="sm-14823422684210542-5" aria-haspopup="true" aria-controls="sm-14823422684210542-6" aria-expanded="false">Estomacales <span class="caret pull-right"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-6" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-5" aria-expanded="false">
                                <a href="productos.aspx?tag=Estomacales"></a>
                                <li><a href="productos.aspx?tag=Estomacales"></a><a href="productos.aspx?tag=Antiparasitarios">Antiparasitarios</a></li>
                                <li><a href="productos.aspx?tag=Aparato Digestivo y Metabolismo">Aparato Digestivo y Metabolismo</a></li>
                            </ul>
                        </li>
                        <li><a href="productos.aspx?tag=Hormonas">Hormonas </a></li>
                        <li><a href="productos.aspx?tag=Otologicos">Otológicos </a></li>
                        <li><a href="productos.aspx?tag=Prescripcion Medica">Prescripcion Médica</a></li>
                        <li><a href="productos.aspx?tag=Genito Urinarios">Prod.Genito Urinarios </a></li>
                        <li><a href="productos.aspx?tag=Sangre y Hematologia">Sangre y Hematología </a></li>
                        <li><a href="productos.aspx?tag=Sistema Nervioso" class="has-submenu" id="sm-14823422684210542-9" aria-haspopup="true" aria-controls="sm-14823422684210542-10" aria-expanded="false">Sistema Nervioso <span class="caret pull-right"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-10" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-9" aria-expanded="false">
                                <a href="productos.aspx?tag=Sistema Nervioso"></a>
                                <li><a href="productos.aspx?tag=Sistema Nervioso"></a><a href="productos.aspx?tag=Antineuriticos">Antineuríticos</a></li>
                                <li><a href="productos.aspx?tag=Antiepilepticos">Antiepilépticos</a></li>
                                <li><a href="productos.aspx?tag=Antiparkinsonianos">Antiparkinsonianos</a></li>
                                <li><a href="productos.aspx?tag=Psicolepticos">Psicolépticos</a></li>
                            </ul>
                        </li>
                        <li><a href="productos.aspx?tag=Soluciones Hospitalarias">Soluciones Hospitalarias </a></li>
                        <li><a href="productos.aspx?tag=Suplementos Alimenticios" class="has-submenu" id="sm-14823422684210542-11" aria-haspopup="true" aria-controls="sm-14823422684210542-12" aria-expanded="false">Suplementos Alimenticios <span class="caret pull-right"></span></a>
                            <ul class="dropdown-menu" id="sm-14823422684210542-12" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-11" aria-expanded="false">
                                <a href="productos.aspx?tag=Suplementos Alimenticios"></a>
                                <li><a href="productos.aspx?tag=Suplementos Alimenticios"></a><a href="productos.aspx?tag=Alimentos Generales">Alimentos Generales</a></li>
                                <li><a href="productos.aspx?tag=Complementos Alimenticios">Complementos Alimenticios</a></li>
                                <li><a href="productos.aspx?tag=Leche">Leche</a></li>
                                <li><a href="productos.aspx?tag=Suplementos Alimenticios">Suplementos Alimenticios</a></li>
                            </ul>
                        </li>
                        <li><a href="productos.aspx?tag=Varios">Varios </a></li>
                        <li><a href="productos.aspx?tag=Vitaminas">Vitaminas </a></li>
                    </ul>
                </li>
                <li><a href="productos.aspx?tag=Primeros Auxilios">
                    <img src="http://www.farmaciasgaleno.com.gt/images/menu-2.png">&nbsp;Primeros Auxilios </a></li>
                <li><a href="productos.aspx?tag=mama y bebe" class="has-submenu" id="sm-14823422684210542-13" aria-haspopup="true" aria-controls="sm-14823422684210542-14" aria-expanded="false">
                    <img src="http://www.farmaciasgaleno.com.gt/images/menu-3.png">&nbsp;Mamá y Bebé <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="sm-14823422684210542-14" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-13" aria-expanded="false">
                        <a href="productos.aspx?tag=Mama y Bebe"></a>
                        <li><a href="productos.aspx?tag=Mama y Bebe"></a><a href="productos.aspx?tag=Accesorios para el bebe ">Accesorios para el bebé  </a></li>
                        <li><a href="productos.aspx?tag=Cosmeticos para el bebe">Cosméticos para el bebé </a></li>
                        <li><a href="productos.aspx?tag=Formulas y cereales">Fórmulas y cereales infantiles </a></li>
                        <li><a href="productos.aspx?tag=Hogar">Hogar </a></li>
                        <li><a href="productos.aspx?tag=Panales">Pañales </a></li>
                        <li><a href="productos.aspx?tag=Toallas Humedas">Toallas Humedas </a></li>
                    </ul>
                </li>
                <li><a href="productos.aspx?tag=Cuidado Personal" class="has-submenu" id="sm-14823422684210542-15" aria-haspopup="true" aria-controls="sm-14823422684210542-16" aria-expanded="false">
                    <img src="http://www.farmaciasgaleno.com.gt/images/menu-4.png">&nbsp;Cuidado Personal <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="sm-14823422684210542-16" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-15" aria-expanded="false">
                        <a href="productos.aspx?tag=Cuidado Personal"></a>
                        <li><a href="productos.aspx?tag=Cuidado Personal"></a><a href="productos.aspx?tag=Accesorios">Accesorios </a></li>
                        <li><a href="productos.aspx?tag=Cuidado Bucal">Cuidado Bucal </a></li>
                        <li><a href="productos.aspx?tag=Cuidado de la Piel">Cuidado de la Piel </a></li>
                        <li><a href="productos.aspx?tag=Cuidado del Cabello">Cuidado del Cabello </a></li>
                        <li><a href="productos.aspx?tag=Cuidado Femenino">Cuidado Femenino </a></li>
                        <li><a href="productos.aspx?tag=Dermocosmeticos">Dermocosmético </a></li>
                        <li><a href="productos.aspx?tag=Panales para Adultos">Pañales para Adultos </a></li>
                    </ul>
                </li>
                <li><a href="productos.aspx?tag=Misceláneos">
                    <img src="http://www.farmaciasgaleno.com.gt/images/menu-5.png">&nbsp;Misceláneos </a></li>
                <li><a href="productos.aspx?tag=Salud Sexual" class="has-submenu" id="sm-14823422684210542-19" aria-haspopup="true" aria-controls="sm-14823422684210542-20" aria-expanded="false">
                    <img src="http://www.farmaciasgaleno.com.gt/images/menu-6.png">&nbsp;Salud Sexual <span class="caret"></span></a>
                    <ul class="dropdown-menu" id="sm-14823422684210542-20" role="group" aria-hidden="true" aria-labelledby="sm-14823422684210542-19" aria-expanded="false">
                        <a href="productos.aspx?tag=Salud Sexual"></a>
                        <li><a href="productos.aspx?tag=Salud Sexual"></a><a href="productos.aspx?tag=Anticonceptivo">Anticonceptivos </a></li>
                        <li><a href="productos.aspx?tag=Preservativos">Preservativos </a></li>
                        <li><a href="productos.aspx?tag=Pruebas de Embarazo">Pruebas de Embarazo </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>


    <div class="navbar navbar-search" role="navigation">
        <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav" data-smartmenus-id="15681785530595283">
                <li><a href="programasdesalud.aspx">Programas de Salud</a></li>
                <li><a href="pdf/suplementoFarmaciasGaleno.pdf">Descargar Suplemento</a></li>
                <!--<li><a href="#">Mi Cuenta</a></li>-->
            </ul>
            <div class="navbar-form navbar-left">
                <div class="form-group">
                    <input id="tbBuscarProducto" type="text" class="form-control" placeholder="Buscar Medicamento...">
                </div>
                <img id="btnBuscarProducto" src="http://www.farmaciasgaleno.com.gt/images/buscar.png" width="30">
            </div>
            <!-- Right nav -->
            <ul class="nav navbar-nav navbar-right" data-smartmenus-id="15681785530615962">
                <li>
                    <a style="background-color: #fff;" href="https://www.facebook.com/farmaciasgalenosa/">
                        <img src="http://www.farmaciasgaleno.com.gt/images/facebook-footer.png" width="25"></a>
                </li>
                <li>
                    <a style="background-color: #fff;" href="tel:51333300">
                        <img src="http://www.farmaciasgaleno.com.gt/images/whatsapp-footer.png" width="25"></a>
                </li>
                <li>
                    <a style="background-color: #fff;" href="https://www.twitter.com/farmaciasgaleno">
                        <img src="http://www.farmaciasgaleno.com.gt/images/twitter-footer.png" width="25"></a>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>

    <div class="row col-lg-12">
        <!-- Division 1 -->
        <div class="col-lg-3" style="text-align: center;">
            <img src="http://www.farmaciasgaleno.com.gt/images/cuadro-1.jpg">
            <img src="http://www.farmaciasgaleno.com.gt/images/cuadro-2.jpg">
            <img src="http://www.farmaciasgaleno.com.gt/images/cuadro-3.jpg">
            <img src="http://www.farmaciasgaleno.com.gt/images/cuadro-4.jpg">
        </div>
        <div class="col-lg-9">
            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-bottom:30px;">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                    <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <img src="http://www.farmaciasgaleno.com.gt/images/banner-carousel-1.jpg">
                    </div>

                    <div class="item">
                        <img src="http://www.farmaciasgaleno.com.gt/images/banner-carousel-2.jpg">
                    </div>

                    <div class="item active">
                        <img src="http://www.farmaciasgaleno.com.gt/images/banner-carousel-3.jpg">
                    </div>

                    <div class="item">
                        <img src="http://www.farmaciasgaleno.com.gt/images/banner-carousel-4.jpg">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--Mas contenido-->
            <div class="row">
                <div class="col-lg-3" style="padding-right: 0px;">
                    <div id="myCarouselCuadroOfertas" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarouselCuadroOfertas" data-slide-to="0" class=""></li>
                            <li data-target="#myCarouselCuadroOfertas" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarouselCuadroOfertas" data-slide-to="2" class=""></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <img src="http://www.farmaciasgaleno.com.gt/images/ofertas/cuadro-ofertas-1.jpg">
                            </div>

                            <div class="item active">
                                <img src="http://www.farmaciasgaleno.com.gt/images/ofertas/cuadro-ofertas-2.jpg">
                            </div>

                            <div class="item">
                                <img src="http://www.farmaciasgaleno.com.gt/images/ofertas/cuadro-ofertas-3.jpg">
                            </div>

                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarouselCuadroOfertas" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarouselCuadroOfertas" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9" style="margin-bottom:30px;padding-left: 30px;">
                    <div id="myCarouselOfertas" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarouselOfertas" data-slide-to="0" class=""></li>
                            <li data-target="#myCarouselOfertas" data-slide-to="1" class=""></li>
                            <li data-target="#myCarouselOfertas" data-slide-to="2" class=""></li>
                            <li data-target="#myCarouselOfertas" data-slide-to="3" class="active"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <img src="http://www.farmaciasgaleno.com.gt/images/promociones/oferta-carousel-1.jpg">
                            </div>

                            <div class="item">
                                <img src="http://www.farmaciasgaleno.com.gt/images/promociones/oferta-carousel-2.jpg">
                            </div>

                            <div class="item">
                                <img src="http://www.farmaciasgaleno.com.gt/images/promociones/oferta-carousel-3.jpg">
                            </div>

                            <div class="item active">
                                <img src="http://www.farmaciasgaleno.com.gt/images/promociones/oferta-carousel-4.jpg">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarouselOfertas" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarouselOfertas" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--Mas contenido-->
            <div class="row">
                <div class="col-lg-8">
                    <h2 style="padding-bottom:15px;">Programas de Salud</h2>
                    <div id="myCarouselProgramasSalud" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarouselProgramasSalud" data-slide-to="0" class=""></li>
                            <li data-target="#myCarouselProgramasSalud" data-slide-to="1"></li>
                            <li data-target="#myCarouselProgramasSalud" data-slide-to="2"></li>
                            <li data-target="#myCarouselProgramasSalud" data-slide-to="3"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div id="carouselInnerProgramasSalud" class="carousel-inner" role="listbox"></div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarouselProgramasSalud" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarouselProgramasSalud" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div id="divNoticias" class="col-lg-4">
                    <div id="divBusquedaNoticia">
                        <div class="input-group stylish-input-group" style="width: 240px; padding-top: 15px;">
                            <input id="tbBuscarNoticia" type="text" class="form-control" placeholder="Buscar Noticias...">
                            <span class="input-group-addon">
                                <button id="btnBuscarNoticia" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                        <div id="divListadoNoticias" class="list-group" style="width: 240px; padding-top: 15px; overflow-y:scroll; overflow-x:hidden;height:360px;"><div style="background-color:#3b7d9c;border-radius:10px;height:125px;"><h1 style="color:#fff;font-size:20px;text-align:center;padding-top:5px;">Tips De Salud</h1></div><div style="background-color:#3b7d9c;border-radius:10px;height:125px;"><h1 style="color:#fff;font-size:20px;text-align:center;padding-top:5px;">Capsulas Informativas</h1></div><div style="background-color:#3b7d9c;border-radius:10px;height:125px;"><h1 style="color:#fff;font-size:20px;text-align:center;padding-top:5px;">Entretenimiento</h1></div></div>
                    </div>
                </div>
            </div>
            
        </div>
        <!--Mas contenido-->
            <div class="row" style="padding-top: 20px;">
                <div class="col-lg-12" style="margin-top:20px;">
                    <div class="marquee" style="text-indent: -19px;">
                        <div class="marquee-text">
                            <b>Este negocio depende de Dios y de usted...</b>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col-lg-2 division division-first">
            <h2>NUESTRAS UBICACIONES</h2>
            <p>Galeno más cerca de ti.</p>
            <a href="ubicaciones.aspx?horario=false">
                <img src="http://www.farmaciasgaleno.com.gt/images/division-1.jpg">
            </a>
        </div>
        <div class="col-lg-3 division">
            <h2>¿QUÉ ESTÁS BUSCANDO?</h2>
            <p>Busca tu marca preferida.</p>
            <a href="productos.aspx?tag=">
                <img src="http://www.farmaciasgaleno.com.gt/images/division-3.jpg">
            </a>
        </div>
        <div class="col-lg-3 division">
            <h2>FARMACIAS EN TURNO</h2>
            <p>24 horas, los 365 días al año.</p>
            <a href="ubicaciones.aspx?horario=true">
                <img src="http://www.farmaciasgaleno.com.gt/images/division-4.jpg">
            </a>
        </div>
        <div class="col-lg-3 division division-last">
            <h2>INFORMACIÓN MEDICAMENTOS</h2>
            <p>Conoce más nuestros productos.</p>
            <a href="productos.aspx?tag=">
                <img src="http://www.farmaciasgaleno.com.gt/images/division-5.jpg">
            </a>
        </div>
    </div>

    <div class="row row-division2">
        <div class="col-lg-2 division2 division2-first">
            <img src="http://www.farmaciasgaleno.com.gt/images/division2-1.png">
            <h2>Llámanos</h2>
            <a href="tel:25069595">
                <h2 style="font-weight: bold;">2506-9595</h2>
            </a>
        </div>
        <div class="col-lg-2 division2">
            <img src="http://www.farmaciasgaleno.com.gt/images/division2-2.png">
            <h2>Trabaja</h2>
            <p>con nosotros y forma parte de la familia Galeno.</p>
            <p>Envía a: rhgaleno@gmail.com</p>
            <a href="mailto:rhgaleno@gmail.com?Subject=CV%20Plaza%20Farmacias%20Galeno">
                <p class="text-danger" style="font-size: 12px;">Ingresa tu curriculum aquí</p>
            </a>
        </div>
        <div class="col-lg-2 division2">
            <img src="http://www.farmaciasgaleno.com.gt/images/division2-3.png">
            <h2>Aseguradoras</h2>
            <p>con las que trabajamos.</p>
            <a href="aseguradoras.aspx">
                <img src="http://www.farmaciasgaleno.com.gt/images/division2-3-1.png">
            </a>
        </div>
        <div class="col-lg-2 division2">
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
        <div class="col-lg-3 division2 division2-last">
            <img src="http://www.farmaciasgaleno.com.gt/images/division2-5.png">
            <a href="contactenos.aspx">
                <h2>Contáctenos</h2>
            </a>
            <p>y déjanos saber qué piensas.</p>
        </div>
    </div>


    <div id="menuFooter" class="row">
        <div class="col-lg-2 division3">
            <h2>Medicamentos</h2>
            <p>Analgesicos</p>
            <p>Anestesicos</p>
            <p>Antibióticos</p>
            <p>Aparato Cardiovascular</p>
            <p>Aparato Respiratorio</p>
        </div>
        <div class="col-lg-2 division3">
            <h2>Primeros Auxilios</h2>
        </div>
        <div class="col-lg-2 division3">
            <h2>Mama y Bebe</h2>
            <p>Accesorios para el bebe </p>
            <p>Cosméticos para el bebe</p>
            <p>Fórmulas y cereales infantiles</p>
            <p>Hogar</p>
            <p>Pañales</p>
        </div>
        <div class="col-lg-2 division3">
            <h2>Cuidado Personal</h2>
            <p>Accesorios</p>
            <p>Cuidado Bucal</p>
            <p>Cuidado de la Piel</p>
            <p>Cuidado del Cabello</p>
            <p>Cuidado Femenino</p>
        </div>
        <div class="col-lg-2 division3">
            <h2>Miscelaneos</h2>
        </div>
        <div class="col-lg-2 division3">
            <h2>Salud Sexual</h2>
            <p>Anticonceptivos</p>
            <p>Preservativos</p>
            <p>Pruebas de Embarazo</p>
        </div>
    </div>

    <footer class="footer">
        <p>© 2016. Farmacias Galeno.</p>
    </footer>
</div>
@endsection
