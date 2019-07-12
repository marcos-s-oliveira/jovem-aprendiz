<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 12/07/2019
 * Time: 16:46
 */

class Empresa{
    public static function vagas(){
        require_once (classes."usuario.php");
        $usuario = new usuario($_SESSION['id']);
        if($usuario->empregador == 1){
            require_once (views."template/theme-header.phtml");
            require_once (views."template/empregador-nav.phtml");
            require_once (views."tables/vagas-empresa.phtml");
            require_once (views."template/footer.phtml");
        }
    }
}