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

}
