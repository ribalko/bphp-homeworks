<?php

    require './autoload.php';
    require './config/SystemConfig.php';

    $fileJSON = new JsonFileAccessModel('data');
    $content = $fileJSON->readJson();
    print_r($content);    

?>