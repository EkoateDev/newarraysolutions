<?php

class Laptop
{
    public static function nameOfALaptop()
    {
        echo 'Macbook Pro';
    }
}

Laptop::nameOfALaptop();

// 

class Movie
{
    public static function genre()
    {
        echo 'Action';
    }

    public function __construct()
    {
        self::genre();
    }
}

new Movie();

// 

class House
{
    public static function kitchenAppliance()
    {
        echo 'Kettle';
    }
}

class Kitchen
{
    public function kitchenItem()
    {
        House::kitchenAppliance();
    }
}

$kitchenGadget = new Kitchen();
$kitchenGadget->kitchenItem();


// 

class CountryName
{
    protected static function getCountryName()
    {
        return 'Mauritius';
    }
}

class IslandCountryName extends CountryName
{
    public $countryName;
    public function __construct()
    {
        $this->countryName = parent::getCountryName();
    }
}

$country = new IslandCountryName();
echo $country->countryName;