<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 11/03/2016
 * Time: 21:01
 */
require_once("C:/wamp/www/infostok/_class/_banco/conexao.php");
require_once("C:/wamp/www/infostok/_class/Tipo_Item.php");



    class TipoItemDAO extends Banco{

        public function inserirTipoItem(Tipo_Item $tipo_Item){
            $banco = new Banco();
            $conexao = $banco->criarConexao();
            try{
                $sql = "insert into tipo_item(descricao) values ('$tipo_Item->descricao')";
                $prp_stmt = $conexao->prepare($sql);
                $prp_stmt->execute();
            }catch (PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }
        public function buscarTipos(){
            $banco = new Banco();
            $conexao = $banco->criarConexao();
            try{
                $query = "select * from tipo_item";
                $stmt = $conexao->query($query);
                $array_tipo = array();
                while($resultado = $stmt->fetch()){
                    array_push($array_tipo, $resultado);
                }
            }catch (PDOException $e){
                echo "Erro:". $e->getMessage();
            }
            return $array_tipo;
        }
    }