<?php

//  a destructor is called when the object is destructed or the script is stopped or exicted. 
// if a destruct function is created php will auto call the function at the end of the script. 

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
        echo "The drivere is{$this->driverName}" ;
    }
}
