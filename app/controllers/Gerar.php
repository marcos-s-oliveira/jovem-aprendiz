<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/06/2019
 * Time: 09:05
 */

class Gerar{
    public static function comprovante($id){
        require_once (classes."usuario.php");
        require_once (classes."vaga.php");
        require_once (classes."Empregador.php");
        require_once (models."sql.php");
        if($id == null){
            $query = "SELECT * FROM inscritos ORDER BY id DESC LIMIT 1";
        }else{
            $query = "SELECT * FROM inscritos WHERE id = '".$id."' ORDER BY id DESC LIMIT 1";
        }
        $sql = new sql;
        $result = $sql->select($query);
        $row = mysqli_fetch_assoc($result);
        require_once(views."comprovante/comprovante.phtml");
    }
}