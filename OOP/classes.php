<?php

// class is a self-contained independent collection of variables and fuctions which work together 

// objects are instances of a class, they inherit properties and behaviours from a class
//  but each object has a different value for properties 

// in a class variables are called properties and functions are called methods 


class Fruit
{
    // properties 
    public $name;
    public $color;

    // Methods 
    function setName($name)
    {
        $this->name = $name;
    }
    function getName($name)
    {
        return $this->$name;
    }
}

//  creating objects from a class using new keyword

class Car
{

    public $name;
    public $color;
    public $engine;

    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }

    function setColor($color)
    {
        $this->color = $color;
    }
    function getColor()
    {
        return $this->color;
    }

    function setEngine($engine)
    {
        $this->engine = $engine;
    }
    function getEngine()
    {
        return $this->engine;
    }
}

$petronas = new Car();
$petronas->setName('W12');
$petronas->setColor('Black');
$petronas->setEngine('Turbo V8 loud');

echo 'The name of the car is ' . $petronas->getName();
echo '<br>';
echo 'The color of the Car is ' . $petronas->getColor() . ' because of BLM movement';
echo '<br>';
echo 'the engine built for the car is ' . $petronas->getEngine();

// changing the value of a property outside a method and class 
class Veggies
{
    public $type;
}

$potatoes = new Veggies();
$potatoes->type = 'Tomatoes';

echo $potatoes->type;

// using instance of to check if an object belongs to a class

class WristWatch
{
    // Properties
    public $name;
    public $color;

    // Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}

$rolex = new WristWatch();
var_dump($rolex instanceof WristWatch);