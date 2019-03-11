<?php

include_once('Character.php');

class Player extends User
{
    private $list_of_characters;
    static $player_number;
    function __construct($name, $email)
    {
        parent::__construct($name, $email);
        self::$player_number += 1;
    }

    function addCharacter(Character $character)
    {
        $this->list_of_characters[] = $character;
    }

    function getListOfCharacters() : array
    {
        return $this->list_of_characters;
    }

    function getPlayerNumber() : int
    {
        return self::$player_number;
    }

    function __toString()
    {
        return "[name]: ". $this->name. "\n[email]: ". $this->email.
               "\n[player number]: ". self::$player_number;
    }


}