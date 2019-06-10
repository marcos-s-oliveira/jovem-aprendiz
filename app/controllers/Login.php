<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 09:49
 */

class Login{
    public function entrar(){
        require_once (views.'template/header.phtml');
        require_once (views.'login/index.phtml');
    }
    public function sair(){
        session_unset();
        header("location: ".base);
    }
    public function processa(){
        if (isset($_POST)){
            die(print_r($_POST));
            $email = addslashes($_POST['email']);
            $pass = addslashes(md5($_POST['pass']));
            require_once (models."valida.php");
            $valida = new valida($email, $pass);
            unset($_POST);
        }
    }
}