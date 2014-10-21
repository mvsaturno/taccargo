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
        <?php $menu["servicos"] = "class='menu_active'"?>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div id="div_main_index" class="container_12">
                <div id="div_servicos">
                    <div id="div_textos_servicos">
                        <h1>Servi&ccedil;os</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies
                            arcu tellus. Quisque quis turpis vel risus convallis sodales non at purus. Etiam pellentesque, 
                            ipsum eget facilisis accumsan, nulla erat lacinia mauris, sed vehicula lacus metus vel ipsum. 
                            Suspendisse porttitor vel ipsum ut elementum. Fusce in ligula et nibh suscipit adipiscing a non velit. 
                            Integer dapibus mi velit, et varius nisl convallis
                            at. Duis ullamcorper augue et tempus dapibus. 
                            Suspendisse molestie neque vel lacus porta, a euismod nunc elementum.
                            
                        </p>
                    </div>
                    <div id="div_itens_servicos">
                            <h2>Confira nossos servi&ccedil;os</h2>
                            <ul>
                                <li>Transporte Rodovi&aacute;rio</li>
                                <li>Transporte A&eacute;reo</li>
                                <li>Transporte Mar&iacute;timo</li>
                                <li>Coletas</li>
                                <li>Transporte Rápido</li>
                                <li>Lorem ipsum dolor</li>
                            </ul>
                        </div>
                    
                    <div class="clear"></div>
                </div>
                <div class="div_main_content grid_4">
                    <h3>Rodovi&aacute;rio</h3>
                    <div class="div_main_content_txt" >
                        <p class="align_center"><img src="img/caminhao_vermelho_tac.png"></p>
                        <p class="main_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies
                            arcu tellus. Quisque quis turpis vel risus convallis sodales non at purus. Etiam pellentesque, 
                            ipsum eget facilisis accumsan, nulla erat lacinia mauris, sed vehicula lacus metus vel ipsum.</p>
                    </div> 
                </div>
                
               <div class="div_main_content grid_4">
                   <h3>A&eacute;reo</h3>
                    <div class="div_main_content_txt" >
                        <p class="align_center"><img src="img/transporte_areo_tac.png"></p>
                        <p class="main_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ultricies
                            arcu tellus. Quisque quis turpis vel risus convallis sodales non at purus. Etiam pellentesque, 
                            ipsum eget facilisis accumsan, nulla erat lacinia mauris, sed vehicula lacus metus vel ipsum.</p>
                    </div> 
                </div>
                
               <div class="div_main_content grid_4">
                   <h3>Mar&iacute;timo</h3>
                    <div class="div_main_content_txt" >
                        <p class="align_center"><img src="img/transporte_maritmo_tac.png"></p>
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