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




$arr = [1, 2, 3, 4, 5];

list($one, $two, $three) = $arr;

//echo $one . $two . $three;

for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i] + 5 . "<br>";
}

$vas = [
    'name' => 'vasilii',
    'age' => 36,
    'weight' => 93

];

 
foreach ($vas as $key => $value) {
    if ($key == 'name'){
        $key = 'Имя';
    }
    elseif ($key == 'age'){
        $key = 'Возраст';
    }
    elseif ($key == 'weight'){
        $key = 'Вес';
    }
    echo $key . " " . $value . "<br>";
    
}


// foreach ($vas as $result) {
//     if ($key == 'name'){
//         $key = 'Имя';
//     }
//     elseif ($key == 'age'){
//         $key = 'Возраст';
//     }
//     elseif ($key == 'weight'){
//         $key = 'Вес';
//     }
//     echo $result . "<br>";
    
// }

foreach ($arr as $key => $result) {

    echo $key . " (" . $result . ") <br>";
    
}


?>