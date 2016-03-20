<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 09/03/2016
 * Time: 21:07
 */

require_once("C:/wamp/www/infostok/_class/_banco/conexao.php");
require_once("C:/wamp/www/infostok/_class/Usuarios.php");



    class UsuariosDAO{

        public function verificarUsuario(Usuarios $usuario){
            $con = new Banco();
            try{
                $conexao = $con->criarConexao();
                $query = "select usuario, senha from usuarios where usuario= '{$usuario->getUsuario()}' and senha= '{$usuario->getSenha()}'";
                $stmt = $conexao->query($query);
                $resultado = $stmt->fetch();
                return $resultado;
            }catch (PDOException $e){
                echo "Error: ". $e->getMessage();
            }

    }

    }
