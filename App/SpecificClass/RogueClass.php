<?php


class RogueClass extends CharacterClass
{
    static $className;
    static $instance;
    function __construct($spells = null)
    {
        parent::__construct($spells);
        self::$className = 'Rogue';
    }

    static function getInstance()
    {
        if(self::$instance == null){
            self::$instance = new RogueClass();
        }
        return self::$instance;
    }

}