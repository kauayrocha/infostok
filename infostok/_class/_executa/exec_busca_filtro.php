<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 19/03/2016
 * Time: 18:29
 */

require_once('C:/wamp/www/infostok/_class/_classDAO/ItensDAO.php');

$item = new Itens();
$itemDAO = new ItensDAO();
$item->descricao= $_POST["descricao"];
$resultado = $itemDAO->buscarItensPorDescricao($item);
//$item = $_POST["palavra"];
echo "<table>";
echo "<th>Nº</th>";
echo "<th>Nº Etiqueta</th>";
echo "<th>Descrição</th>";
echo "<th>Categoria</th>";
echo "<th hidden='hidden'></th>";
echo "<tr>";
foreach($resultado as $res){
    echo "<td id='td'>$res[id]</td>";
    echo "<td>$res[numeroEtiqueta]</td>";
    echo "<td>$res[descricao]</td>";
    echo "<td>$res[desc_TipoItem]</td>";
    echo "<td class='table-bordered'><a href='altera_item?id=$res[id]' class='btn btn-warning' style='padding: 2px'><span class='glyphicon glyphicon-pencil'></span> Editar</a></td></tr>";
}
echo "</table>";



