<?php

// class is a self-contained independent collection of variables and fuctions which work together 

// objects are instances of a class they inherit properties and behaviours from a class
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
    function get()
    {
        return $this->name;
    }
}
