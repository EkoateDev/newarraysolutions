<?php

namespace Gadgets;

class SmartHome
{
    public $deviceName = '';
    public $deviceMake = '';

    public function deviceDetails()
    {
        echo "The name of this device is {$this->deviceName} and it is a {$this->deviceMake} product";
    }
}


