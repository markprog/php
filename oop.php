<?php
//Классы и объекты
require_once 'SomePeople.php';

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








?>