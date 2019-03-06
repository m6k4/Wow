<?php
include('CharacterRace.php');
include('RaceOrc.php');
include('RaceHuman.php');
include('RaceUndead.php');

$humanClasses = ['b', 's'];
$nowa = $humanClasses;$human = new RaceHuman('Alliance', 'aliance.img');
$human->setAvailableClasses($humanClasses);
$human->setAvailableClasses('a', 's');
print_r($human->getAvailableClasses());


?>