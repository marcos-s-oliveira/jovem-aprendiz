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
    public $cpf;
    public $email;
    public $nascimento;
    public $telefone;
    public $endereco;
    public $municipio;
    public $uf;
    public $logradouro;
    public $numero;
    public $bairro;
    public $sobre;
    public $empregador;
    /**
     * usuario constructor.
     * @param $id
     * @param $nome
     * @param $email
     */
    public function __construct($id){
        require_once (models."data.php");
        $data = new data;

        $query = "SELECT * FROM usuarios WHERE id = '".$id."' LIMIT 1";
        require_once (models."sql.php");
        $sql = new sql;
        $result = $sql->select($query);
        $row = mysqli_fetch_assoc($result);
        $this->id = $id;
        $this->nome = $row['nome'];
        $this->email = $row['email'];
        $this->nascimento = $row['nascimento'];
        $this->municipio = $row['municipio'];
        $this->uf = $row['uf'];
        $this->logradouro = $row['logradouro'];
        $this->numero = $row['numero'];
        $this->bairro = $row['bairro'];
        $this->telefone = $row['cel'];
        $this->cpf = $row['cpf'];
        $this->endereco = $row['logradouro'].", ".$row['numero']." ".$row['bairro']." - ".$row['municipio']." ".$row['uf'];
        $this->sobre = $row['about'];
        $this->empregador = $row['empregador'];
    }


}