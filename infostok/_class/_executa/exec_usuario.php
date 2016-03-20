<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 18/03/2016
 * Time: 20:36
 */
require_once('C:/wamp/www/infostok/_class/_classDAO/UsuariosDAO.php');
require_once('C:/wamp/www/infostok/_class/_executa/verificar_sesssao.php');

$usuario = new Usuarios();
$usuarioDAO = new UsuariosDAO();
$usuario->setUsuario($_POST["usuario"]);
$usuario->setSenha($_POST["senha"]);


$verificar = $usuarioDAO->verificarUsuario($usuario);
if($verificar){
    criarSessao($verificar['usuario']);
    header("location: http://localhost/infostok/_view/dashboard?");
    echo "encontrado";
}else{
    header("location: http://localhost/infostok/?fracasso=true");
    echo "não encontrado". $verificar;
}