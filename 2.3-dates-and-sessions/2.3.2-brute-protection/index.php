<?php
$users = [
    'admin' => 'admin1234',
    'randomUser' => 'somePassword',
    'janitor' => 'nimbus2000'
];

function logging($login) {
   $date = date_create('now');
   $fp = fopen($login.'.txt', 'a+');
   fwrite($fp, date_format($date,'Y-m-d H:i:s') . " \n");
   fclose($fp);
   echo '<p style="text-align: center;">Слишком часто вводите пароль. Попробуйте еще раз через минуту.</p>';
   die();
}

$login = $_POST['login'];
$password = $_POST['password'];

if ($users[$login] == $password) {
    echo '<h1 style="text-align: center; color: green;">Login successfull</h1>';
}
else {
    echo '<h1 style="text-align: center; color: red;">Wrong credentials</h1>';
    $datetime = time();
    $interval = 10;

    if (!isset($_COOKIE[$login])) $counter  =  1;
    else {
        $get_cook = unserialize($_COOKIE[$login]);
        $counter  =  $get_cook[count] + 1;    
        $interval = $datetime - $get_cook[datetime];      
    }
    $cook_val = array('count' => $counter, 'datetime' => $datetime);    

    if (($counter == 3) || ($interval <= 5)) {
        logging($login);
    }
    else {
        setcookie($login, serialize($cook_val), time() + 60);
        header("refresh: 10; url=form.html");
    }
}