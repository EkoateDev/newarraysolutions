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
        return 'You can use the best andriod brand';
    }
}
