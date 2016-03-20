

    <div class="col-md-6">
        <label>Nº de registro:</label>
        <?php
        /* se a  variavel do get não existir, então o campo ficara intacto de forma normal para inserir dados.

        se não, se ela existir então pegara o valor passado em parametro e mostrará os valores.
        */
        if(!array_key_exists("id", $_GET)){?>
            <input class="form-control" type="number" disabled/>
        <?php
        }else {
            $id_item = $_GET["id"];
            $item->id = $id_item;
            $buscaItemID = $itemDAO->buscarDadosId($item);
            //foreach ($buscaItemID as $item_sql) {
            ?>
            <input class="form-control" name="id" type="number" value="<?= $buscaItemID["id"] ?>" readonly/>
        <?php
        }
        ?>
    </div>
    <div class="col-md-6">
        <label >Nº da Etiqueta:</label>
        <input class="form-control" type="number" value="<?= $buscaItemID["numeroEtiqueta"] ?>" name="numero_etiqueta" placeholder="Ex: CDBJ006"/><br/>
    </div>
    <div class="col-md-12">
        <label for="desc_tipoitem">Descrição:</label>
        <input class="form-control" id="desc_tipoitem" value="<?= $buscaItemID["descricao"] ?>" name="descricao_produto" type="text" placeholder="Ex: DELL OPTPLEX 10730">

        <label for="sel-tipo-item" style="margin-top: 10px">Categoria do Item</label>
        <select id="sel-tipo-item" name="tipo_item" class="form-control" >
            <?php
            $item_tipoDAO = new TipoItemDAO();
            $buscaTipo = $item_tipoDAO->buscarTipos();
            foreach($buscaTipo as $array_tipo_DAO){
                $categoriaAtual = $buscaItemID["desc_TipoItem"] == $array_tipo_DAO["descricao"];
                $selecionado = $categoriaAtual ? "selected='selected'" : "";
                ?>
                <option value="<?=$array_tipo_DAO["descricao"]?>" <?=$selecionado?>><?=$array_tipo_DAO["descricao"]?></option>
            <?php
            }
            ?>
        </select>
        <label for="sel-estado-item" style="margin-top: 10px;">Estado do item</label>
        <select id="sel-estado-item" name="estado-titem" class="form-control" style="margin-bottom: 10px;">
            <option value="0"> --> Selecione <-- </option>
            <option value="1">Novo</option>
            <option value="2">Usado</option>
        </select>
    </div>