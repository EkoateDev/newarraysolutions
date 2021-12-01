<?php

trait Football
{
    public function soccer()
    {
        echo 'I live playing soccer';
    }
}


class GameNight
{
    use Football;
}

$futsal = new GameNight();
$futsal->soccer();

// 

trait DriversListOne
{
    public function firstListOfDrivers()
    {   
        echo 'Lewis, Valtteri, Daniel';
        echo '<br>';
    }
}

trait DriversListTwo
{
    public function secondListOfDrivers()
    {
        echo 'Ocon, George, lando ';
    }
}

class FOneDrivers
{
    use DriversListOne;
}

class FTwoDrivers
{
    use DriversListTwo;
}

class FormulaOneDrivers
{
    use DriversListOne, DriversListTwo;
}

$raceDay = new FormulaOneDrivers();
$raceDay->firstListOfDrivers();
$raceDay->secondListOfDrivers();
echo '<br>';

echo 'The list of best drivers are';
echo '<br>';
$bestDrivers = new FOneDrivers();
$bestDrivers->firstListOfDrivers();