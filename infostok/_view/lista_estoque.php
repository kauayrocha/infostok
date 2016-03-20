<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 12/03/2016
 * Time: 12:38
 */
require_once("C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php");
require_once("../cabecalho.php");
require_once('C:/wamp/www/infostok/_class/_classDAO/EstoqueDAO.php');
verificarSessao();

?>
<main>

            <!--<form class="form-inline">
                <div class="alinhar-formulario" style="margin-bottom: 10px;">

                        <!--<label>Codido:</label>
                        <input class="form-control" style="width: 60px; margin-right: 20px" />
                        <label>Descrição:</label>
                        <input class="form-control" style="width: 250px;" />-->
                        <!--<button type="button" class="alinhar-formulario-2 form-control" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-search"></span> <span class="text-center">Buscar Produtos</span> </button>-->
            <button class="alinhar-formulario-2 form-control"><a  href="busca_produtos?inicio=0&final=10"><span class="glyphicon glyphicon-search"></span>
                <span class="text-center">Buscar Produtos</span> </a></button>
                <!--</div>

            </form>
            <!-- Modal -->
            <!--
            <div  class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <?php
                                require_once("../_view/busca_produtos.php");
                            ?>
            </div>
            -->

            <?php
            $estoqueDAO = new EstoqueDAO();
            $estoque = new Estoque();

            // se a variavel _get (ID) exite então vai efetuar a inseração se não efetua =0
            if(!array_key_exists("id",$_GET)){
                $estoque->idProduto= 0;
                $buscaDadosEstoque = $estoqueDAO->buscarDados($estoque);
                $buscaSomaTotalEstoque = $estoqueDAO->buscarSomaTotalEstoque($estoque);
            }else{
                $estoque->idProduto= $_GET["id"];
                $buscaDadosEstoque = $estoqueDAO->buscarDados($estoque);
                $buscaSomaTotalEstoque = $estoqueDAO->buscarSomaTotalEstoque($estoque);
                ?>

                <table class="table alinhar-formulario-2">
                    <caption class="text-uppercase text-center">Movimentação do Estoque</caption>
                    <th>Usuário</th>
                    <th>Movimentação</th>
                    <th>Quantidade</th>
                    <th>Registro do CH</th>

                    <?php
                    // efetuado a condição, se a movimentação == Saida, então será acrescentado -, se não, será acrescentado +.
                    foreach($buscaDadosEstoque as $produtosDoEstoque){?>
                        <tr>
                            <td><?= $produtosDoEstoque["usuario"]?></td>
                            <td><?= $produtosDoEstoque["movimentacao"]?></td>
                            <?php
                            if($produtosDoEstoque["movimentacao"] == "Saida"){?>
                                <td><?= $produtosDoEstoque["quantidade"]?></td>
                            <?php
                            }else{?>
                                <td>+<?= $produtosDoEstoque["quantidade"]?></td>
                            <?php
                            }
                            ?>
                            <td>#<?= $produtosDoEstoque["numero_chamado"]?></td>
                        </tr>
                    <?php
                    }
                    ?>
                    <tr>
                        <td colspan="4">
                            <div class="col-md-12" >
                                <label>Total:</label>
                                <input class="form-control" value="<?= $buscaSomaTotalEstoque["sum(quantidade)"]?>" readonly/>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="alinhar-formulario-2">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-plus"></span> <span class="text-center">Movimentar Estoque</span> </button>
                </div>
                <!--</div>
            </form>
            <!-- Modal -->
                <!-- Modal feito para a movimentação do estoque, require o formulario de movimentação-->
                <div  class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                        <div style="background-color: #D8D8D8" class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title text-center" id="myModalLabel">Movimentar Estoque</h4>
                            </div>
                            <div class="modal-body">
                                <?php
                                require_once("../_view/movimentacao_estoque.php");
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>


</main>

<?php
require_once("../rodape.php");
?>