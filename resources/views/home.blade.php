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
                    <a style="background-color: #fff;" href="#">
                        <img src="http://www.farmaciasgaleno.com.gt/images/facebook-footer.png" width="25"></a>
                </li>
                <li>
                    <a style="background-color: #fff;" href="#">
                        <img src="http://www.farmaciasgaleno.com.gt/images/whatsapp-footer.png" width="25"></a>
                </li>
                <li>
                    <a style="background-color: #fff;" href="#">
                        <img src="http://www.farmaciasgaleno.com.gt/images/twitter-footer.png" width="25"></a>
                </li>
            </ul>

        </div>
        <!--/.nav-collapse -->
    </div>

    <div class="row col-lg-12">
        <!-- Division 1 -->
        <div class="col-lg-3">
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12 ">
                    <img class="img-responsive" src="http://www.farmaciasgaleno.com.gt/images/cuadro-1.jpg">
                </div>   
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12 ">
                    <img class="img-responsive" src="http://www.farmaciasgaleno.com.gt/images/cuadro-2.jpg">
                </div>   
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12 ">
                    <img class="img-responsive" src="http://www.farmaciasgaleno.com.gt/images/cuadro-3.jpg">
                </div>   
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-12 ">
                    <img class="img-responsive" src="http://www.farmaciasgaleno.com.gt/images/cuadro-4.jpg">
                </div>   
            </div>
        </div>
        <br>
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
        </div>
        <!--Mas contenido-->
        <div class="col-lg-9">
            <img class="img-responsive" src="http://www.farmaciasgaleno.com.gt/images/promociones/oferta-carousel-1.jpg">                    
        </div>                
        <br>
        <div class="col-lg-9">
            <img class="img-responsive" src="http://www.farmaciasgaleno.com.gt/images/promociones/oferta-carousel-2.jpg">
        </div>
        <br>
        <div class="col-lg-9">
            <img class="img-responsive" src="http://www.farmaciasgaleno.com.gt/images/promociones/oferta-carousel-3.jpg">
        </div>                
            
        <!--Mas contenido-->
            <div class="row" style="padding-top: 20px;">
                <div class="col-lg-12" style="margin-top:20px;">
                    <div class="marquee" style="text-indent: -19px;">
                        <div class="marquee-text">
                            <b>Desarrollo Web  -  Universidad Mariano Gálvez</b>
                        </div>
                    </div>
                </div>
            </div>
    </div>


@endsection
