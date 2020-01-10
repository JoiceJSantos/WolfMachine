<?php

$para ='wolfmachineband@gmail.com';
$assunto= 'Contato via site';

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$msg = $_REQUEST['mensagem'];

$corpo = "<strong>Mensagem de contato</strong><br><br>";
$corpo .= "<strong>Nome: $nome</strong><br>";
$corpo .= "<strong>E-mail: $email</strong><br>";
$corpo .= "<strong>MSG:$msg</strong><br>";

$header = "Content-type: text/html; charset: utf-8\n";
$header .= "From: $email Reply-to $email\n";


@mail($para, $assunto,$corpo,$header);
header("location:faleconosco.php?msg%20=%20enviado");

?>