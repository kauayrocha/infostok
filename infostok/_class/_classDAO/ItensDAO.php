<?php
/**
  User: kauay_deveti
  Date: 09/03/2016
  Time: 21:07
 */

require_once('C:/wamp/www/infostok/_class/_banco/conexao.php');
require_once('C:/wamp/www/infostok/_class/Itens.php');

    class ItensDAO{

        public function inserirDados(Itens $itens){
            $con = new Banco();
            try {
                $conexao = $con->criarConexao();
                $query = "insert into itens (numeroEtiqueta, descricao, desc_TipoItem) values ($itens->numeroEtiqueta, '$itens->descricao', '$itens->idTipoItem');";
                $stmt = $conexao->prepare($query);
                $stmt->execute();
            }catch (PDOException $e){
                echo "Error: ". $e->getMessage();
            }
        }
        public function alterarDados(Itens $itens){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $sql = "update itens set descricao= '$itens->descricao', numeroEtiqueta= $itens->numeroEtiqueta, desc_TipoItem='$itens->idTipoItem' where id= $itens->id";
                $stmt = $conexao->prepare($sql);
                $stmt->execute();
            }catch(PDOException $e){
                echo "Erro sql:". $e->getMessage();
            }

        }
        // SELECTS
        public function buscarDados($inicio, $final){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $query= "select * from itens limit $inicio,$final";
                $stmt = $conexao->query($query);
                $array_produtos = array();
                while($resultado = $stmt->fetch()){
                    array_push($array_produtos,$resultado);
                }
            }catch (PDOException $e){
                $e->getMessage();
            }
            return $array_produtos;
        }
        public function buscarDadosId(Itens $itens){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $query = "select * from itens where id = $itens->id";
                $stmt = $conexao->query($query);
                $resultado = $stmt->fetch();
               // $array = array();
                //while ($resultado = $stmt->fetch()){
                  //  array_push($array, $resultado);
               // }
                return $resultado;
            }catch (PDOException $e){
                echo "Erro: ". $e->getMessage();
            }
        }
        public function buscarItensPorDescricao(Itens $itens){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $query = "select * from itens where descricao like '%$itens->descricao%'";
                $stmt = $conexao->query($query);
                $arrayProdutos = array();
                while($resultado = $stmt->fetch()) {
                    array_push($arrayProdutos, $resultado);
                }
                return $arrayProdutos;
            }catch (PDOException $e){
                echo "Error: ". $e->getMessage();
            }
        }
    }



