<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 11/03/2016
 * Time: 21:04
 */
require_once('C:/wamp/www/infostok/_class/_classDAO/Tipo_ItemDAO.php');


$tipo = new TipoItemDAO();
$tipo_item = new Tipo_Item();

$tipo_item->descricao = $_POST["descricao"];

$tipo->inserirTipoItem($tipo_item);

