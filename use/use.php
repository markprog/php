<?php


// Разбиение строк

$str = 'Vas, Andrei, Mark, Eva, Feel';

$arr = explode(',', $str);

echo "<pre>";
print_r($arr);
echo "</pre>";

$str2 = implode(';', $arr);
echo $str2 . "<br>";

// serialize(value)
// unserialize(str)

$arr3 = [2123,342,23432,24234,34,324];

$str3 = serialize($arr3);
echo $str3;

// JSON 

$arr4 = [
    'fio' => 'Vasilii S',
    'work' => 'IT',
    'age' => '37',
    'arr' => [2123,342,23432,24234,34,324]
];

$json = json_encode($arr4);
echo $json;



?>