<?php

abstract class Technology
{
    public $brandName;

    public function __construct($brandName)
    {
        $this->brandName = $brandName;
    }

    abstract public function smartPhone(): string;
}

class Samsung extends Technology
{
    public function smartPhone(): string
    {
        return "You can use the best andriod which brand is $this->brandName ";
    }
}


class Lenovo extends Technology
{
    public function smartPhone(): string
    {
        return "When it is time for innovation the best smartPhone is $this->brandName";
    }
}

$newTech = new Samsung('Samsung');
echo $newTech->smartPhone();
echo '<br>';


// /

abstract class WristWatch
{

    public $color;
    public $brand;


    public function __construct($color, $brand)
    {

        $this->color = $color;
        $this->brand = $brand;
    }

    abstract public function jewelry(): string;
}


class Gold extends WristWatch
{

    public function jewelry(): string
    {

        return "The best type of Gold is $this->color and it is always $this->brand";
    }
}

class Silver extends WristWatch
{

    public function jewelry(): string
    {

        return "The only brand I trust is $this->brand";
    }
}

$skywalker = new Gold('Rose', 'Icebox');
echo $skywalker->jewelry();
echo '<br>';

$ap = new Silver('Black', 'Roxy');
echo $ap->jewelry();

// 

abstract class Gadgets
{

    abstract protected function wacthName($name);
}

class SmartWatches extends Gadgets
{

    public function wacthName($name)
    {
        if ($name === 'Series 3') {
            $brandName = 'Apple Watch';
        } elseif ($name === 'Gear 2') {
            $brandName = 'Samsung Watch';
        } else {
            $brandName = '';
        }
        return "{$brandName} {$name}";
    }
}

$device = new SmartWatches;
echo $device->wacthName('Series 3');
echo '<br>';
echo $device->wacthName('Gear 2');



abstract class Cars
{
    abstract protected function sportCars($type);
}

class FastCars extends Cars
{
    public function sportCars($type, $color = 'Black')
    {
        if ($type === 'Lamboghini') {
            $carName = 'Hurricane';
        } elseif ($type === 'Mercedes') {
            $carName = 'Amg GtR';
        } else {
            $carName = '911';
        }
        return "{$color} {$type} {$carName}";
    }
}

$cars = new FastCars;
echo $cars->sportCars('Lamboghini');
echo '<br>';
echo $cars->sportCars('Mercedes');
