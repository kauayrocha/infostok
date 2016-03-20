<?php

require_once("_class/_classDAO/UsuariosDAO.php");



?>


<!DOCTYPE html>
<html>
<head lang="pt-br">
    <title>INFOSTOK - Estoque de Equipamentos Técnologicos</title>

    <meta charset="utf-8">
    <meta name="author" content="Alan Kauay de Oliveira Rocha - Strucode Soluções Web">
    <meta name="description" content="Sistema de estoque para equipamentos de informatica - SEINF">

    <link rel="stylesheet" href="_css/bootstrap.min.css"/>
    <link rel="stylesheet" href="_css/style.css">
</head>
<body>
    <header>
        <div class="img-logo" align="center">
            <img src="_img/logo.png">
        </div>
    </header>
    <main>
        <div class="container-fluid">
                <div class="alinhar-formulario">
                    <form class="form-group" action="_class/_executa/exec_usuario.php" method="post">
                        <label>Usuário:</label>
                        <input class="form-control" type="text" name="usuario" />
                        <label>Senha:</label>
                        <input class="form-control" type="password" name="senha" />
                        <?php
                        if(isset($_GET["fracasso"])){
                            echo "<p class='text-danger text-center'>Usuário ou senha incorreto</p>";
                        }
                        ?>
                        <button class="btn btn-success">Entrar</button>
                    </form>
            </div>
        </div>
    </main>
<footer id="footer-login">
    <div>
        <p>Copyright <span class="glyphicon glyphicon-copyright-mark"></span> 2016 - Quality Software S/A. Todos os direitos reservados.</p>
        <p><span class="glyphicon glyphicon-console"></span> Desenvolvido por Kauay Oliveira</p>
        <p><span class="glyphicon glyphicon-info-sign"></span> Versão 1.0</p>
    </div>
</footer>
</body>
</html>