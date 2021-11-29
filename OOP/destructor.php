<?php

class FormulaOne
{

    public $driverName;
    public $company;

    function __construct($driverName, $company)
    {
        $this->driverName = $driverName;
        $this->company = $company;
    }

    function __destruct()
    {
        echo "The driver is {$this->driverName} and the company he drives for is {$this->company}";
    }
}

$gridSetting = new FormulaOne('Lewis', 'Mercedes');
