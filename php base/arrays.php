<?php

// //Create array
// $arr = array('One', 'two', 'three');
// $arr2 = [11, 22, 44, 10 => 88, 'name' => 'vasilii'];
// $var = "php - 7";
// $arr3 = (array) $var;


// echo $arr[0];
// echo count($arr);

// echo '<pre>';
// print_r($arr);
// echo '</pre>';

// echo '<pre>';
// print_r($arr2);
// echo '</pre>';

// echo '<pre>';
// print_r($arr3);
// echo '</pre>';


$arr_as = ['name' => 'vasilii', 'age' => '31'];
$arr_ind = ['vasilii', '31'];

echo '<pre>';
print_r($arr_as);
print_r($arr_ind);
echo '</pre>';

echo $arr_as['name'];

//Многомерные массивы

$people = [
    'Ivan' => ['age' => 23, 'weight' => 85],
    'Vasilii' => ['age' => 25, 'weight' => 65],
    'Nika' => ['age' => 23, 'weight' => 55]

];
echo '<pre>';
print_r($people);
echo '</pre>';

echo $people['Vasilii']['weight'];


//Функции для работы с массивами

//Слияние массивов

$arr1 = ['my', 'dog'];
$arr2 = [0, 0, 'your', 'cat'];

$sum = array_merge($arr1, $arr2);

echo "<pre>";
print_r($sum);
echo "</pre>";


//Сравнение массивов
// $a0 = [1, 2, 3, 4, 5];
// $a1 = [1, 2, 3, 4, 5];
// $a2 = [1, 2, 6, 4];
// $a3 = [1, 8, 3, 4, 5];
// $a4 = [1, 2, 3, 7, 5];


// if($a0 == $a2){
//     echo "Массивы равны";
// }
// else {
//     echo "Массивы не равны";
// }

// ===
$a0 = [0 => 1, 1 => 2];
$a1 = [0 => 1, 1 => '2'];

if($a0 === $a1){
    echo "Массивы равны";
}
else {
    echo "Массивы не равны";
}


$num = count($a1);
echo $num;






?>