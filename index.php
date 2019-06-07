<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 09:38
 */
if(isset($_GET['debug'])){
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);
}else{
    error_reporting(E_ALL);
    ini_set('display_errors', FALSE);
    ini_set('display_startup_errors', FALSE);
}

$server = $_SERVER['SERVER_ADDR'];
const server = "127.0.0.1";
define('base', "../../../jovem-aprendiz/");
define('models', "app/models/");
define('views', "app/views/");
define('controllers', "app/controllers/");
define('classes', "app/classes/");
define('config', "app/config/");
session_start();

    if(!isset($_SESSION['id'])){
        require_once (controllers.'Login.php');
        $login = new Login;
    }else{
        require_once("app/core/App.php");
        $app = new App;
    }