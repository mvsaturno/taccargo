<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <link rel="stylesheet" href="css/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>
    </head>
    <body>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div id="div_main_index" class="container_12">
                <div id="div_main_banner" class="slider-wrapper theme-light">
                    <div id="slider" class="nivo_slider">
                        <img src="img/slider1.jpg" data-thumb="img/slider1.jpg" style="visibility: hidden; display: inline; width: 1115px;" />
                        <img src="img/slider2.jpg" data-thumb="img/slider2.jpg" data-transition="slideInLeft" style="visibility: hidden; display: inline; width: 1115px;" />
                        <img src="img/slider3.jpg" data-thumb="img/slider3.jpg" data-transition="slideInLeft" style="visibility: hidden; display: inline; width: 1115px;" />
                        <img src="img/slider4.jpg" data-thumb="img/slider4.jpg" data-transition="slideInLeft" style="visibility: hidden; display: inline; width: 1115px;" />
                    </div>
                </div>

                <div class="div_main_content grid_4">
                    <h3>Empresa</h3>
                    
                    <img src="img/small_truck.jpg" class="grid_4 alpha">
                    <div class="div_main_content_txt" >
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                        <a href="#">Saiba Mais</a>
                    
                    </div> 
                </div>
                
                <div class="div_main_content grid_4">
                    <h3>Serviços</h3>
                    
                    <img src="img/small_truck.jpg" class="grid_4 alpha">
                    <div class="div_main_content_txt">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                        <a href="#">Saiba Mais</a>
                    
                    </div> 
                </div>
                
                <div class="div_main_content grid_4">
                    <h3>Cotações</h3>
                    
                    <img src="img/small_truck.jpg" class="grid_4 alpha">
                    <div class="div_main_content_txt">
                        <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                        <a href="#">Saiba Mais</a>
                    
                    </div> 
                </div>

        </div>
    </div>
    <?php include 'bottom_menu.php'; ?>
    </body>
</html>