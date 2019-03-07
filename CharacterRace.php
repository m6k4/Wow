<?php


 class CharacterRace
{
    private $race;
    private $fraction;
    private $avatar_img;
    private $availableClasses;
    private $capital_city;


    function __construct($race, $fraction, $avatar_img, $capital_city)
    {
        $this->race = $race;
        $this->fraction = $fraction;
        $this->avatar_img = $avatar_img;
        $this->capital_city=$capital_city;
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

    function getAvailableClasses()
    {
        return $this->availableClasses;
    }

    function __toString()
    {
        return "[Race]: ". $this->race. " - ". $this->fraction;
    }


 }