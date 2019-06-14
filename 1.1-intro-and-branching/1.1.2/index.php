<?php
//  Ваш программный код, в котором определяются значения 
//  переменных для последующего задания текста и стилей

    $hour = date("H");
    if (($hour >= 6) && ($hour < 11)) {
        $greeting = "Доброе утро!";
        $image = "./img/morning.jpg";
    } if (($hour >= 11) && ($hour < 18)) {
        $greeting = "Добрый день!";
        $image = "./img/afternoon.jpg";
    } if (($hour >= 18) && ($hour < 23)) {
        $greeting = "Добрый вечер!";
        $image = "./img/evening.jpg";
    } else {
        $greeting = "Доброй ночи!";
        $image = "./img/night.jpg";
    }

    $dayOfWeek = date("N"); 
    
    if ($dayOfWeek == 1) {
        $today = "Сегодня понедельник";
    } else if ($dayOfWeek == 2) {
        $today = "Сегодня вторник";
    } else if ($dayOfWeek == 3) {
        $today = "Сегодня среда";
    } else if ($dayOfWeek == 4) {
        $today = "Сегодня четверг";
    } else if ($dayOfWeek == 5) {
        $today = "Сегодня пятница";
    } else if ($dayOfWeek == 6) {
        $today = "Сегодня суббота";
    }else {
        $today = "Сегодня воскресенье";
    };    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <!-- подключение стилевого файла -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- Ваша html-вёрстка, частично задаваемая с помощью PHP -->
    <div class="img" style="background-image: url(<?= $image; ?>)">
        <div class="greeting">
            <h1><?= $greeting ?></h1>
            <h2><?= $today ?></h2>
        </div>
    </div>
</body>
</html>