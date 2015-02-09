<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta name="description" content="texto de descri&ccedil;&atilde;o do site">
        <?php include 'head.php'; ?>
         <script src="js/jquery.mask.min.js" type="text/javascript"></script>
        <script>
        $(function() {
             $('#tel').mask('(00) 0000-0000Z', {translation:  {'Z': {pattern: /[0-9]/, optional: true}}});
        });
        </script>
    </head>
    <body>
        <?php $menu["contato"] = "class='menu_active'" ?>
        <?php include 'top_menu.php'; ?>
        <div id="div_main_container">
            <div class="container_12">
                <div class="div_cot_txt">
                    <h1>Contato</h1>
                    <p>Para tirar dúvidas, dicas, sugestões ou reclamações, entre em contato conosco utilizando o formulário abaixo.</p>
                </div>
                <div class="div_contato_form">
                    <form name="contato" id="contato" action="mailSender.php" method="post">

                        <fieldset class="fieldset_left grid_6 omega">

                            <div class="div_contato_form_left">

                                <dl>
                                    <dt>
                                    <label for="nome">Nome:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="nome" id="nome" class="" required="true"/>
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
                                    <input type="tel" name="tel" id="tel" class="" required="true"/>
                                    </dt>
                                </dl>
                                
                                <dl>
                                    <dt>
                                        <label for="empresa">Empresa:</label>
                                    </dt>
                                    <dt>
                                        <input type="text" name="empresa" id="empresa" class="" />
                                    </dt>
                                </dl>
                                <dl class="form_input_half form_fl_left">
                                    <dt>
                                    <label for="cidade">Cidade:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="cidade" id="cidade" class="" required="true"/>
                                    </dt>
                                </dl>

                                <dl class="form_input_half form_fl_right">
                                    <dt>
                                    <label for="estado">Estado:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="estado" id="estado" class="" required="true" />
                                    </dt>
                                </dl>
                                <dl>
                                    <dt>
                                    <label for="assunto">Assunto:</label>
                                    </dt>
                                    <dt>
                                    <input type="text" name="assunto" id="assunto" class="" required="true"/>
                                    </dt>
                                </dl>
                                <label for="mensagem">Mensagem:</label>
                                <textarea name="mensagem" id="mensagem" class="" required="true"></textarea>
                                <div class="clear"></div>
                                <div class="form_buttons">
                                    <input type="hidden" name="origin" value="contato" />
                                    <input type="reset" value="Cancelar" />
                                    <input type="submit" class="" value="Enviar" />
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    <div id="endereco" class="grid_6">
                        <h4>Trabalhe Conosco</h4>
                        <p>
                            Seja um colaborador da TAC Cargo!<br>
                            Envie seu currículo para <a href="mailto:rh@taccargo.com.br" target="_blank">rh@taccargo.com.br</a> mencionando o cargo pretendido.
                        </p>
                        <h4>TAC Cargo Transporte e Log&iacute;stica Ltda</h4>
                        <p> 
                            Av. Severo Dulius, 195 – PV. 106/A - São João - <span style="white-space: nowrap;">Porto Alegre/RS - 90200-310</span><br>
                            Telefones: <a href="tel:+555133250303">(51) 3325-0303 </a>/ <a href="tel:+555133250451">3325-0451</a> / <a href="tel:+555133111113">3311-1113</a> / <a href="tel:+555133431227">3343-1227</a> / <a href="tel:+555133371561">3337-1561</a>  <br>
                            E-mail: <a href="mailto:atendimento@taccargo.com.br" target="_blank">atendimento@taccargo.com.br</a>
                        </p>
                        <div  id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d863.9346459923398!2d-51.158019666867936!3d-29.986941946918716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95197737f900d731%3A0xb4ef637e4ea7978f!2sAv.+Severo+Dulius%2C+195+-+S%C3%A3o+Jo%C3%A3o%2C+Porto+Alegre+-+RS%2C+90200-310%2C+Rep%C3%BAblica+Federativa+do+Brasil!5e0!3m2!1spt-BR!2sus!4v1410145685449" frameborder="0" style="border:0"></iframe>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    <?php include 'bottom_menu.php'; ?>
</body>
</html>