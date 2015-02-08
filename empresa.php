<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <link rel="stylesheet" href="css/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
    </head>
    <body>
        <?php $menu["empresa"] = "class='menu_active'"?>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div id="div_main_empresa" class="container_12">
                <div id="div_empresa">
                    <h1>Empresa</h1>
                    <div>
                        <p>
                            <img id="image_empresa" src="img/empresa_logistica.png"> 
                            A TAC Cargo surgiu no mercado de transporte e logística a fim de oferecer um diferencial no atendimento e comunicação com os clientes. Buscamos na dificuldade do mercado aprimorarmo-nos constantemente, proporcionando um serviço diferenciado, investindo em tecnologia e qualidade na informação. Buscamos ser referência no transporte e logística de cargas, superando a expectativa dos clientes através da excelência do serviço prestado.
                        </p>
                    </div>
                    
                    <div class="clear"></div>
                </div>
                <div class="div_main_content grid_4">
                    <h3>Miss&atilde;o</h3>
                    <div class="div_main_content_txt" >
                        <p class="main_text">Atender as necessidades de nossos clientes, oferecendo solução em logística, composta por uma comunicação efetiva, atendimento com qualidade e agilidade nas informações.</p>
                    </div> 
                </div>
                
               <div class="div_main_content grid_4">
                   <h3>Princ&iacute;pios</h3>
                    <div class="div_main_content_txt" >
                        <ul id="ul_principios">
                            <li>Agilidade nas entregas e rapidez nas informações.</li>
                            <li>Comprometimento com os clientes.</li>
                            <li>Planejamento para que não haja transtornos.</li>
                            <li>Inovação em nossa estrutura para melhor atender as necessidades dos clientes.</li>
                        </ul>
                    </div> 
                </div>
                
               <div class="div_main_content grid_4">
                   <h3>Diferencial</h3>
                    <div class="div_main_content_txt" >
                        <p class="main_text">
                            A TAC Cargo trabalha priorizando a informação, pois sabe que a agilidade na comunicação é essencial para seus clientes, o que a torna favorita dentre as outras.
                        </p>
                    </div> 
                </div>

        </div>
    </div>
    <?php include 'bottom_menu.php'; ?>
    </body>
</html>