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
    public $entrevistaInicio;
    public $entrevistaFim;
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
        $this->entrevistaInicio = $data->convert($row['entrevistaInicio']);
        $this->entrevistaFim = $data->convert($row['entrevistaFim']);
        $this->edital = $row['edital'];
        $this->empregador = $row['empregadorId'];
    }
    public function mostraLinha(){
        if(!isset($this->edital)){
            $detalhe = "detalhe/vaga/".$this->id;
        }else{
            $detalhe = $this->edital;
        }
        echo "
        <tr>
        <td>
        ".$this->id."
        </td>
        <td>
        ".$this->cargo."
        </td>
        <td>
        ".$this->nivel."
        </td>
        <td>
        ".$this->carga."
        </td>
        <td class=\"text-primary\">
        ".$this->vagas."
        </td><td>
            <a href=\"#\" onclick=\"popup('".$detalhe."')\" data-title=\"Saiba Mais\">
                <i class=\"material-icons\">
        open_in_new
                </i>
            </a>
            <a href=\"#\" onclick=\"popup('inscrever/vaga/".$this->id."')\" data-title=\"Inscever-se\">
                <i class=\"material-icons\">
        how_to_reg
                </i>
            </a>
        </td>
    </tr>";
    }
}