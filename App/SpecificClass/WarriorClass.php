<?php


class WarriorClass extends CharacterClass
{
    static $className;
    static $instance;
    function __construct($spells = null)
    {
        parent::__construct($spells);
        self::$className = 'Warrior';
    }

    function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new WarriorClass();
        }
        return self::$instance;
    }

}