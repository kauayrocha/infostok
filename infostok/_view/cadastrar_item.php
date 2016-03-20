<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 06/03/2016
 * Time: 12:05
 */
require_once("C:/wamp/www/infostok/cabecalho.php");
require_once("C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php");
require_once('C:/wamp/www/infostok/_class/_classDAO/Tipo_ItemDAO.php');
require_once('C:/wamp/www/infostok/_class/_classDAO/ItensDAO.php');

verificarSessao();
// criado uma formulario base, para servir como base para os formularios de cadastrar e
// para o formulario de alterar_item, pegado o formulario de alterar bomo base principal, por isso a criação da
// array abaixo e declarado campos domo "", para preencher em branco.
$buscaItemID = array("id"=>"", "descricao"=>"", "numeroEtiqueta"=>"", "desc_TipoItem"=>"");
?>


    <main>
        <div id="div" class="alinhar-formulario-2">
            <fieldset>
                <legend style="text-align: center">Cadastrar Produto</legend>
                <form id="form_cadastrar_item" class="form-group" method="post">
                        <?php
                        require_once("formulario-base.php");
                        ?>
                        <div class="col-md-6">
                            <button class="btn btn-success" type="submit">Cadastrar</button>
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