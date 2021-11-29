<?php

// class Sports
// {
//     public $name;
//     protected $country;
//     private $gender;
// }

// $handGame = new Sports();

// $handGame->name = 'Volley';
// $handGame->country = 'United States';
// $handGame->gender = 'Female';

// echo $handGame->name;


//  


class Countries
{
    public $name;
    public $region;
    public $population;


    function setName($name)
    {
        $this->name = $name;
    }

    protected function setRegion($region)
    {
        $this->region = $region;
    }

    private function setPopulation($population)
    {
        $this->population = $population;
    }
}

$places = new Countries();

$places->setName('Nigeria');
// $places->setRegion('West Africa');
// $places->setPopulation($population);


