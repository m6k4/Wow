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


     function getNick()
    {
        return $this->nick;
    }

    function  getRace()
    {
        return $this->race;
    }

    function  getClass()
    {
        return $this->class;
    }

    function __toString()
    {
        return "[Nickname]: ". $this->nick. "\n". $this->race. "\n". $this->class;
    }


 }