<?php

$msg = 0;
@$msg = $_REQUEST['msg'];


?>
<!doctype html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" />



    <title>Wolf Machine</title>
</head>
<body >
<?php
if($msg == 'enviado'): ?>
    <h1>Mensagem enviada, agradecemos seu contato!</h1>
<?php
else: ?>

<header>

    <nav  id="menu" class="navbar navbar-expand-sm navbar-dark bg-dark">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="page-link" href="../index.html">HOME</a></li>
                <li class="nav-item"><a class="page-link" href="../sobre/sobre.html">BANDA</a></li>
                <li class="nav-item"><a class="page-link" href="../videos/videos.html">VÍDEOS</a></li>
                <li class="nav-item"><a class="page-link" href="../albuns/fotos.html">FOTOS</a></li>
                <li class="nav-item "><a class="page-link" href="faleconosco.php">CONTATO</a></li>
            </ul>

        </div>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="submit" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="logos">
            <a href="https://www.instagram.com/bandawolfmachine1933"target="_blank"><img src="../imagens/ic_instagram.png"></a>
            <a href="https://www.facebook.com/wolfmachineband" target="_blank"><img src="../imagens/ic_facebook.png"></a>
            <a href="https://www.youtube.com/channel/UCgTQD3hsartcobx-XvChAfg" target="_blank"><img src="../imagens/ic_youtube.png"></a>
            <img class="lobo-topo" src="../imagens/logo_wolf_topo.png">
        </div>
    </nav>
</header>
<div class="container">
    <div class="py-5  text-center">
        <img class="d-block mx-auto mb-4" src="../imagens/logo_contato.png" alt="" width="89" height="72">
        <h2>Fale conosco!</h2>
        <p class="lead mb-4">Contrate um show com o melhor do CLÁSSIC ROCK! </p>
        <section id="contato" tabindex="-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <form id="formgroup" method="post" action="contato.php" class="form">
                            <div class="form-group mb-4">

                                <input class="form-control" type="text" id="nome" name="nome" placeholder="Nome" required minlength="2">
                            </div>
                            <div class="form-group mb-4">
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
                            </div>
                            <div class="form-group mb-4">
                                <textarea type="text" name="mensagem" id="mensagem" class="form-control" cols="30" rows="10" placeholder="Deixe sua mensagem." required></textarea>
                            </div>
                            <div class="form-group">
                                <button  class="btn  btn-success">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer class="container-fluid mt-5">
        <div class="container">
            <div class=" row justify-content-center">
                <div class="col-xs-12 col-md-6 d-none d-md-block text-center">
                    <p>&copy;Copyright-Joice Santos</p>
                    <p class="pages"><a href="https://www.facebook.com/joice.santos.5832" target="_blank">Facebook</a>|
                        <a href="https://www.linkedin.com/in/joice-santos-a483036a" target="_blank">Linkedin</a></p>
                    <p>Design-João Amaral</p>
                    <p class="pages"><a href="https://www.behance.net/Ankhjoao" target="_blank">Portifólio</a></p>
                </div>
            </div>
        </div>
    </footer>
    <?php endif; ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
