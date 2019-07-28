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

    function tryToReserve($map, $requiredPlaces) {

        for ($i=0; $i<count($map); $i++) {
            $countdown = $requiredPlaces;
            for ($j=0; $j<count($map[$i]); $j++) {
                if (($j + $countdown) > (count($map[$i]))) {
                    break;
                }
                if ($map[$i][$j] === false) {
                    $countdown--;
                    if ($countdown === 0) {
                        return 'Найдены лучшие подходящие места: c '.($j-$requiredPlaces+2).' по '.($j+1).' в ряду '.($i+1);
                    }
                }
                else {
                    $countdown = $requiredPlaces;
                }
            }
        }    
        return 'Подходящих мест не найдено';            
    }

    $chairs = 50;
    $map = generate(5, 8, $chairs);
    $map[0][4] = true;
    $map[1][2] = true;
    $requiredPlaces = 5;
    
    echo tryToReserve($map, $requiredPlaces);


?>