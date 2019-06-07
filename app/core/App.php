<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 09:36
 */

class App
{
    function __construct()
    {


        $url = $this->parseUrl($_GET['url']);
        if (!isset($_SESSION['id'])) {
            if ($url[0] != "cadastro") {
                require_once(controllers . 'Login.php');
                $login = new Login;
            }
        }else{
        $this->controller = $url[0];
        if (file_exists("app/controllers/" . $this->controller . ".php")) {
            require_once "app/controllers/" . $this->controller . ".php";
            unset($url[0]);
            if (isset($url[1]) && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } elseif (!isset($url[0])) {
                $this->method = "index";
            }
        } else {
            include_once("app/views/404/index.html");
        }

        $this->param = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->method], $this->param);
    }
}

    private function parseUrl($url){
    $url = explode("/", filter_var(rtrim($url), FILTER_SANITIZE_URL));
    if ($url[0] == "") {
        $url = array(0 => "home", 1=> "index");
    }

    return $url;
}
}
