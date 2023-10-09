<?php
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






