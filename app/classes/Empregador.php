<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/06/2019
 * Time: 11:12
 */

class Empregador{
    public $id;
    public $nome;
    public $email;
    public $telefone;

    public function __construct($id){
        $query = "SELECT * FROM empregador WHERE id = '".$id."' LIMIT 1";
        require_once (models."sql.php");
        $sql = new sql;
        $result = $sql->select($query);
        $row = mysqli_fetch_assoc($result);
        $this->nome = $row['nome'];
        $this->email = $row['email'];
        $this->telefone = $row['telefone'];
    }
}