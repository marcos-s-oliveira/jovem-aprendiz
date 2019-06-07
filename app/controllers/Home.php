<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 09:45
 */

class Home{
    public static function index(){

        require_once (classes."usuario.php");
        $usuario = new usuario($_SESSION['id']);
        echo 'bem-vindo '.$usuario->nome.'<a href="Login/sair">sair</a>';
        //require_once (views.)
    }
}