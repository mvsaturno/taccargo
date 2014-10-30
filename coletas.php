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
        <?php $menu["coletas"] = "class='menu_active'" ?>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div class="container_12">
                <div class="div_cot_txt">
                    <h1>Coletas</h1>
                    <p>Para solicitar a coleta de sua carga via internet preencha o formulário abaixo fornecendo suas informações, as características da carga e os locais de coleta e entrega.</p>
                </div>
                <div class="div_cot_form">
                    <form action="" name="coleta" id="coleta">

                        <fieldset class="fieldset_left grid_6 omega">

                            <div class="div_cot_form_left">

                                <dl>
                                    <dt>
                                    <label for="nome">Nome/Empresa:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="nome" id="nome" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_left">
                                    <dt>
                                    <label for="email">Email:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="email" id="email" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_right">
                                    <dt>
                                    <label for="tel">Telefone:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="tel" id="tel" class="" />
                                    </dt>
                                </dl>
                                
                                <dl class="form_input_half form_fl_left">
                                    <dt>
                                    <label for="contato_coleta">Contato no local da coleta:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="contato_coleta" id="contato_coleta" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_right">
                                    <dt>
                                    <label for="telefone_coleta">Telefone no local da coleta:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="telefone_coleta" id="telefone_coleta" class="" />
                                    </dt>
                                </dl>
                                <dl>
                                    <dt>
                                    <label for="endereco_coleta">Endere&ccedil;o da coleta:</label>
                                    </dt>                         
                                    <dt>
                                    <input type="text" name="endereco_coleta" id="endereco_coleta" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_left">
                                    <dt>
                                    <label for="bairro_coleta">Bairro:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="bairro_coleta" id="bairro_coleta" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_right">
                                    <dt>
                                    <label for="cidade_estado">Cidade/Estado:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="cidade_estado" id="cidade_estado" class="" />
                                    </dt>
                                </dl>
                                <dl>
                                    <dt>
                                    <label for="destinatario">Destinat&aacute;rio:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="destinatario" id="destinatario" class="" />
                                    </dt>
                                </dl>
                                
                                <dl>
                                    <dt>
                                    <label for="endereco_destino">Endere&ccedil;o de destino:</label>
                                    </dt>                         
                                    <dt>
                                    <input type="text" name="endereco_destino" id="endereco_destino" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_left">
                                    <dt>
                                    <label for="bairro_destino">Bairro:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="bairro_destino" id="bairro_destino" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_right">
                                    <dt>
                                    <label for="cidade_estado_destino">Cidade/Estado:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="cidade_estado_destino" id="cidade_estado_destino" class="" />
                                    </dt>
                                </dl>

                            </div>

                        </fieldset>

                        <fieldset class="fieldset_right grid_6 omega">

                            <div class="div_cor_form_right">
                                
                                <dl class="form_input_70 form_fl_left">
                                    <dt>
                                    <label for="data">Data da coleta:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="valor" id="valor" class="" />
                                    </dt>
                                </dl>


                                <dl class="form_input_25">
                                    <dt>
                                    <label for="horario">Hor&aacute;rio m&aacute;ximo de coleta:</label>
                                    </dt>
                                    <dt>
                                    <select name="horario" id="seguro" class="">
                                        <option value=""> </option>
                                        <option value="00:00">00:00</option>
                                        <option value="00:30">00:30</option>
                                        <option value="01:00">01:00</option>
                                        <option value="01:30">01:30</option>
                                        <option value="02:00">02:00</option>
                                        <option value="02:30">02:30</option>
                                        <option value="03:00">03:00</option>
                                        <option value="03:30">03:30</option>
                                        <option value="04:00">04:00</option>
                                        <option value="04:30">04:30</option>
                                        <option value="05:00">05:00</option>
                                        <option value="05:30">05:30</option>
                                        <option value="06:00">06:00</option>
                                        <option value="06:30">06:30</option>
                                        <option value="07:00">07:00</option>
                                        <option value="07:30">07:30</option>
                                        <option value="08:00">08:00</option>
                                        <option value="08:30">08:30</option>
                                        <option value="09:00">09:00</option>
                                        <option value="09:30">09:30</option>
                                        <option value="10:00">10:00</option>
                                        <option value="10:30">10:30</option>
                                        <option value="11:00">11:00</option>
                                        <option value="11:30">11:30</option>
                                        <option value="12:00">12:00</option>
                                        <option value="12:30">12:30</option>
                                        <option value="13:00">13:00</option>
                                        <option value="13:30">13:30</option>
                                        <option value="14:00">14:00</option>
                                        <option value="14:30">14:30</option>
                                        <option value="15:00">15:00</option>
                                        <option value="15:30">15:30</option>
                                        <option value="16:00">16:00</option>
                                        <option value="16:30">16:30</option>
                                        <option value="17:00">17:00</option>
                                        <option value="17:30">17:30</option>
                                        <option value="18:00">18:00</option>
                                        <option value="18:30">18:30</option>
                                        <option value="19:00">19:00</option>
                                        <option value="19:30">19:30</option>
                                        <option value="20:00">20:00</option>
                                        <option value="20:30">20:30</option>
                                        <option value="21:00">21:00</option>
                                        <option value="21:30">21:30</option>
                                        <option value="22:00">22:00</option>
                                        <option value="22:30">22:30</option>
                                        <option value="23:00">23:00</option>
                                        <option value="23:30">23:30</option>
                                    </select>
                                    </dt>
                                </dl>         

                                <dl class="form_input_70 form_fl_left">
                                    <dt>
                                    <label for="valor">Valor Declarado:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="valor" id="valor" class="" />
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
                                    <label for="largura">Largura:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="largura" id="largura" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_third">
                                    <dt>
                                    <label for="altura">Altura:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="altura" id="altura" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_third omega">
                                    <dt>
                                    <label for="comprimento">Comprimento:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="comprimento" id="comprimento" class="" />
                                    </dt>
                                </dl>

                                <dl class="form_input_70 form_fl_left">
                                    <dt>
                                    <label for="peso_cubado">Peso Cubado:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="peso_cubado" id="peso_cubado" class="" />
                                    </dt>
                                </dl>
                                <div id="div_img_calc"><img src="img/calc.png" id="img_calc"/></div>
                                <p class="form_msg form_fl_left">Para mercadoria com volumes diferentes utilize nossa calculadora para peso cubado</p>
                                <div class="clear"></div>
                                <label for="observacao">Observa&ccedil;&atilde;o:
                                    <textarea name="observacao" id="observacao" class=""></textarea>
                                </label>
                                <div class="clear"></div>
                                <div class="form_buttons">
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
    </div>
    <?php include 'bottom_menu.php'; ?>
</body>
</html>