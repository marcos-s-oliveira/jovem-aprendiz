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
        $this->id = $id;
        $this->nome = $row['nome'];
        $this->email = $row['email'];
        $this->telefone = $row['telefone'];
    }
    public function mostraVagas(){
        ?>
        <div class="col-md-12" xmlns="http://www.w3.org/1999/html">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title "><?php echo $this->nome;?></h4>
                    <p class="card-category">Contato:</p>
                    <p><?php echo $this->email."  |  <span>".$this->telefone."</span>";?></p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr><th>Código</th><th>Cargo</th><th>Localidade</th><th>Nível</th><th>Carga Horária</th><th>Vagas</th><th></th>
                            </tr></thead>
                            <tbody>
                            <?php
                            $hoje = strtotime(date("Y-m-d"));
                            $query = "SELECT * FROM vagas WHERE empregadorId = '".$this->id."' AND ativo = 1 ORDER BY id ASC";

                            require_once (models."sql.php");
                            require_once (classes."vaga.php");
                            $sql = new sql;
                            $result = $sql->select($query);
                            if(mysqli_num_rows($result) >0){
                                while($row = mysqli_fetch_assoc($result)){

                                    if(strtotime($row['inicio']) < $hoje || strtotime($row['fim']) > $hoje){
                                        $vaga = new vaga($row['id']);
                                        $vaga->mostraLinha();
                                    }

                                }
                            }
                            else{
                                echo "
                    <tr><td colspan='6'>Nenhuma vaga aberta.</td></tr>
                    ";
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}