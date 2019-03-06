<?php


class CharacterClass
{
    private $class_name;
    private $spells;

    function __construct($class_name, $spells)
    {
        $this->class_name = $class_name;
        $this->spells = $spells;
    }

    function getClass()
    {
        return $this->class_name;
    }

    function getSpells()
    {
        return $this->spells;
    }

}