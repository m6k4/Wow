<?php


include('Character.php');
include ('DataBase.php');
include ('User.php');
include ('Employee.php');
include ('Player.php');
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

//$db->createDataBase();
//$db->fillDataBase();

//obiekty klasy CharacterRace
$db = new DataBase();
$db->createNewCharacter($human, $mage, $ania, 'an1');

$db->getRows('gamecharacter');
//echo $zuza->getEmail();


$charactersFromDB = $db->getAllGameCharacters();
$charactersObjects = [];
$length = $db->getRows('gamecharacter');

print_r($charactersFromDB);
echo $charactersFromDB[0][0];
for($i = 0; $i<= $length; $i++){
        $charactersObjects[] = new Character($charactersFromDB[$i][0], $charactersFromDB[$i][1],
            $charactersFromDB[$i][2], $charactersFromDB[$i][3], $charactersFromDB[$i][4]);
}



function createRaceObjectsFromDB()
{
    $db = new DataBase();
    $characterRacesFromDB = $db->getAllCharacterRaces();
    $characterRacesObjects = [];
    $i = 0;
    foreach ($characterRacesFromDB as $character) {

        switch ($i) {
            case 0:
                $human = new CharacterRace($character[0], $character[1], $character[2], $character[3]);
                $characterRacesObjects[] = $human;
                break;
            case 1:
                $orc = new CharacterRace($character[0], $character[1], $character[2], $character[3]);
                $characterRacesObjects[] = $orc;
                break;
        }

        $i++;
    }
    return $characterRacesObjects;
}
//obiekty klasy CharacterClass
function createClassObjectsFromDB()
{
    $db = new DataBase();
    $characterClassesFromDB = $db->getAllCharacterClasses();
    $characterClassesObjects = [];
    $i = 0;
    foreach ($characterClassesFromDB as $character) {

        switch ($i) {
            case 0:
                $mage = new CharacterRace($character[0]);
                $characterClassesObjects[] = $mage;
                break;
            case 1:
                $priest = new CharacterRace($character[0]);
                $characterClassesObjects[] = $priest;
                break;
            case 2:
                $rogue = new CharacterRace($character[0]);
                $characterClassesObjects[] = $rogue;
                break;
        }

        $i++;
    }
    return $characterClassesObjects;
}
    //obiekty klasy Character
function createCharacterObjectsFromDB()
{
    $db = new DataBase();
    $charactersFromDB = $db->getAllGameCharacters();
    $charactersObjects = [];
    $length = $db->getRows('gamecharacter');

    for($i = 0; i<= $length; $i++){
//        $charactersObjects[] = new Character()
    }

}
    //obiekty klasy Player

    //obiekty klasy Employee








?>