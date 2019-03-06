<?php
include('Races/CharacterRace.php');
include('Races/RaceOrc.php');
include('Races/RaceHuman.php');
include('Races/RaceUndead.php');
include('Classes/CharacterClass.php');


$priest = new CharacterClass('Priest', 'spells');
print_r($priest);
$human = new RaceHuman('Human', 'Alliance', 'aliance.img', 'Stormwind');

$human->setAvailableClasses('a','s', 'g', 'e');

print_r($human->getAvailableClasses());


?>