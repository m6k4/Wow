<?php
/**
 * Created by PhpStorm.
 * User: Piotr Leonik
 * Date: 2019-03-06
 * Time: 09:18
 */

class RaceUndead extends CharacterRace
{
    private $capital_city;

    function __construct($fraction, $avatar_img)
    {
        parent::__construct($fraction, $avatar_img);
        $this->capital_city = 'Undercity';
    }
}