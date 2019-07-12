<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 12/07/2019
 * Time: 12:28
 */

class Vaga{
    public static function nova(){
        require_once (classes."usuario.php");
        $usuario = new usuario($_SESSION['id']);
        if($usuario->empregador == 1){
            require_once (views."template/theme-header.phtml");
            require_once (views."template/empregador-nav.phtml");
            require_once (views."forms/vaga-nova.phtml");
            require_once (views."template/footer.phtml");
        }else{
            header("location ../../");
        }
    }
}