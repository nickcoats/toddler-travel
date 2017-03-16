<?php namespace ToddlerTravel;

/**
 * Traveler Object which contains travelers attributes.
 *
 * Params:
 *  - $name (string)
 *
 */
class Traveler
{

    protected $name;
    protected $orientation;
    protected $age;

    protected $introduction;


    function __construct($name)
    {
        $this->name = $name;
    }


    public function getName($name){
        return $this->name;
    }
    public function getOrientation($orientation){
        return $this->orientation;
    }
    public function getAge($age){
        return $this->age;
    }


    public function setOrientation($orientation){
        $this->orientation = $orientation;
    }
    public function setAge($age){
        $this->age = $age;
    }

    public function introduction()
    {
        $intro = 'Hi, I\'m ' . $this->name . ' and I\'m going on a vacation today!';
        return $intro;
    }

}
