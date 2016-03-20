<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 15/03/2016
 * Time: 22:00
 */

$idProduto = $_GET["id"];
?>
    <div class="container-fluid alinhar-formulario-2">
        <form id="form-movi-estoque" class="form-group">
                <label class="h4 text-info">Usuário: alan.quality</label><br />
                <input class="form-control" name="id-produto" value="<?=$idProduto?>" readonly/> <br />
                <label>Numero do Chamado: </label>
                <input id="numero-chamado" class="form-control" type="number" name="numero-chamado"/>
                <label>Tipo de Movimentação: </label>
                <select name="tipo-movi" class="form-control">
                    <option>Nenhum</option>
                    <option>Entrada</option>
                    <option>Saida</option>
                </select>
                <label>Quantidade: </label>
                <input class="form-control" type="number" name="movi-quantidade"/>
            <div class="col-md-6">
                <button class="btn btn-success" type="submit">Enviar Movimentação</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-danger col-md-6" type="button">Cancelar Movimentação</button>
            </div>
        </form>
    </div>
