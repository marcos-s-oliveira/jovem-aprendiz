<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/06/2019
 * Time: 08:17
 */

class inscrever{
    public static function vaga($id){
        require_once (classes."usuario.php");
        require_once (models."sql.php");
        require_once (controllers."Gerar.php");
        $usuario = new usuario($_SESSION['id']);
        $sql = new sql;
        $query = "INSERT INTO inscritos (vagaId, usuarioId) VALUES ('$id', '$usuario->id')";
        $result = $sql->insert($query);

        if($result == 1){
            $gera = new Gerar;
            $gera->comprovante(null);

        }elseif($result == 1062){
            ?>
            <script type='text/javascript'>
            alert("Você já se inscreveu para esta vaga.\nAguarde o contato do empregador.");
            window.close();
            </script>
            <?php
        }
    }

}