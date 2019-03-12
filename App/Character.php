<?php



include_once('CharacterRace.php');
include_once('CharacterClass.php');

 class Character
{
    private $nick;
    private $class;
    private $race;

    function __construct($nick, CharacterRace $race, CharacterClass $class)
    {
        $this->nick = $nick;
        $this->race = $race; //agregacja
        $this->class = $class; //agregacja

    }


     function getNick() : String
    {
        return $this->nick;
    }

    function  getRace() : CharacterRace
    {
        return $this->race;
    }

    function  getClass() : CharacterClass
    {
        return $this->class;
    }

    function __toString()
    {
        return "[Nickname]: ". $this->nick. "\n". $this->race. "\n". $this->class;
    }


 }