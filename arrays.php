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

?>