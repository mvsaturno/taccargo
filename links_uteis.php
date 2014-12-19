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
        <?php $menu["links"] = "class='menu_active'" ?>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div class="container_12">
                <div class="div_cot_txt">
                    <h1>Links &Uacute;teis</h1>
                    <p>Abaixo uma série de links úteis com informações relevantes a transportes, mercado e informações em geral.</p>
                </div>
                <div class="div_links">
                    <div class="grid_5">
                        <div class="link_util" id="site_transportes">
                            <h4>Minist&eacute;rio dos Transportes</h4>
                            <h5><a href="http://www.transportes.gov.br" target="_blank">www.transportes.gov.br</a></h5>
                            <p>O Ministério dos Transportes do Brasil é o órgão responsável pelo assessoramento do presidente da República na execução e formulação e da política de transporte do país.</p>
                        </div>
                        
                        <div class="link_util" id="site_sefaz">
                            <h4>A Secretaria da Fazenda do Rio Grande do Sul</h4>
                            <h5><a href="https://www.sefaz.rs.gov.br/Site/index.aspx?" target="_blank">www.sefaz.rs.gov.br/Site/index.aspx?</a></h5>
                            <p>A Secretaria da Fazenda do Rio Grande do Sul tem sua sede em Porto Alegre e está presente em todo o Estado do Rio Grande do Sul, com cerca de 3 mil pessoas atuando em suas repartições.</p>
                        </div>
                        
                        <div class="link_util" id="site_setcergs">
                            <h4>SETCERGS</h4>
                            <h5><a href="http://www.setcergs.com.br/site/default.asp" target="_blank">www.setcergs.com.br/site/default.asp</a></h5>
                            <p>O Sindicato das Empresas de Transporte de Cargas e Logística no Estado do Rio Grande do Sul - SETCERGS foi fundado em agosto de 1959 e é o órgão de representação sindical patronal do transporte rodoviário de cargas com base territorial na maior parte do Estado do Rio Grande do Sul.</p>
                        </div>
                        
                    </div>
                    <div class="grid_7">
                        <div id="div_img_site">
                            <p class="align_center">
                                <img id="img_site_transportes" src="img/site_transportes.png" class="img_link_util displayNone"/>
                                <img id="img_site_sefaz" src="img/sefaz.PNG" class="img_link_util displayNone"/>
                                <img id="img_site_setcergs" src="img/setcergs.PNG" class="img_link_util displayNone"/>
                            </p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'bottom_menu.php'; ?>
</body>
</html>