<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 12/07/2019
 * Time: 09:30
 */

class Delete{
    public static function curriculo($id){
        if($_GET['confirma'] == "yes"){
            $query = "DELETE FROM curriculos WHERE id='".$id."'";
            require_once (models."sql.php");
            $sql = new sql;
            $result = $sql->insert($query);
            if($result){
                ?>
                <script type="text/javascript">
                    window.close();
                </script>
                <?php
            }
        }
        require_once (views."template/theme-header.phtml");
        ?>
        <div class="container">
            <center>
                <h2>
                    Tem certeza?
                </h2>
                <h5>
                    Clicando em "CONFIRMAR", você excluirá <b>PERMANENTEMENTE</b> o seu arquivo da nossa Base de Dados.
                </h5>
                <a href="#" onclick="window.location.replace('?confirma=yes')"><button class="btn btn-primary">Confirmar</button></a>
                <a href="#" onclick="window.close();"><button class="btn btn-primary">Cancelar</button></a>
            </center>
        </div>
        <?php
        require_once (views."template/footer.phtml");
    }
}