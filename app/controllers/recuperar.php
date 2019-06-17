<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 17/06/2019
 * Time: 14:57
 */

class recuperar{
    public static function index(){
        require_once (views."template/header.phtml");
        require_once (views."forms/recuperar.phtml");
    }
}