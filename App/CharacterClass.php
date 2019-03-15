<?php


abstract class CharacterClass
{

    private $spells; //powtarzalny, opcjonalny

    function __construct( $spells = null)
    {
        $this->spells = $spells;
    }

    function getSpells() : array
    {
        return $this->spells;
    }


}

