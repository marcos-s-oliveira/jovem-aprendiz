<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 09:49
 */

class Login{
    public function __construct(){
        require_once (views.'template/header.phtml');
        require_once (views.'login/index.phtml');
    }
    public function sair(){
        session_unset();
        header("location: ".base);
    }
}