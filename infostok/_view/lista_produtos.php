<?php
/**
 * User: kauay_deveti
 * Date: 10/03/2016
 * Time: 20:42
 */

require_once("C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php");
require_once("../cabecalho.php");
require_once("../_class/_banco/conexao.php");
require_once("../_class/_classDAO/ItensDAO.php");

verificarSessao();
// LEMBRETE QUALQUER ALTERAÇÃO REALIZADA AQUI PRECISA SER FEITA TAMBÉM NO ARQUIVO BUSCA_PRODUTOS, POR CAUSA DO ESTOQUE.
?>

    <main>
        <div class="alinhar-formulario" style="margin-bottom: 10px">
            <a class="btn btn-primary" style="color: #ffffff; text-decoration: none" href="cadastrar_item.php">Novo Registro</a>
        </div>

        <div id="pesquisa-item" class="input-group alinhar-formulario-2" style="width: 495px; margin-bottom: 10px">
                <input id="campo-pesquisar" type="text" class="form-control" name="campo-pesquisa" placeholder="Digite aqui o que deseja">
        </div>
        <table id="tables" class="table alinhar-formulario-2" style="width: 700px" align="center">
            <th>Nº</th>
            <th>Nº Etiqueta</th>
            <th>Descrição</th>
            <th>Categoria</th>
            <th hidden="hidden"></th>
                <?php
                if(!isset($_GET["inicio"]) && !isset($_GET["final"])){
                    echo "<p class='text-danger text-center'>Sem indice de busca</p>";
                }else {
                    $itensDAO = new ItensDAO();
                    $inicio = $_GET["inicio"];
                    $final = $_GET["final"];
                    $resultado = $itensDAO->buscarDados($inicio, $final);
                    $maximo = 1;
                    // loop for, e enquanto o index ID for menor que 5 então ele roda o loop, se não ele para de rodar
                    foreach ($resultado as $ids) {
                        //while($ids["id"] == $maximo){
                        ?>
                        <tr>
                            <!-- for link in table onclick="location.href='www.google.com'"  id="tr" onclick="location.href='#'" style="cursor:pointer"-->
                            <td id="td"> <?= $ids["id"] ?></td>
                            <td> <?= $ids["numeroEtiqueta"] ?></td>
                            <td> <?= substr($ids["descricao"], 0, 20); ?></td>
                            <td><?= substr($ids["desc_TipoItem"], 0, 10) ?></td>
                            <td class="table-bordered"><a href="altera_item?id=<?= $ids["id"] ?>"
                                                          class="btn btn-warning" style="padding: 2px"><span
                                        class="glyphicon glyphicon-pencil"></span> Editar</a></td>
                        </tr>

                    <?php
                    }
                    // <?php
                    //if($maximo==5){
                    //    break;
                    //}else {
                    //     $maximo++;
                    // }
                    //}
                }
                //?>

        </table>
        <div class="alinhar-formulario" style="width: 90px">
            <ul class="pagination">
                <?php
                // verifica se existe os indices do get para realizar a paginação.
                if(!isset($_GET["inicio"]) && !isset($_GET["final"])){
                    $paginaMenos= 0;
                    $finalMenos = 10;
                    $paginaPlus= 0;
                    $finalPlus = 10;
                }else{
                    $paginaMenos = $_GET["inicio"] - 10;
                    $finalMenos = $_GET["final"] - 10;
                    $paginaPlus= $_GET["inicio"]+10;
                    $finalPlus = $_GET["final"]+10;
                }
                ?>
                <li><a href="lista_produtos?inicio=<?=$paginaMenos?>&final=<?=$finalMenos?>"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                <li><a href="lista_produtos?inicio=<?=$paginaPlus?>&final=<?=$finalPlus?>"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
            </ul>
        </div>
    </main>
    <script src="../_js/jquery-2.2.0.min.js"></script>
<script>
    /*
    window.document.ready = function (){
        var td = window.document.getElementsByTagName("td");
        td.onclick = function(){
            alert("teste");
        }
    };
    $(document).ready(function(){
        $("tr").click(function(){
            $(this).find('td').each(function(i) {
                $th = $("th")[i];
                alert(jQuery($th).text() + ": " + $(this).html())
            });
        })
    });
*/

</script>
<?php
require_once("../rodape.php");

?>