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
        if($usuario->empregador == 1){
            require_once (views."template/theme-header.phtml");
            require_once (views."template/empregador-nav.phtml");
            require_once (views."template/empregador-dashboard.phtml");
            require_once (views."template/footer.phtml");
        }else{
            require_once (views."template/theme-header.phtml");
            require_once (views."template/nav.phtml");
            require_once (views."template/user-dashboard.phtml");
            require_once (views."template/footer.phtml");
        }
    }
}