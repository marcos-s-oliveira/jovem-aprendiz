<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 13:42
 */

class cadastro{
    public function index(){
        require_once (views."template/header.phtml");
        require_once (views."forms/cadastro.phtml");
    }
}