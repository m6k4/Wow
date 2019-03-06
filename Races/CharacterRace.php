<?php




abstract class CharacterRace
{
    protected $race;
    protected $fraction;
    protected $avatar_img;
    protected $availableClasses;
    protected $capital_city;


    function __construct($race, $fraction, $avatar_img, $capital_city)
    {
        $this->race = $race;
        $this->fraction = $fraction;
        $this->avatar_img = $avatar_img;
        $this->capital_city=$capital_city;
    }

    function setAvailableClasses($availableClasses, $class1 = null, $class2 = null,$class3 = null, $class4 = null, $class5 = null, $class6 = null, $class7 = null)
    {
        //przeciazenie metody
        if(is_array($availableClasses)){
            $this->availableClasses = $availableClasses;
        }else{
            $args = func_get_args();
            $this->availableClasses[] = $args;

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

    function getCapitalCity()
    {
        return $this->capital_city;
    }

}