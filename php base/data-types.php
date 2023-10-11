<?php

ini_set('error_reporting', E_ALL);

$numb = 1; //десятичное число
$numb1 = -1; //отрицательное число
$numb2 = +1; //десятичное число
$numb3 = 01; //восьмеричное число
$numb4 = 0x0A; //шестнадцатеричное число

//Вещественные числа
$var = 1.2; 

//Логический тип
$var = true;
$var = false;

//Строки
$str = "hey, world!";
echo "hey, world! \$numb";

//Неинициализированная переменная
$some; 
#echo $some;

// null
$var2 = null;
unset($str2);
echo $str2;





?>