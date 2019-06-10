<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/06/2019
 * Time: 15:16
 */

class user{
    public static function inscricoes(){

        require_once (views."template/theme-header.phtml");
        require_once (views."template/nav.phtml");
        require_once (views."template/user-inscricoes.phtml");
        require_once (views."template/footer.phtml");
    }
}