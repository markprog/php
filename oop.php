<?php
//Классы и объекты
require_once 'classes/SomePeople.php';

$some = new SomePeople;
echo is_object($some);

$nick = new SomePeople;
$nick->age = 30;
$nick->name = "Nick";

echo $nick->name;

$dasha = new SomePeople();

//$nick = 11;

class Location {
    public $x;
    private $y;
}

$loc = new Location;
$loc->x = 23;
//$loc->y = 23;

echo $loc->x;
//echo $loc->y;


//Классы и объекты
class SomePeople {
    public $age;    //public - зона видимости
    public $name;

    public static $people = 1;
}

//echo SomePeople::$people;

$fr = $sc = 3;
echo $fr . '<br>';
echo $sc; 







?>