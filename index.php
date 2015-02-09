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
                  $.colorbox({
                        inline: true,
                        href:"#pop_up",
                        open: true
                  });
            });
        </script>
    </head>
    <body>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div id="div_main_index" class="container_12">
                <div id="div_main_banner">
                    <div id="div_banner_wrapper" class="slider-wrapper theme-light">
                        <div id="slider" class="nivo_slider">
                            <img src="img/slider1.jpg" data-thumb="img/slider1.jpg" data-transition="slideInLeft" />
                            <img src="img/slider2.jpg" data-thumb="img/slider2.jpg" data-transition="slideInLeft" />
                            <img src="img/slider3.jpg" data-thumb="img/slider3.jpg" data-transition="slideInLeft" />
                            <img src="img/slider4.jpg" data-thumb="img/slider4.jpg" data-transition="slideInLeft" />
                        </div>
                    </div>
                </div>

                <div class="div_main_content grid_4">
                    <h3>Empresa</h3>
                    <div class="div_main_content_txt" >
                        <p class="align_center"><img src="img/small_truck.jpg"></p>
                        <p class="main_text">Para a TAC Cargo, o desafio constante é prestar serviços da mais alta qualidade, com uma atenção especial às constantes mudanças do mercado, fazendo da qualidade um dos meios para atingir nossos objetivos.</p>
                        <a href="/empresa.php">Saiba Mais</a>
                    
                    </div> 
                </div>
                
               <div class="div_main_content grid_4">
                   <h3>Servi&ccedil;os</h3>
                    <div class="div_main_content_txt" >
                        <p class="align_center"><img src="img/servicos_home.jpg"></p>
                        <p class="main_text">Conheça mais sobre os serviços realizados pela TAC Cargo.</p>
                        <a href="/servicos.php">Saiba Mais</a>
                    
                    </div> 
                </div>
                
               <div class="div_main_content grid_4">
                   <h3>Cota&ccedil;&otilde;es</h3>
                    <div class="div_main_content_txt" >
                        <p class="align_center"><img src="img/cotacoes_home.jpg"></p>
                        <p class="main_text">Para solicitar uma cotação preencha o formulário. É necessário informar os dados para contato, as características da carga e o local de entrega ou coleta.</p>
                        <a href="/cotacoes.php">Saiba Mais</a>
                    
                    </div> 
                </div>

        </div>
    </div>
        <div style="display: none">
            <div id="pop_up" style='padding:10px;'>
                 <img id="logistica" src="img/pop_up_rodoExpress.png">
                </p>
            </div>
        </div>
    <?php include 'bottom_menu.php'; ?>
    </body>
</html>