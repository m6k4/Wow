<?php


include('App/Character.php');
include('DataBase.php');
include ('App/User.php');
include ('App/Employee.php');
include ('App/Player.php');
//wszystkie dostępne rasy
$human = new CharacterRace('Human', 'Alliance', 'human.img', 'Stormwind');
//$orc = new CharacterRace('Orc', 'Horde', 'orc.img', 'Blackrock Spire');

//wszystkie dostępne klasy
//$priest = new CharacterClass('Priest');
//$rogue = new CharacterClass('Rogue');
$mage = new CharacterClass('Mage');
//$hunter = new CharacterClass('Hunter');

//klasy dostępne dla poszczególnych ras
//$humanClasses = ['Priest', 'Rogue', 'Mage'];
//$human->setAvailableClasses($humanClasses);
//$orc->setAvailableClasses( 'Rogue', 'Hunter');
//
//$zuza11 = new Character('zuza11', $human, $priest);
//
$ania = new Player('ania', 'ania@op.pl');
$db = new DataBase();
$db->createDataBase();
$db->fillDataBase();

//obiekty klasy CharacterRace

$db->createNewCharacter($human, $mage, $ania, 'an1');
print_r($db->getAllUsers());

//echo $zuza->getEmail();










?>