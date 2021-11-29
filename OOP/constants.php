<?php

class House
{
    const ADDRESS = 'South-East Palmyre';
}

echo House::ADDRESS;


class SmartPhones
{
    const MOBILE = 'Iphone X';

    public function device()
    {
        echo self::MOBILE;
    }
}

$apple = new SmartPhones();
$apple->device();
