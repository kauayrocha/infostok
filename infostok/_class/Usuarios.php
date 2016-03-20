<?php
/**
 * Created by PhpStorm.
 * User: kauay_deveti
 * Date: 01/03/2016
 * Time: 20:46
 */
    class Usuarios{

        private $usuario;
        private $senha;


        public function getUsuario(){
            return $this->usuario;
        }
        public function setUsuario($usuario){
            $this->usuario= $usuario;
        }
        public function getSenha(){
            return $this->senha;
        }
        public function setSenha($senha){
            $this->senha = $senha;
        }


    }