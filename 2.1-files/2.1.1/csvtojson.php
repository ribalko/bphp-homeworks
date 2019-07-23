<?php

    $fileName = 'data.csv';
    $csvData = file_get_contents($fileName);
    $lines = explode(PHP_EOL, $csvData);
    $j = 0;
    
    foreach ($lines as $line) {
        $line = iconv('windows-1251', 'UTF-8', $line);
        if ($lines[0] == $line) {
            $arraykeys = str_getcsv($line,';');
            continue;
        }

        $arrayline = str_getcsv($line,';');

        for ($i=0; $i<count($arraykeys); $i++) {
            $key = $arraykeys[$i];
            if ($arrayline[$i] == null) continue;
            $array[$j][$key] = $arrayline[$i];
        }
        $j++;
    }

    $json = json_encode($array);

    $file = fopen('data.json', 'w');
    $write = fwrite($file, $json);
    fclose($file);    

?>