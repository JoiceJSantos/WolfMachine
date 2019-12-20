<?php

$para ='wolfmachineband@gmail.com';
$assunto= 'Contato via site';

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['mensagem'];

        $corpo = "<strong>Mensagem de contato</strong><br><br>";
        $corpo .= "<br><strong>Nome: </strong> $nome";
        $corpo .= "<br><strong>E-mail: </strong> $email";
        $corpo .= "<br><strong>MSG: </strong> $msg";

        $header .= "Content-type: text/html; charset: utf-8";
        $header = "From: $email Reply-to $email ";


 @mail($para, $assunto,$corpo,$header);
 header("location:faleconosco.php?msg = enviado");
?>