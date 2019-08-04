<?php
/*Подключение необходимых файлов*/

/*Создание объекта*/
$newuser = new User;

/*Передача значений свойств из формы в объект*/
$name = $_POST['name']; 
$email = $_POST['email']; 
$password = $_POST['password'];
$rate = $_POST['rate']; 

/*Сохранение*/
$newuser->commit();

/*Далее перенаправление на страницу, с которой производилась отправка формы:*/
header('HTTP/1.1 200 OK'); 
header('Location: http://' . $_SERVER['HTTP_HOST'] . '/2.2-OOP/2.2.2');

?>