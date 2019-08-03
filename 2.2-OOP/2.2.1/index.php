<?php

    require './autoload.php';
    require './config/SystemConfig.php';

    $fileJSON = new JsonFileAccessModel('data');
    $content = $fileJSON->read();
    echo $content;
    print_r($fileJSON);

?>