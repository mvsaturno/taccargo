<?php
    $redirect = "http://www.taccargo.com.br";
    $origin = filter_input(INPUT_POST, 'origin', FILTER_SANITIZE_STRING);
    
    if(!empty($origin)){
        $quebra_linha = "\r\n";
        //$emaildestinatario = "fabio.cs3mx@gmail.com";
        $emaildestinatario = "operacional@taccargo.com.br,comercial@taccargo.com.br,atendimento@taccargo.com.br,fabio.cs3mx@gmail.com";
        $emailsender = "$nome <$email>";
        $headers = "MIME-Version: 1.1\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        //$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
        $headers .= "From: $nome <$email>\r\n"; // remetente
       if($origin == "contato"){
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $cleanTelefone = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_NUMBER_INT);
            $telefoneSemi = substr_replace($cleanTelefone, ") ", 2, 0);
            $telefone = substr_replace($telefoneSemi, "(", 0, 0);
            $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
            $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
            $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
            $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
            $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
            $mensagemHTML = "<html><head></head><body><h3>Mensagem de contato do site</h3>";
            $mensagemHTML .= "<b>Nome:</b> ".$nome."<br/>";
            $mensagemHTML .= "<b>Empresa:</b> ".$empresa."<br/>";
            $mensagemHTML .= "<b>Telefone:</b> ".$telefone."<br/>";
            $mensagemHTML .= "<b>E-mail:</b> ".$email."<br/>";
            $mensagemHTML .= "<b>Cidade:</b> ".$cidade."<br/>";
            $mensagemHTML .= "<b>Estado:</b> ".$estado."<br/>";
            $mensagemHTML .= "<b>Assunto:</b> ".$assunto."<br/>";
            $mensagemHTML .= "<b>Mensagem:</b><br /> ".nl2br($mensagem)."<br />";
            $mensagemHTML .= "</body></html>";
            $return = "contato.php";
       }
       else if($origin == "cotacoes"){
           $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
           $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $cleanTelefone = filter_input(INPUT_POST, "tel", FILTER_SANITIZE_NUMBER_INT);
            $telefoneSemi = substr_replace($cleanTelefone, ") ", 2, 0);
           $telefone = substr_replace($telefoneSemi, "(", 0, 0);
           $destinatario = filter_input(INPUT_POST, "destinatario", FILTER_SANITIZE_STRING);
           $destino = filter_input(INPUT_POST, "destino", FILTER_SANITIZE_STRING);
           $origem = filter_input(INPUT_POST, "origem", FILTER_SANITIZE_STRING);
            $valorClean = filter_input(INPUT_POST, "valor", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $valor = substr_replace($valorClean, "R$ ", 0, 0);
           $seguro = filter_input(INPUT_POST, "seguro", FILTER_SANITIZE_STRING);
            $peso_brutoClean = filter_input(INPUT_POST, "peso_bruto", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $peso_bruto = $peso_brutoClean."Kg";
           $qtde_volumes = filter_input(INPUT_POST, "qtde_volumes", FILTER_SANITIZE_NUMBER_INT);
            $larguraClean = filter_input(INPUT_POST, "largura", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $largura = $larguraClean."m";
            $alturaClean = filter_input(INPUT_POST, "altura", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $altura = $alturaClean."m";
            $comprimentoClean = filter_input(INPUT_POST, "comprimento", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $comprimento = $alturaClean."m";
            $peso_cubadoClean = filter_input(INPUT_POST, 'peso_cubado', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $peso_cubado = $alturaClean."m³";
           $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
            $mensagemHTML = "<html><head></head><body><h3>Solicitação de cotação do site</h3>";
            $mensagemHTML .= "<b>Nome/Empresa:</b> ".$nome."<br/>";
            $mensagemHTML .= "<b>Telefone:</b> ".$telefone."<br/>";
            $mensagemHTML .= "<b>E-mail:</b> ".$email."<br/><br />";
            
            $mensagemHTML .= "<b>Origem:</b> ".$origem."<br/>";
            $mensagemHTML .= "<b>Destino:</b> ".$destino."<br/>";
            $mensagemHTML .= "<b>Destinatário:</b> ".$destinatario."<br/><br/>";
            
            $mensagemHTML .= "<b>Valor:</b> ".$valor."<br/>";
            $mensagemHTML .= "<b>Possui seguro?</b> ".$seguro."<br/><br />";
            
            $mensagemHTML .= "<b>Peso Bruto:</b> ".$peso_bruto."<br/>";
            $mensagemHTML .= "<b>Quantidade de volumes:</b> ".$qtde_volumes."<br/>";
            $mensagemHTML .= "<b>Largura:</b> ".$largura."<br/>";
            $mensagemHTML .= "<b>Altura:</b> ".$altura."<br/>";
            $mensagemHTML .= "<b>Comprimento:</b> ".$comprimento."<br/>";
            $mensagemHTML .= "<b>Peso Cubado:</b> ".$peso_cubado."<br/><br />";
            
            $mensagemHTML .= "<b>Descrição:</b><br /> ".nl2br($descricao)."<br />";
            $mensagemHTML .= "</body></html>";
            $return = "cotacoes.php";
            $assunto = "Pedido de orcamento via site";
            
       }else if($origin == "coletas"){
           $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
           $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
            $cleanTelefone = filter_input(INPUT_POST, "tel", FILTER_SANITIZE_NUMBER_INT);
            $telefoneSemi = substr_replace($cleanTelefone, ") ", 2, 0);
           $telefone = substr_replace($telefoneSemi, "(", 0, 0);
           $contato_coleta = filter_input(INPUT_POST, "contato_coleta", FILTER_SANITIZE_STRING);
            $telCol = filter_input(INPUT_POST, "telefone_coleta", FILTER_SANITIZE_NUMBER_INT);
            $telColSemi = substr_replace($telCol, ") ", 2, 0);
           $telefone_coleta = substr_replace($telColSemi, "(", 0, 0);
           $endereco_coleta = filter_input(INPUT_POST, "endereco_coleta", FILTER_SANITIZE_STRING);
           $bairro_coleta = filter_input(INPUT_POST, "bairro_coleta", FILTER_SANITIZE_STRING);
           $cidade_estado = filter_input(INPUT_POST, "cidade_estado", FILTER_SANITIZE_STRING);
           $destinatario = filter_input(INPUT_POST, "destinatario", FILTER_SANITIZE_STRING);
           $endereco_destino = filter_input(INPUT_POST, "endereco_destino", FILTER_SANITIZE_STRING);
           $bairro_destino = filter_input(INPUT_POST, "bairro_destino", FILTER_SANITIZE_STRING);
           $cidade_estado_destino = filter_input(INPUT_POST, "cidade_estado_destino", FILTER_SANITIZE_STRING);
            $dataClean = filter_input(INPUT_POST, "data", FILTER_SANITIZE_NUMBER_INT);
            $dataArray = explode("-", $dataClean);
           $data = $dataArray[2]."/".$dataArray[1]."/".$dataArray[0];
            $horarioClean = filter_input(INPUT_POST, "horario", FILTER_SANITIZE_NUMBER_INT);
           $horario = substr_replace($horarioClean, ":", 2, 0);
            $valorClean = filter_input(INPUT_POST, "valor", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $valor = substr_replace($valorClean, "R$ ", 0, 0);
           $seguro = filter_input(INPUT_POST, "seguro", FILTER_SANITIZE_STRING);
            $peso_brutoClean = filter_input(INPUT_POST, "peso_bruto", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $peso_bruto = $peso_brutoClean."Kg";
           $qtde_volumes = filter_input(INPUT_POST, "qtde_volumes", FILTER_SANITIZE_NUMBER_INT);
            $larguraClean = filter_input(INPUT_POST, "largura", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $largura = $larguraClean."m";
            $alturaClean = filter_input(INPUT_POST, "altura", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $altura = $alturaClean."m";
            $comprimentoClean = filter_input(INPUT_POST, "comprimento", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $comprimento = $alturaClean."m";
            $peso_cubadoClean = filter_input(INPUT_POST, 'peso_cubado', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
           $peso_cubado = $alturaClean."m³";
           $observacao = filter_input(INPUT_POST, 'observacao', FILTER_SANITIZE_STRING);
            $mensagemHTML = "<html><head></head><body><h3>Solicitação de coleta do site</h3>";
            $mensagemHTML .= "<b>Nome/Empresa:</b> ".$nome."<br/>";
            $mensagemHTML .= "<b>Telefone:</b> ".$telefone."<br/>";
            $mensagemHTML .= "<b>E-mail:</b> ".$email."<br/><br />";
            
            $mensagemHTML .= "<b>Contato no local da coleta:</b> ".$contato_coleta."<br/>";
            $mensagemHTML .= "<b>Telefone no local da coleta:</b> ".$telefone_coleta."<br/>";
            $mensagemHTML .= "<b>Endereço da coleta:</b> ".$endereco_coleta."<br/>";
            $mensagemHTML .= "<b>Bairro da coleta:</b> ".$bairro_coleta."<br/>";
            $mensagemHTML .= "<b>Cidade/Estado da coleta:</b> ".$cidade_estado."<br/><br />";
            
            $mensagemHTML .= "<b>Destinatário:</b> ".$destinatario."<br/>";
            $mensagemHTML .= "<b>Endereço de destino:</b> ".$endereco_destino."<br/>";
            $mensagemHTML .= "<b>Bairro de destino:</b> ".$bairro_destino."<br/>";
            $mensagemHTML .= "<b>Cidade/Estado de destino:</b> ".$cidade_estado_destino."<br/><br />";
            
            $mensagemHTML .= "<b>Data da coleta:</b> ".$data."<br/>";
            $mensagemHTML .= "<b>Hora máx. de coleta:</b> ".$horario."<br/>";
            $mensagemHTML .= "<b>Valor:</b> ".$valor."<br/>";
            $mensagemHTML .= "<b>Possui seguro?</b> ".$seguro."<br/><br />";
            
            $mensagemHTML .= "<b>Peso Bruto:</b> ".$peso_bruto."<br/>";
            $mensagemHTML .= "<b>Quantidade de volumes:</b> ".$qtde_volumes."<br/>";
            $mensagemHTML .= "<b>Largura:</b> ".$largura."<br/>";
            $mensagemHTML .= "<b>Altura:</b> ".$altura."<br/>";
            $mensagemHTML .= "<b>Comprimento:</b> ".$comprimento."<br/>";
            $mensagemHTML .= "<b>Peso Cubado:</b> ".$peso_cubado."<br/><br />";
            
            $mensagemHTML .= "<b>Observação:</b><br /> ".nl2br($observacao)."<br />";
            $mensagemHTML .= "</body></html>";
            $return = "coletas.php";
            $assunto = "Pedido de coleta via site";
            
       }else{
        header("location:$redirect");
        die();
       }
       
        $envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender);

            if(!$envio){ // Se for Postfix
                $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
                $envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
            }
            if($envio){
                $msg = "Mensagem enviada com sucesso!";
                header("location:$redirect./$return?msg=$msg");
                die();
            }else{
                $msg = "A mensagem não pode ser enviada!";
                header("location:$redirect./$return?msg=$msg");
                die();
            }
    }
    else{ 
        header("location:$redirect");
        die();
    }


?>