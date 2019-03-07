<?php

include('Character.php');

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

    function getListOfCharacters()
    {
        return $this->list_of_characters;
    }

    function __toString()
    {
        return "[name]: ". $this->name. "\n[email]: ". $this->email.
               "\n[player number]: ". self::$player_number;
    }


}