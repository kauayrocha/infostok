<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 14/03/2016
 * Time: 20:27
 */
require_once('C:/wamp/www/infostok/_class/_banco/conexao.php');
require_once('C:/wamp/www/infostok/_class/Estoque.php');


    class EstoqueDAO{


        public function movimentarEstoque(Estoque $estoque){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $sql = "insert into estoque (usuario, movimentacao, numero_chamado, quantidade, idProduto) VALUES ('$estoque->usuario', '$estoque->tipo_movimentacao', $estoque->numeroChamado, $estoque->quantidade, $estoque->idProduto)";
                $prepare = $conexao->prepare($sql);
                $prepare->execute();
            }catch (PDOException $e){
                echo "Error: ". $e->getMessage();
            }
        }

        public function buscarDados(Estoque $estoque){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $query = "select movimentacao, quantidade, usuario, numero_chamado from estoque where idProduto =$estoque->idProduto";
                $stmt = $conexao->query($query);
                $arrayEstoque = array();
                while($resultado = $stmt->fetch()){
                    array_push($arrayEstoque, $resultado);
                }
                return $arrayEstoque;
            }catch(PDOException $e){
                echo "Erro: ". $e->getMessage();

            }
        }

        public function buscarSomaTotalEstoque(Estoque $estoque){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $query = "select sum(quantidade) from estoque where idProduto =$estoque->idProduto";
                $stmt = $conexao->query($query);
                $resultado = $stmt->fetch();
                return $resultado;
            }catch (PDOException $e){
                echo "Erro: ". $e->getMessage();
            }
        }

    }