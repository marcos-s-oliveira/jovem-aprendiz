<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/06/2019
 * Time: 09:17
 */

class vaga{
    public $id;
    public $cargo;
    public $nivel;
    public $carga;
    public $vagas;
    public $inscricoesInicio;
    public $inscricoesFim;
    public $edital;
    public $empregador;

    public function __construct($id){
        require_once (models."data.php");
        $data = new data;
        require_once (models."sql.php");
        $sql = new sql;
        $query = "SELECT * FROM vagas WHERE id = '".$id."' LIMIT 1";
        $result = $sql->select($query);
        $row = mysqli_fetch_assoc($result);
        $this->id = $row['id'];
        $this->cargo = $row['cargo'];
        $this->nivel = $row['nivel'];
        $this->carga = $row['carga'];
        $this->vagas = $row['vagas'];
        $this->inscricoesInicio = $data->convert($row['inicio']);
        $this->inscricoesFim = $data->convert($row['fim']);
        $this->edital = $row['edital'];
        $this->empregador = $row['empregadorId'];
    }
}