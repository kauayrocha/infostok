<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 15/03/2016
 * Time: 22:45
 */
require_once('C:/wamp/www/infostok/_class/_classDAO/EstoqueDAO.php');

$estoqueDAO = new EstoqueDAO();
$estoque = new Estoque();

$estoque->idProduto = $_POST["id-produto"];
$estoque->numeroChamado= $_POST["numero-chamado"];
$estoque->usuario= "alan.quality";
$estoque->tipo_movimentacao= $_POST["tipo-movi"];
if($estoque->tipo_movimentacao == "Saida"){
    $estoque->quantidade = "-".$_POST["movi-quantidade"];
}else{
    $estoque->quantidade = $_POST["movi-quantidade"];
}

$estoqueDAO->movimentarEstoque($estoque);


