<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 11:37
 */

class usuario{
    public $id;
    public $nome;
    public $email;

    /**
     * usuario constructor.
     * @param $id
     * @param $nome
     * @param $email
     */
    public function __construct($id){
        $this->id = $id;
        $query = "SELECT nome, email FROM usuarios WHERE id = '".$this->id."' LIMIT 1";
        require_once (models."sql.php");
        $sql = new sql;
        $result = $sql->select($query);
        $row = mysqli_fetch_assoc($result);
        $this->nome = $row['nome'];
        $this->email = $row['email'];
    }


}