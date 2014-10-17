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
                        
                        <fieldset class="fieldset_left">                        

                        <div class="div_cot_form_left grid_5">
                            
                            <dl>
                                <dt>
                                    <label for="nome">Nome/Empresa:</label>
                                </dt>
                                <dt>
                                    <input type="text" name="nome" id="nome" class="alpha grid_5" />
                                </dt>
                            </dl>
                            
                            <dl style="float:left; width: 47%;">
                                <dt>
                            <label for="email">Email:</label>
                                </dt>
                                <dt>
                            <input type="text" name="email" id="email" class="alpha" />
                                </dt>
                            </dl>

                            <dl style="width: 47%; float:right;">
                            <dt>
                            <label for="tel">Telefone:</label>
                            </dt>
                            <dt>
                            <input type="text" name="tel" id="tel" class="alpha" />
                            </dt>
                            </dl>
                            
                            <dl>
                            <dt>
                            <label for="origem">Origem:</label>
                            </dt>                         

                            <dt>
                            <input type="text" name="origem" id="origem" class="alpha grid_5" />
                            </dt>
                            </dl>
                            
                            <dl>
                            <dt>
                            <label for="destino">Destino:</label>
                            </dt>                       
                            <dt>
                            <input type="text" name="destino" id="destino" class="alpha grid_5" />
                            </dt>
                            </dl>     
                            
                            <dl>
                                <dt>
                            <label for="destinatario">Destinatário:</label>
                                </dt>
                                <dt>
                            <input type="text" name="destinatario" id="destinatario" class="alpha grid_5" />
                                </dt>
                            </dl>
                            
                            <label for="descricao">Descricao:
                            <textarea name="descricao" id="descricao" class="alpha grid_5"></textarea>
                            </label>

                        </div>

                        </fieldset>

                        <fieldset class="fieldset_right">

                        <div class="div_cor_form_right grid_6">                        
                        
                        <label for="valor">Valor Declarado:
                        <input type="text" name="valor" id="valor" class="alpha grid_4" />
                        </label>
                                                
                        <label for="seguro">Seguro Prório?
                        <input type="text" name="seguro" id="seguro" class="alpha grid_2" />
                        </label>
                                                
                        <label for="peso_bruto">Peso Bruto(kg):
                        <input type="text" name="peso_bruto" id="peso_bruto" class="alpha grid_3" />
                        </label>
                       
                        <label for="qtde_volumes">Quantidade de Volumes:
                        <input type="text" name="qtde_volumes" id="qtde_volumes" class="alpha grid_3" />                        
                        </label>
                        
                        <label for="largura">Largura:
                        <input type="text" name="largura" id="largura" class="alpha grid_2" />
                        </label>
                        
                        <label for="altura">Altura:
                        <input type="text" name="altura" id="altura" class="alpha grid_2" />
                        </label>
                        
                        <label for="comprimento">Comprimento:
                        <input type="text" name="comprimento" id="comprimento" class="alpha grid_2" />
                        </label>
                        
                        <label for="peso_cubado">Peso Cubado:
                        <input type="text" name="peso_cubado" id="peso_cubado" class="alpha grid_3" />
                        </label>
                        <img src="img/calc.png" />
                        

                        <div class="form_buttons grid_4">
                            <button class="alpha grid_2">Cancelar</button>
                            <input type="submit" class="alpha grid_2" value="Enviar" />
                        </div>

                        </div>
                        </fieldset>

                    </form>
                 </div>
            </div>
        </div>
    </div>
    <?php include 'bottom_menu.php'; ?>
    </body>
</html>