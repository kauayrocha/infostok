<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 10/03/2016
 * Time: 21:40
 */

require_once('C:/wamp/www/infostok/_class/_classDAO/ItensDAO.php');

// Inserindo os dados na base
$item = new Itens();
$itemDAO = new ItensDAO();
$item->numeroEtiqueta = $_POST["numero_etiqueta"];
$item->descricao= $_POST["descricao_produto"];
$item->idTipoItem= $_POST["tipo_item"];

$itemDAO->inserirDados($item);







