<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 09/03/2016
 * Time: 19:55
 */

    class Banco{

        public $username = "root";
        public $password = "";
        public $conexao;

        public function criarConexao()
        {
            // criando a conexão PDO.
            try {
                $this->conexao = new PDO("mysql:host=localhost;dbname=infostok2", $this->username, $this->password);
                $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
            return $this->conexao;
        }

        /*
        public function inserirDados(){

            try {
                $conexao = $this->criarConexao();
                $query = "insert into itens (codigoManual, descricao, numeroNota, idTipoItem) values (1, 'teste', 1, 1);";
                $stmt = $conexao->prepare($query);
                $stmt->execute();
            }catch (PDOException $e){
                echo "Error: ". $e->getMessage();
            }

        }
        public function buscarDados(){
            try{
                $conexao = $this->criarConexao();
                $query= "select id from itens";
                $stmt = $conexao->query($query);
                while($resultado = $stmt->fetch()){
                    echo $resultado["id"];
                }
            }catch (PDOException $e){
                $e->getMessage();
            }
        }
        */
    }