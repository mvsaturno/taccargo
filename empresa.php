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
            <div id="div_main_index" class="container_12">
                <div id="div_empresa">
                    <h1>Empresa</h1>
                    <div>
                        <p>
                            <img id="image_empresa" src="img/empresa_logistica.png"> 
                            A TAC Cargo surgiu no mercado de transporte e logística a fim de oferecer um diferencial no atendimento e comunicação com os clientes. Buscamos na dificuldade do mercado aprimorarmo-nos constantemente, proporcionando um serviço diferenciado, investindo em tecnologia e qualidade na informação.
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
                        <p class="main_text">
                            Agilidade<br>
                            Comprometimento<br>
                            Planejamento<br>
                            Inovação<br>
                        </p>
                    </div> 
                </div>
                
               <div class="div_main_content grid_4">
                   <h3>Diferencial</h3>
                    <div class="div_main_content_txt" >
                        <p class="main_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies
                            arcu tellus. Quisque quis turpis vel risus convallis sodales non at purus. Etiam pellentesque, 
                            ipsum eget facilisis accumsan, nulla erat lacinia mauris, sed vehicula lacus metus vel ipsum.</p>
                    </div> 
                </div>

        </div>
    </div>
    <?php include 'bottom_menu.php'; ?>
    </body>
</html>