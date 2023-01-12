<?php

$var = "Check Var";
$num = 2435432;
$flo = 1.3;

//isset()  //empty()

 $status = isset($var);
echo $status;


$estatus = empty($num);
echo $estatus . '<br>';

echo gettype($flo) . '<br>';

echo is_int($num) . '<br>';


?>