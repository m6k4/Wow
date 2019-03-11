<?php


 class CharacterRace
{
    private $race;
    private $fraction; //atrybut opcjonalny
    private $avatar_img;
    private $availableClasses;
    private $capital_city;


    function __construct($race, $avatar_img, $capital_city, $fraction = null)
    {
        $this->race = $race;
        $this->avatar_img = $avatar_img;
        $this->capital_city= $capital_city;
        $this->fraction = $fraction;
    }

    function setAvailableClasses($availableClasses, $class1 = null, $class2 = null,$class3 = null, $class4 = null, $class5 = null, $class6 = null, $class7 = null)
    {
        //przeciazenie metody
        if(is_array($availableClasses)){
            $this->availableClasses = $availableClasses;
        }
        else{
            $args = func_get_args();
            $this->availableClasses = $args;
        }
    }

    function getAvailableClasses() : array
    {
        return $this->availableClasses;
    }

    function getRaceName() : String
    {
        return $this->race;
    }

    function __toString()
    {
        return "[Race]: ". $this->race. " - ". $this->fraction;
    }


 }