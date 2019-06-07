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

        require_once (views."template/theme-header.phtml");
        require_once (views."template/nav.phtml");
    }
}