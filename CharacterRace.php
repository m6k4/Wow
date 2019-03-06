<?php
/**
 * Created by PhpStorm.
 * User: Piotr Leonik
 * Date: 2019-03-06
 * Time: 09:05
 */

abstract class CharacterRace
{

    protected $fraction;
    protected $avatar_img;
    protected $availableClasses;


    function __construct($fraction, $avatar_img)
    {
        $this->fraction = $fraction;
        $this->avatar_img = $avatar_img;
    }

    function setAvailableClasses($availableClasses, $class1 = null, $class2 = null,$class3 = null, $class4 = null, $class5 = null, $class6 = null, $class7 = null)
    {
        //przeciazenie metody
        if(is_array($availableClasses)){
            $this->availableClasses = $availableClasses;
        }else{
            $this->availableClasses[] = $availableClasses;
        }

    }

    function getAvailableClasses()
    {
        return $this->availableClasses;
    }

    function  getFraction()
    {
        return $this->fraction;
    }

    function getAvatarImg()
    {
        return $this->avatar_img;
    }

}