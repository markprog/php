<?php
//Классы и объекты
class SomePeople {
    public $age;    //public - зона видимости
    public $name;

    public static $people = 1;
}

$tim = new SomePeople;
$tim->age = 33;

echo $tim->age . '<br>';

$tom = clone $tim;
echo $tom->age;

$tom->age = 34;
echo $tom->age;


define('NAME', 'vasilii');
echo NAME;

?>






