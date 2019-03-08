<?php

use http\Encoding\Stream;

include_once('CharacterRace.php');
include_once('CharacterClass.php');

 class Character implements Serializable
{
    private $nick;
    private $class;
    private $race;

     public function serialize() {

     }
     public function unserialize($nick) {
         $this->nick = unserialize($nick);
     }

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