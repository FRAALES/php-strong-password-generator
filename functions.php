<?php
    $lettersMin = range('a', 'z');
    $lettersCap = range('A', 'Z');
    $numbers = range(0, 9);
    $special = [
        ...range("!", "/"),
        ...range(":", "@"),
        ...range("[", "`"),
        ...range("{", "~"),

        ];

    $final = [...$lettersMin, ...$lettersCap, ...$numbers, ...$special ];

    $length = $_GET['length'];
    echo strlen($length);
    var_dump($length);

    $res = "";
    for ($x=0;$x<$length;$x++){

        $rndInd = rand(0, count($final) - 1);
        $rndChr = $final[$rndInd];
        $res .= $rndChr;
    }

?>