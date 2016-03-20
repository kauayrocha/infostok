<?php
require_once('C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php');
?>

<!DOCTYPE html>
<html>
<head lang="pt-br">
    <title>INFOSTOK - Estoque de Equipamentos Técnologicos</title>

    <meta charset="utf-8">
    <meta name="author" content="Alan Kauay de Oliveira Rocha - Strucode Soluções Web">
    <meta name="description" content="Sistema de estoque para equipamentos de informatica - SEINF">

    <link rel="stylesheet" href="../_css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../_css/style.css">
    <style>

    </style>

</head>
<header>
    <aside>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">
                        <img src="../_img/brand_mini.png" alt="infostok sistema de gerenciamento de estoque" style="border-radius: 5px"></a>
                </div>
                <ul class="nav navbar-nav navbar-left">

                    <li><a href="#">Administrador</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Cadastro<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="lista_produtos?inicio=0&final=10">Produtos</a></li>
                            <li><a href="lista_tipo_item">Tipo de Produto</a></li>
                        </ul>
                    </li>

                    <li><a href="lista_estoque">Estoque</a></li>
                    <li><a href="#">Relatórios</a></li>
                    <li><a href="../_class/_executa/logout">Logoff</a></li>
                </ul>
            </div>
        </nav>
    </aside>
</header>
<body style="background-color: #D8D8D8">
