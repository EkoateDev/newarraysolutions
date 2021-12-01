<?php

interface Sports
{
    public function motorSport();
}

class FOne implements Sports
{
    public function motorSport()
    {
        echo 'The best Sports ever produced';
    }
}

$formulaone = new FOne();
$formulaone->motorSport();



interface VideoGame
{
    public function tvGames();
}

class Console implements VideoGame
{
    public function tvGames()
    {
        echo 'I like PS5 but I do not own one yet';
        echo '<br>';
    }
}

class XBox implements VideoGame
{
    public function tvGames()
    {
        echo 'I have only played Xbox 360';
        echo '<br>';
    }
}


class Playstation implements VideoGame
{
    public function tvGames()
    {
        echo 'I enjoy playing Fifa';
        echo '<br>';
    }
}

$ps5 = new Console();
$xBox = new Xbox();
$ps4 = new Playstation();

$videoGameSet = [$ps5, $xBox, $ps4];

foreach ($videoGameSet as $games) {
    $games->tvGames();
}
