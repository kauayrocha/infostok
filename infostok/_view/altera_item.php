<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 06/03/2016
 * Time: 12:05
 */
require_once("C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php");
require_once("C:/wamp/www/infostok/cabecalho.php");
require_once('C:/wamp/www/infostok/_class/_classDAO/Tipo_ItemDAO.php');
require_once('C:/wamp/www/infostok/_class/_classDAO/ItensDAO.php');
verificarSessao();
?>
    <main>
        <div id="div" class="alinhar-formulario-2">
            <fieldset>
                <legend style="text-align: center">Alterar Produto</legend>
                <form id="form_alterar_item" class="form-group" method="post">

                    <?php
                    if(!array_key_exists("id", $_GET)){
                        echo "<p class='text-danger text-center'>Erro de pesquisa</p>";
                    }else{
                        $itemDAO = new ItensDAO();
                        $item = new Itens();
                        $id_item = $_GET["id"];
                        $item->id = $id_item;
                        $buscaItemID = $itemDAO->buscarDadosId($item);
                        require_once("formulario-base.php");
                    }
                    ?>
                    <div class="col-md-6">
                        <button class="btn btn-success" type="submit">Alterar</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-danger" type="reset">Limpar</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </main>
<?php
require_once("../rodape.php");

?>