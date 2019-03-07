<?php
include('CharacterRace.php');
include('CharacterClass.php');
include('Character.php');


//wszystkie dostępne rasy
$human = new CharacterRace('Human', 'Alliance', 'human.img', 'Stormwind');
$orc = new CharacterRace('Orc', 'Horde', 'orc.img', 'Blackrock Spire');

//wszystkie dostępne klasy
$priest = new CharacterClass('Priest');
$rogue = new CharacterClass('Rogue');
$mage = new CharacterClass('Mage');
$hunter = new CharacterClass('Hunter');

//klasy dostępne dla poszczególnych ras
$humanClasses = ['Priest', 'Rogue', 'Mage'];
$human->setAvailableClasses($humanClasses);
$orc->setAvailableClasses( 'Rogue', 'Hunter');

$zuza11 = new Character('zuza11', $human, $priest);

echo $zuza11;



?>