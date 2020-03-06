<?php
    header("Content-Type: text/html; charset=utf-8");
    mb_internal_encoding('UTF-8');

    function findPrefix($prefix, $array) {
        $result = array();
        
        foreach($array as $elem) {
            if(mb_stripos($elem, $prefix, 0, 'UTF-8') === 0) {
                array_push($result, $elem);
            }
        }
        
        print_r($result);
    }

    $prefixValue = "при";
    $arrayValue = array("Природа", "Объект", "Собрание", "Привет", "Как дела?", "Эх");

    findPrefix($prefixValue, $arrayValue);
?>