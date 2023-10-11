<?php

$num = 10000;
    switch (true) {
    case ($num > 0 && $num <= 50):
        echo "Значение $num true";
        break;

    case ($num > 0 && $num < 500);
        echo "Значение $num true-big";
        break;

    default:
    echo "Значение $num false <br>";
    break;


    }




for ($i=10; $i; $i--){
    echo "$i <br>";
}


for ($i = 0; $i < 1000;  $i += 100){
    echo "$i <br>";
}

$a = 0;
for (;;){
    $a++;
    echo "$a <br>";
    if($a > 6) break;
}


?>