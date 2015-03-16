<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
        <script src="js/jquery.mask.min.js" type="text/javascript"></script>
        <script>
        $(function() {
            $('#tel').mask('(00) 0000-0000Z', {translation:  {'Z': {pattern: /[0-9]/, optional: true}}});
            $("#valor").mask("#.##0.00", {reverse: true});
            $("#peso_bruto").mask("##0.000", {reverse: true});
            $("#largura").mask("#.##0.00");
            $("#altura").mask("#.##0.00");
            $("#comprimento").mask("#.##0.00");
            $("#peso_cubado").mask("#.##0.000", {reverse: true});
        });
        </script>
        <script src="js/calc_items.js"></script>
    </head>
    <body>
        <?php $menu["cotacoes"] = "class='menu_active'"?>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div class="container_12">
                 <div class="div_cot_txt">
                    <h1>Cotações</h1>
                    <p>Mais um serviço on-line para agilizar e facilitar o relacionamento da TAC Cargo com seus clientes. O orçamento do valor do frete depende de algumas variáveis como origem, destino, tipo de carga (características), valor da Nota Fiscal e o peso da carga. Aproveite e envie agora mesmo uma solicitação de cotação de transporte de mercadorias direto para a TAC Cargo, preenchendo todos os campos do formulário abaixo.</p>
                 </div>
                 <div class="div_cot_form">
                     <form action="mailSender.php" name="cotacao" id="cotacao" method="post">

                            <fieldset class="fieldset_left grid_6 omega">

                            <div class="div_cot_form_left">

                                <dl>
                                    <dt>
                                        <label for="nome">Nome/Empresa:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="nome" id="nome" class="" required="true" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_left">
                                    <dt>
                                <label for="email">Email:</label>
                                    </dt>
                                    <dt>
                                    <input type="email" name="email" id="email" class="" required="true"/>
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_right">
                                <dt>
                                <label for="tel">Telefone:</label>
                                </dt>
                                <dt>
                                <input type="tel" name="tel" id="tel" class="" required="true" />
                                </dt>
                                </dl>

                                <dl>
                                <dt>
                                <label for="origem">Origem:</label>
                                </dt>                         

                                <dt>
                                <input type="text" name="origem" id="origem" class="" required="true" />
                                </dt>
                                </dl>

                                <dl>
                                <dt>
                                <label for="destino">Destino:</label>
                                </dt>                       
                                <dt>
                                <input type="text" name="destino" id="destino" class="" required="true" />
                                </dt>
                                </dl>     

                                <dl>
                                    <dt>
                                <label for="destinatario">Destinat&aacute;rio:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="destinatario" id="destinatario" class="" required="true"/>
                                    </dt>
                                </dl>

                                <label for="descricao">Descri&ccedil;&atilde;o:
                                <textarea name="descricao" id="descricao" class=""></textarea>
                                </label>

                            </div>

                            </fieldset>

                            <fieldset class="fieldset_right grid_6 omega">

                            <div class="div_cor_form_right">                        

                                <dl class="form_input_70 form_fl_left">
                                    <dt>
                                        <label for="valor">Valor Declarado:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="valor" id="valor" class="" required="true"/>
                                    </dt>
                                </dl>


                            <dl class="form_input_25">
                                <dt>
                                <label for="seguro">Seguro Pr&oacute;prio?</label>
                                </dt>
                                <dt>
                                <select name="seguro" id="seguro" class="">
                                    <option value="nao">N&atilde;o</option>
                                    <option value="sim">Sim</option>
                                </select>
                                </dt>
                            </dl>                                                

                            <dl class="form_input_half form_fl_left">
                                <dt>
                                <label for="peso_bruto">Peso Bruto(kg):</label>
                                </dt>
                                <dt>
                                <input type="text" name="peso_bruto" id="peso_bruto" class="" />
                                </dt>
                            </dl>                    

                            <dl class="form_input_half form_fl_right">
                                <dt>
                            <label for="qtde_volumes">Quantidade de Volumes:</label>
                                </dt>
                                <dt>
                                <input type="text" name="qtde_volumes" id="qtde_volumes" class="" />
                                </dt>
                            </dl>

                            <dl class="form_input_third">
                                <dt>
                            <label for="largura">Largura(m):</label>
                                </dt>
                                <dt>
                                <input type="text" name="largura" id="largura" class="" />
                                </dt>
                            </dl>

                            <dl class="form_input_third">
                                <dt>
                            <label for="altura">Altura(m):</label>
                                </dt>
                                <dt>
                                <input type="text" name="altura" id="altura" class="" />
                                </dt>
                            </dl>

                            <dl class="form_input_third omega">
                                <dt>
                            <label for="comprimento">Comprimento(m):</label>
                                </dt>
                                <dt>
                                <input type="text" name="comprimento" id="comprimento" class="" />
                                </dt>
                            </dl>

                            <dl class="form_input_70 form_fl_left">
                                <dt>
                                <label for="peso_cubado">Peso Cubado(m<sup>3</sup>):</label>
                                </dt>
                                <dt>
                            <input type="text" name="peso_cubado" id="peso_cubado" required class="" />
                                </dt>
                            </dl>
                                <div id="div_img_calc"><img src="img/calc.png" id="img_calc"/></div>
                            <p class="form_msg form_fl_left">Para mercadoria com volumes diferentes utilize nossa calculadora para peso cubado</p>
                            <div class="clear"></div>
                            <div class="form_buttons">
                                <input type="hidden" name="origin" value="cotacoes">
                                <input type="reset" value="Cancelar" />
                                <input type="submit" class="" value="Enviar" />
                            </div>

                            </div>
                            </fieldset>

                        </form>
                     <div class="clear"></div>
                 </div>
            </div>
        </div>
        <div style="display:none">
        <div id="calc_peso_cubado" style="padding: 30px;">
            <div id="cubado_items">
                <div id="cubado_item_0">
                    <dl class="form_input_six">
                        <dt><label for="altura_pcub_0">Altura:</label> </dt>
                        <dt> <input type="text" name="altura_pcub_0" id="altura_pcub_0" class="calc_item" /> </dt>
                    </dl>
                    <dl class="form_input_six">
                        <dt><label for="largura_pcub_0">Largura:</label> </dt>
                        <dt> <input type="text" name="largura_pcub_0" id="largura_pcub_0" class="calc_item" /> </dt>
                    </dl>
                    <dl class="form_input_six">
                        <dt><label for="profundidade_pcub_0">Profundidade:</label> </dt>
                        <dt> <input type="text" name="profundidade_pcub_0" id="profundidade_pcub_0" class="calc_item" /> </dt>
                    </dl>

                    <dl class="form_input_six">
                        <dt><label for="quantidade_pcub_0">Quantidade:</label> </dt>
                        <dt> <input type="text" name="quantidade_pcub_0" id="quantidade_pcub_0" class="calc_item" /> </dt>
                    </dl>

                    <dl class="form_input_six">
                        <dt><label for="cubagem_pcub_0">Cubagem (m³):</label> </dt>
                        <dt> <input type="text" readonly name="cubagem_pcub_0" id="cubagem_pcub_0" class="calc_item" /> </dt>
                    </dl>

                    <dl class="form_input_six">
                        <dt><label for="densidade_pcub_0">Densidade:</label> </dt>
                        <dt> <input type="text" readonly name="densidade_pcub_0" id="densidade_pcub_0" class="calc_item" /> </dt>
                    </dl>
                    <div class="calc_buttons_wrap">
                    <div class="calculate_item_calc"><img src="img/calc.png" /></div>
                    </div>
                </div>
            </div>
            <button id="cubagem_add_btn">Adicionar itens</button>
                <div style="float:right; position:absolute; bottom:5%; right:5%">
                    <dl>
                        <label for="total_cubado">Total Cubado:</label>
                        <input readonly id="total_cubado" />
                    </dl>
                    <button id="calculado">OK</button>
                </div>
        </div>
        </div>
    <?php include 'bottom_menu.php'; ?>
    </body>
</html>