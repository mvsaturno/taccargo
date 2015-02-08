<?php
    $redirect = "http://www.taccargo.com.br";
    $origin = filter_input(INPUT_POST, 'origin', FILTER_SANITIZE_STRING);
    
    if(!empty($origin)){
        $quebra_linha = "\r\n";
        $emaildestinatario = "fabio.cs3mx@gmail.com"; //$emaildestinatario = "operacional@taccargo.com.br; comercial@taccargo.com.br; atendimento@taccargo.com.br";
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
            $envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers ,"-r".$emailsender);

            if(!$envio){ // Se for Postfix
                $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "não for Postfix"
                $envio = mail($emaildestinatario, $assunto, $mensagemHTML, $headers);
            }
            if($envio){
                $msg = "Mensagem enviada com sucesso";
                header("location:$redirect./contato.php?msg=$msg");
                die();
            }else{
                $msg = "A mensagem não pode ser enviada";
                header("location:$redirect./contato.php?msg=$msg");
                die();
            }
            
       }
       else if($origin == "cotacao"){
           
       }else{
        header("location:$redirect");
        die();
       }
    }
    else{ 
        header("location:$redirect");
        die();
    }


?>