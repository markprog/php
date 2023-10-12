<?php
require_once 'classes/FamilyClass.php';

$family = new FamilyClass;
$family->setNameBoy($_POST['boy_name']);
$family->setNameGirl($_POST['girl_name']);
echo $family->friends();






?>