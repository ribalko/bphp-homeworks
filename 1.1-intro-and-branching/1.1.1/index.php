<?php
$variable = 1;
//  Ваш программный код, в котором переменной $type
//  присваивается одно из значений: bool, float, 
//  int, string, null или other

if (is_bool($variable)) {
    $type = "bool";
} else if (is_float($variable)) {
    $type = "float";
} else if (is_int($variable)) {
    $type = "int";
} else if (is_string($variable)) {
    $type = "string";
} else if (is_null($variable)) {
    $type = "null";
} else {
    $type = "other";
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
</head>
<body>
    <p><?=$type?></p>
</body>
</html>