<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 10:34
 */

class db{
    protected $host;
    protected $user;
    protected $pass;
    protected $db;
    public $link = null;

    /**
     * db constructor.
     * @param $host
     * @param $user
     * @param $pass
     * @param $db
     * @param null $conn
     */
    public function __construct(){
        $this->host = "127.0.0.1";
        $this->user = "root";
        $this->pass = "";
        $this->db = "inscricoes";

        $this->link = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

}