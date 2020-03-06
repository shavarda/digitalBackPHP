<?php
    header("Content-Type: text/html; charset=utf-8");
    mb_internal_encoding('UTF-8');

    function findPrefix($hipster, $smoothie) {
        $result = array();
        
        if ($smoothie < $hipster) {
            echo 'Никто не пьёт';
        } else {
            $result = ($smoothie - ($smoothie % $hipster)) / $hipster;
            echo 'Каждый пьёт по ' . $result . ' напитка';
        }
    }

    $hipsterValue = 8;
    $smoothieValue = 16;

    findPrefix($hipsterValue, $smoothieValue);
?>