<?php

include('App/Character.php');
include('DataBase.php');
include ('App/User.php');
include ('App/Employee.php');
include ('App/Player.php');


$ania = new Player('ania', 'ania@op.pl');
$db = new DataBase();
$db->createDataBase();
$db->fillDataBase();

//obiekty klasy CharacterRace


print_r($db->getUser('ania@op.pl', 'qwerty123'));

//echo $zuza->getEmail();










?>