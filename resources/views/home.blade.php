@extends('layouts.website')

@section('content')

    <div class="navbar navbar-search" role="navigation">
        <div class="navbar-collapse collapse">
            
            <div class="navbar-form navbar-left">
                <div class="form-group">
                    <a href="/productos" class="btn btn-success btn-lg">
                        Buscar Medicamentos
                        <img id="btnBuscarProducto" src="http://www.farmaciasgaleno.com.gt/images/buscar.png" width="30">
                    </a>                    
                </div>                
            </div>

            <!-- Right nav -->
            <ul class="nav navbar-nav navbar-right" data-smartmenus-id="15681785530615962" style="margin: 5px 15px">
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


@endsection
