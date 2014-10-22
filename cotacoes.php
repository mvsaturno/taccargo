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
                            
                            <dl class="form_input_half form_fl_left">
                                <dt>
                            <label for="email">Email:</label>
                                </dt>
                                <dt>
                            <input type="text" name="email" id="email" class="alpha" />
                                </dt>
                            </dl>

                            <dl class="form_input_half form_fl_right">
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

                        <div class="div_cor_form_right">                        
                        
                            <dl class="form_input_70 form_fl_left">
                                <dt>
                                    <label for="valor">Valor Declarado:</label>
                                </dt>
                                <dt>
                                    <input type="text" name="valor" id="valor" class="alpha" />
                                </dt>
                            </dl>


                        <dl class="form_input_25">
                            <dt>
                            <label for="seguro">Seguro Prório?</label>
                            </dt>
                            <dt>
                            <select name="seguro" id="seguro" class="alpha">
                                <option value="nao">Não</option>
                                <option value="sim">Sim</option>
                            </select>
                            </dt>
                        </dl>                                                
                            
                        <dl class="form_input_half form_fl_left">
                            <dt>
                            <label for="peso_bruto">Peso Bruto(kg):</label>
                            </dt>
                            <dt>
                            <input type="text" name="peso_bruto" id="peso_bruto" class="alpha" />
                            </dt>
                        </dl>                    
                       
                        <dl class="form_input_half form_fl_right">
                            <dt>
                        <label for="qtde_volumes">Quantidade de Volumes:</label>
                            </dt>
                            <dt>
                        <input type="text" name="qtde_volumes" id="qtde_volumes" class="alpha" />
                            </dt>
                        </dl>
                        
                        <dl class="form_input_third">
                            <dt>
                        <label for="largura">Largura:</label>
                            </dt>
                            <dt>
                        <input type="text" name="largura" id="largura" class="alpha" />
                            </dt>
                        </dl>
                        
                        <dl class="form_input_third">
                            <dt>
                        <label for="altura">Altura:</label>
                            </dt>
                            <dt>
                        <input type="text" name="altura" id="altura" class="alpha grid_2" />
                            </dt>
                        </dl>
                        
                        <dl class="form_input_third_last">
                            <dt>
                        <label for="comprimento">Comprimento:</label>
                            </dt>
                            <dt>
                        <input type="text" name="comprimento" id="comprimento" class="alpha grid_2" />
                            </dt>
                        </dl>
                        
                        <dl class="form_input_70 form_fl_left">
                            <dt>
                        <label for="peso_cubado">Peso Cubado:</label>
                            </dt>
                            <dt>
                        <input type="text" name="peso_cubado" id="peso_cubado" class="alpha grid_3" />
                        <img src="img/calc.png" />
                            </dt>
                        </dl>
                        
                        <p class="form_msg form_fl_left">Para mercadoria com volumes diferentes utilize nossa calculadora para peso cubado</p>

                        <div class="form_buttons">
                            <input type="submit" class="alpha grid_2" value="Enviar" />
                            <button class="alpha grid_2">Cancelar</button>
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