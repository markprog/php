<?php
//Классы и объекты
require_once 'use/classes/SomePeople.php';
require_once 'use/classes/FamilyClass.php';
require_once 'use/classes/HiClass.php';

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


// //Классы и объекты
// class SomePeople {
//     public $age;    //public - зона видимости
//     public $name;

//     public static $people = 1;
// }

//echo SomePeople::$people;

$fr = $sc = 3;
echo $fr . '<br>';
echo $sc; 


// Методы в OOP

$family = new FamilyClass;
$family->setNameBoy('Adam');
$family->setNameGirl('Eva');

// $family->getNameBoy();
// $family->getNameGirl();

echo $family->friends();


// $obj = new Hi;
// echo $obj->hello();
// echo $obj->bye();




// Ключевое слово Self

class MainPageClass{

    static $main = 'contacts<br>';

    public static function header(){
        return '<h3>header</h3>';
    }

    public static function main(){
        return '<h3>main</h3>';
    }

    public static function footer(){
        return '<h3>footer</h3>';
    }

    public static function getPage(){
        echo self::header() . 
             self::main() .
             self::footer();
    }
}

MainPageClass::getPage();



class Hi {

    // __conctruct() --- Конструктор


    public static function hello()
    {
        return '<br>Hello!';
    }

    public function bye()
    {
        return '<br>Bye!';
    }
}
echo Hi::hello();
//echo Hi::bye();


class Construct{
    public $y;
    private $x;

    public function __construct($x){
        echo "<br>отработал конструктор!";
        $this->y = '<br>' . 69;
        $this->x = $x;
    }

    public function __destruct(){
        echo '<br>деструктор отработал';
    }

    public function getY(){
        return $this->y;
    }

    public function getX(){
        return $this->x;
    }
}

$var = new Construct(x: '<br>some text');
echo $var->y;

echo $var->getX();

// Методы аксессоры __set() __get()

class Accessor{
    private $one = [];

    public function __get($key){
        if(array_key_exists($key, $this->one)){
            return $this->one[$key];
        }else return 'Array is empty';



    }
    public function __set($key, $value){

        $this->one[$key] = $value;


    }



}

$var = new Accessor();
$var->text = 'Lorem Ipsum';
$var->name = 'Konst';
$var->age = 18;

echo '<pre>';
print_r($var);
echo '</pre>';


















    







?>