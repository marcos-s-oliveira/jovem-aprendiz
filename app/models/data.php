<?php
/**
 * Created by PhpStorm.
 * User: Marcos
 * Date: 10/06/2019
 * Time: 11:23
 */

class data{
    public function convert($date){
        $part = explode("-", $date);
        $y = $part[0];
        $m = $part[1];
        $d = $part[2];
        $data = $d."/".$m."/".$y;
            return $data;
    }
}