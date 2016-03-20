<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 18/03/2016
 * Time: 23:30
 */

    session_start();
    function criarSessao($usuario)
    {
        return $_SESSION["usuario"] = $usuario;
    }

    function verificarSessao(){

        if(isset($_SESSION["usuario"])){

        }else{
            echo "usuario não logado";
            header("location: http://localhost/infostok/index?");
        }
    }

    function fecharSessao(){
        session_destroy();
        header("location: http://localhost/infostok/");
    }
