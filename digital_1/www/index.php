<?php
    header("Content-Type: text/html; charset=utf-8");
    mb_internal_encoding('UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>
        Первое задание
    </title>
</head>
<body>
    <form class="form">
        <label>
            Введите год:
        </label>
        <br>
        <input id="year" type="text" name="year">
        <button type="submit">
            Проверить
        </button>
    </form>
    <div id="answer"></div>
</body>
<script src="jquery.js"></script>
<script src="main.js"></script>
</html>