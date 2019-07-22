<form enctype="multipart/form-data" action="index.php" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>


<?php

    $uploaddir = './img/';
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    echo '<pre>';
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Файл корректен и был успешно загружен.\n";
    }
    else {
        echo "Возможная атака с помощью файловой загрузки!\n";
    }


    print "</pre>";

    $files = scandir($uploaddir);

    foreach ($files as $file) {
        if($file === '.' || $file === '..') continue;
        echo '<img src="'.$uploaddir.$file.'"><br>';
    }    

?>



