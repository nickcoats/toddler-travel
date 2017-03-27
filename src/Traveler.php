<?php namespace ToddlerTravel;

/**
 * Traveler Object which contains travelers attributes.
 *
 * Params:
 *  - $name (string)
 *
 */
class Traveler implements TravelerInterface
{

    protected $name;
    protected $gender;
    protected $age;

    protected $introduction;


    function __construct($name, $gender, $age)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }


    public function name(){
        return $this->name;
    }
    public function gender(){
        return $this->gender;
    }
    public function age(){
        return $this->age;
    }

}
