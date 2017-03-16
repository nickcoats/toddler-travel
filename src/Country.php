<?php namespace ToddlerTravel;

/**
 * Country Object to be added to Destinations
 * Object when creating a Vacation.
 */
class Country
{

    protected $name;
    protected $capital;
    protected $language;
    protected $population;
    protected $continent;

    function __construct($name = '')
    {
        $this->name = $name;
    }


	public function getName()
	{
		return $this->name;
	}

    public function getCapital()
	{
		return $this->capital;
	}

    public function getLanguage()
	{
		return $this->language;
	}

    public function getPopulation()
	{
		return $this->population;
	}

    public function getContinent()
	{
		return $this->continent;
	}


    public function setCapital($language)
    {
        $this->language = $language;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }

    public function setPopulation($population)
    {
        $this->population = $population;
    }

    public function setContinent($continent)
    {
        $this->continent = $continent;
    }

}
