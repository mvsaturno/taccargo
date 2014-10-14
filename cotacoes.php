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
            <div class="container_12">
                 <div class="div_cot_txt">
                    <h1>Cotações</h1>
                    <p>Mais um serviço on-line para agilizar e facilitar o relacionamento da TAC Cargo com seus clientes. 
                        O orçamento do valor do frete depende de algumas variáveis como origem, destino, tipo de carga
                        (características), valor da Nota Fiscal e o peso da carga. Aproveite e envie agora mesmo uma 
                        solicitação de cotação de transporte de mercadorias direto para a TAC Cargo, preenchendo 
                        todos os campos do formulário abaixo.</p>
                 </div>
                 <div class="div_cot_form">
                    <form action="" name="cotacao" id="cotacao">
                        
                        <div class="div_cot_form_left grid_5">
                        
                            <div>
                            <label for="nome">Nome/Empresa:</label>
                            <input type="text" name="nome" id="nome" class="alpha grid_5" />
                            </div>

                            <div>
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" class="alpha grid_3" />
                            
                            <label for="tel">Telefone:</label>
                            <input type="text" name="tel" id="tel" class="alpha grid_3" />
                            </div>

                            <div>
                            <label for="origem">Origem:</label>
                            <input type="text" name="origem" id="origem" class="alpha grid_5" />
                            </div>

                            <div>
                            <label for="destino">Destino:</label>
                            <input type="text" name="destino" id="destino" class="alpha grid_5" />
                            </div>

                            <div>
                            <label for="destinatario">Destinatário:</label>
                            <input type="text" name="destinatario" id="destinatario" class="alpha grid_5" />
                            </div>

                            <div>
                            <label for="descricao">Descricao:</label>
                            <textarea name="descricao" id="descricao" class="alpha grid_5"></textarea>
                            </div>

                        </div>

                        <div class="div_cor_form_right grid_6">
                        
                        <div>
                        <label for="valor">Valor Declarado:</label>
                        <input type="text" name="valor" id="valor" class="alpha grid_4" />
                        </div>

                        <div>
                        <label for="seguro">Seguro Prório?</label>
                        <input type="text" name="seguro" id="seguro" class="alpha grid_2" />
                        </div>

                        <div>
                        <label for="peso_bruto">Peso Bruto(kg):</label>
                        <input type="text" name="peso_bruto" id="peso_bruto" class="alpha grid_3" />
                        </div>

                        <div>
                        <label for="qtde_volumes">Quantidade de Volumes:</label>
                        <input type="text" name="qtde_volumes" id="qtde_volumes" class="alpha grid_3" />                        
                        </div>

                        <div>
                        <label for="largura">Largura:</label>
                        <input type="text" name="largura" id="largura" class="alpha grid_2" />
                        </div>

                        <div>
                        <label for="altura">Altura:</label>
                        <input type="text" name="altura" id="altura" class="alpha grid_2" />
                        </div>

                        <div>
                        <label for="comprimento">Comprimento:</label>
                        <input type="text" name="comprimento" id="comprimento" class="alpha grid_2" />
                        </div>

                        <div>
                        <label for="peso_cubado">Peso Cubado:</label>
                        <input type="text" name="peso_cubado" id="peso_cubado" class="alpha grid_3" />
                        <img src="img/calc.png" />
                        </div>

                        <div class="form_buttons grid_4">
                            <button class="alpha grid_2">Cancelar</button>
                            <input type="submit" class="alpha grid_2" value="Enviar" />
                        </div>

                        </div>

                    </form>
                 </div>
            </div>
        </div>
    </div>
    <?php include 'bottom_menu.php'; ?>
    </body>
</html>