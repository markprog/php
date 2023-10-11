<?php

// function myFunc(){
//     //Операторы
// }

// function getSum($num1, $num2){
//     $sum = $num1 + $num1;
//     return $sum;
// }

// echo getSum();


// function two($n, $f){
//     return $n * $f + 1;
// }

// $value = two(1, 6);
// echo $value;

//echo two(1, 6);

function getResult($var){
    $var = $var * 2;
    return $var;
}

$new = 10;
echo getResult($new);

function box(){
    function inn(){
        echo "TEST";
    }
    inn();
}

box();



function recur($num){
    if ($num > 10) {
        echo ($num--) . '<br>';
        recur($num);
    } else return;


}

echo recur(20);



// Global Static Variables

// function getResult($var){
//     global $var;
//     $var = 2;
//     return $var;
// }

// $var = 10;
// echo $var;

function calculator() {
    $start = 0;
    return ++$start;
}

echo  calculator();


function people(){
    $vasilii = 'Vasilii';
    $andrei = 'Andrei';
    $gio = 'Gio';

    return [$vasilii, $andrei, $gio];

}
    
echo '<pre>';
print_r(people());
echo '</pre>';





?>