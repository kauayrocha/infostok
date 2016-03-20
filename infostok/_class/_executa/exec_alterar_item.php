<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 10/03/2016
 * Time: 21:40
 */

require_once('C:/wamp/www/infostok/_class/_classDAO/ItensDAO.php');

// Alterar os dados dos itens na base
$item = new Itens();
$itemDAO = new ItensDAO();
$item->descricao= $_POST["descricao_produto"];
$item->numeroEtiqueta = $_POST["numero_etiqueta"];
$item->idTipoItem= $_POST["tipo_item"];
$item->id = $_POST["id"];

$itemDAO->alterarDados($item);


