<?php

// construct allows the initialization of objects properties upon the creation of object
class Fruit
{

    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
}

$mango = new Fruit('Banana');
echo $mango->getName();

// passing in multiple  parameters

class Computers
{

    public $brand;
    public $name;
    public $ram;

    function __construct($brand, $name, $ram)
    {
        $this->brand = $brand;
        $this->name = $name;
        $this->ram = $ram;
    }

    function getBrand()
    {
        return $this->brand;
    }

    function getName()
    {
        return $this->name;
    }

    function getRam()
    {
        return $this->ram;
    }
}

$laptop = new Computers('HP', 'Pro book', '16gb');
echo $laptop->getBrand();
echo '<br>';
echo $laptop->getName();
echo '<br>';
echo $laptop->getRam();
