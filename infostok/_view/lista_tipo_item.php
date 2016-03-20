<?php
/**
 * User: kauay_deveti
 * Date: 10/03/2016
 * Time: 20:58
 */
require_once("C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php");
require_once("../cabecalho.php");
require_once('C:/wamp/www/infostok/_class/_classDAO/Tipo_ItemDAO.php');
?>

    <div class="alinhar-formulario" style="margin-bottom: 10px">
        <a class="btn btn-primary" style="color: #ffffff; text-decoration: none; margin-bottom: 5px;" href="cadastrar_tipo_item.php">Novo Registro</a></button>
    </div>

    <table class="table table-bordered alinhar-formulario-2">
        <th>Nº</th>
        <th>Descrição</th>
        <?php
        $item_tipoDAO = new TipoItemDAO();
        $buscaTipo = $item_tipoDAO->buscarTipos();
        $item_tipoDAO = new TipoItemDAO();
        $buscaTipo = $item_tipoDAO->buscarTipos();
        foreach($buscaTipo as $array_tipo_DAO){?>
            <tr>
                <td value="<?=$array_tipo_DAO["id"]?>"><?=$array_tipo_DAO["id"]?></td>
                <td value="<?=substr($array_tipo_DAO["descricao"],10)?>"><?=$array_tipo_DAO["descricao"]?></td>
            </tr>
        <?php
        }
        ?>
    </table>

<?php
require_once("../rodape.php");

?>