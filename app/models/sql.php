<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 07/06/2019
 * Time: 10:32
 */

class sql{
    public function select($query){
        require_once (config."db.php");
        $db = new db;
        $link = $db->link;
        $select = mysqli_query($link, $query) or die(mysqli_error($link));
        return $select;
    }
}