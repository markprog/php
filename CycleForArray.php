<?php

$arr = [1, 2, 3, 4, 5];

list($one, $two, $three) = $arr;

//echo $one . $two . $three;

for ($i=0; $i < count($arr); $i++) {
    echo $arr[$i] * 10 . "<br>";
}

$vas = [
    'name' => 'vasilii',
    'age' => '36',
    'weight' => 93

];

 
// foreach ($vas as $key => $value) {
//     if ($key == 'name'){
//         $key = 'Имя';
//     }
//     elseif ($key == 'age'){
//         $key = 'Возраст';
//     }
//     elseif ($key == 'weight'){
//         $key = 'Вес';
//     }
//     echo $key . " " . $value . "<br>";
    
// }


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

    echo $key . " - " . $result . "<br>";
    
}


?>