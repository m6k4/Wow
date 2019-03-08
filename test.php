<?php

include('CharacterRace.php');
include('CharacterClass.php');
include('Character.php');
include ('DataBase.php');
include ('User.php');
include ('Employee.php');

//wszystkie dostępne rasy
$human = new CharacterRace('Human', 'Alliance', 'human.img', 'Stormwind');
$orc = new CharacterRace('Orc', 'Horde', 'orc.img', 'Blackrock Spire');

//wszystkie dostępne klasy
$priest = new CharacterClass('Priest');
$rogue = new CharacterClass('Rogue');
$mage = new CharacterClass('Mage');
$hunter = new CharacterClass('Hunter');

//klasy dostępne dla poszczególnych ras
//$humanClasses = ['Priest', 'Rogue', 'Mage'];
//$human->setAvailableClasses($humanClasses);
//$orc->setAvailableClasses( 'Rogue', 'Hunter');
//
//$zuza11 = new Character('zuza11', $human, $priest);
//
$zuza = new Employee( 'zuza', 'zuza@op.pl', 2000, 'tester' );
Employee::changeSallary(200);
$extension = Employee::getExtension();
$serialized = serialize($extension);

//$extension = serialize($extension);
file_put_contents('extensionFile.txt', $serialized);
$input = file_get_contents('extensionFile.txt');
$unserialized = unserialize($input);
var_dump($unserialized);


//$output_stream = fopen('extensionFile.txt','w');
//fputs($output_stream,$ser);
//fclose($output_stream);



//rewind($output_stream);
//echo stream_get_contents($output_stream);
//$db = new DataBase();
//$db->createDataBase();




?>