<?php



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

class Shoes
{
    public $size;
    public $color;

    function __construct($size)
    {
        $this->size = $size;
    }

    function getSize()
    {
        return $this->size;
    }
}

$highTops = new Shoes('45');

echo ' The size of my shoe is ' . $highTops->getSize();
