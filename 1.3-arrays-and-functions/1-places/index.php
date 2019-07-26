<?php

    function isEnoughChairs($array,$chairs) {
        if (count($array, COUNT_RECURSIVE) - count($array) == $chairs) {
            return true;
        }
        return false;
    }

    function generate($rows,$places,$chairs) {
        
        for ($i=0; $i<$rows; $i++) {
            for ($j=0; $j<$places; $j++) {
                $array[$i][$j] = false;
                if (isEnoughChairs($array,$chairs)) {
                    break;
                }
            }
            if (isEnoughChairs($array,$chairs)) {
                break;
            }
        }
        return $array;
    }

    function reserve($map, $requiredRow, $requiredPlace) {
        if (($map[$requiredRow][$requiredPlace] == false) && isset($map[$requiredRow][$requiredPlace])) {
            return true;
        }
        return false;
    }

    $chairs = 30;
    $map = generate(5, 8, $chairs);
    $requiredRow = 3;
    $requiredPlace = 5;

    $reverve = reserve($map, $requiredRow, $requiredPlace);
    logReserve($requiredRow, $requiredPlace, $reverve);


    function logReserve($row, $place, $result){
        if ($result) {
            echo "Ваше место забронировано! Ряд $row, место $place".PHP_EOL;
        } else {
            echo "Что-то пошло не так=( Бронь не удалась".PHP_EOL;
        }
    }

?>