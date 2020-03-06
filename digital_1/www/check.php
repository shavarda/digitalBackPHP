<?php
    header("Content-Type: text/html; charset=utf-8");
    mb_internal_encoding('UTF-8');
    
    $year = $_POST['year'];
    if (ctype_digit($year)) {
        if ($year > 0) {
            if (($year % 4 != 0) or (($year % 100 == 0) and ($year % 400 != 0))) {
                $result = 'НЕТ';
            } else {
                $result = 'ДА';
            }
        } else {
            $result = 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';
        }
    } else {
        $result = 'ОШИБКА ВО ВХОДНЫХ ДАННЫХ';
    }

    echo $result;
?>