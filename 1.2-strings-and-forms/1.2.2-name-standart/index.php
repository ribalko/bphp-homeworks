<?php

    $firstName = $_POST['firstName']; 
    $lastName = $_POST['lastName']; 
    $middleName = $_POST['middleName']; 

    $fullName =  ucfirst($firstName) . ' ' . ucfirst($lastName) . ' ' . ucfirst($middleName);
    $fio = strtoupper(mb_substr($firstName,0,1) . mb_substr($lastName,0,1) . mb_substr($middleName,0,1));
    $surnameAndIntials = ucfirst($firstName) . ' ' . strtoupper(mb_substr($lastName,0,1)). '.'  . strtoupper(mb_substr($middleName,0,1)) . '.';

    echo "Полное имя: " . $fullName . "<br>";
    echo "Фамилия и инициалы: " . $fio . "<br>";
    echo "Аббревиатура: " . $surnameAndIntials . "<br>";

?>