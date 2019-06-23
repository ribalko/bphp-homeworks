<?php

    $login = $_POST['login']; 
    $password = $_POST['password']; 
    $email = $_POST['email']; 
    $firstName = $_POST['firstName']; 
    $lastName = $_POST['lastName']; 
    $middleName = $_POST['middleName']; 
    $codeWord = "nd82jaake"; 


    if (preg_match('/^[aA-zZ0-9\-_]+$/', $login) == 0) {
        $formErrors[] = "Недопустимые символы в логине";
    };  

    if (strlen($password) < 8) {
        $formErrors[] = "Длина пароля должна быть минимум 8 символов";
    };  

    if (preg_match('/^((([0-9A-Za-z]{1}[-0-9A-z\.]{1,}[0-9A-Za-z]{1})|([0-9А-Яа-я]{1}[-0-9А-я\.]{1,}[0-9А-Яа-я]{1}))@([-A-Za-z]{1,}\.){1,2}[-A-Za-z]{2,})$/u', $email) == 0) {
        $formErrors[] = "Введен неверный почтовый адрес";
    };  

    if (strlen($firstName) == 0) {
        $formErrors[] = "Имя обязательно к заполнению";
    };

    if (strlen($lastName) == 0) {
        $formErrors[] = "Фамилия обязательна к заполнению";
    };

    if (strlen($middleName) == 0) {
        $formErrors[] = "Отчество обязательно к заполнению";
    };

    if ($_POST['code'] <> $codeWord) {
        $formErrors[] = "Неверное кодовое слово";
    };

    if (count($formErrors) == 0) {
        echo "<h1>Спасибо за заполнение! Ваша форма успешно обработана.</h1>";
    } else {
        echo "<h1>При заполнении формы допущены следующие ошибки:</h1>";
        foreach ($formErrors as $message) {
            echo "<p>$message</p>";
        }        
    };



?>