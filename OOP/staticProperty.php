<?php

class Musician
{
    public static $artistName = 'Big Wiz';
}

echo Musician::$artistName;

// 
class Festival
{
    public static $afroMusic = 'Dancehall';
    public function getMusicName()
    {
        return self::$afroMusic;
    }
}

$musicFest = new Festival();
echo $musicFest->getMusicName();

// 

class Food
{
    public static $mealName = 'Garri';
}

class CookedFood extends Food
{
    public function getFoodName()
    {
        return parent::$mealName;
    }
}

echo Food::$mealName;
echo '<br>';

echo 'calling from child class';
echo '<br>';

$food = new CookedFood();
echo $food->getFoodName();
