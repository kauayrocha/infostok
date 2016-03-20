<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 06/03/2016
 * Time: 12:05
 */
require_once("C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php");
require_once("../cabecalho.php");

verificarSessao();
?>
<main>
    <div id="div" class="alinhar-formulario-2">
        <fieldset>
            <legend style="text-align: center">Cadastro dos tipos de produto</legend>
            <form  id="form-cad-tipo-item" class="form-group" method="post">
                <div class="col-md-12">
                    <label for="desc_tipoitem">Descrição:</label>
                    <input class="form-control" id="desc_tipoitem" name="descricao" type="text">
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                <div class="col-md-6">
                    <button type="button" class="btn btn-danger">Limpar</button>
                </div>
            </form>
        </fieldset>
    </div>
</main>
<script type="text/javascript">
    /* por a div com o hidden false*
    var botao = window.document.getElementById("btn");
    var div_hidden = window.document.getElementById("div");
    // div está escondida ao iniciar, após um novo registro ela reaparece e o botão desaparece.
    div_hidden.style.display = "none";
        botao.onclick = function(){
            div_hidden.style.display = "block";
            this.style.display = "none";
        }
        */
</script>
<?php
require_once("../rodape.php");

?>