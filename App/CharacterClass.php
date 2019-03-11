<?php


class CharacterClass
{
    private $class_name;
    private $spells; //powtarzalny, opcjonalny

    function __construct( $class_name, $spells = null)
    {
        $this->class_name = $class_name;
        $this->spells = $spells;
    }

    function getClassName() : String
    {
        return $this->class_name;
    }

    function getSpells() : array
    {
        return $this->spells;
    }

    //przesłonięcie metody
    function __toString()
    {
        return '[Class]: '. $this->class_name;
    }
}