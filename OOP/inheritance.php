<?php

class School
{
    public $name;
    public $location;

    public function __construct($name, $location)
    {
        $this->name = $name;
        $this->location = $location;
    }

    public function favoriteUni()
    {
        echo "my favorite uni is {$this->name} and it is situated in {$this->location} ";
    }
}

class University extends School
{
    public function hybridLearning()
    {
        echo ' They make sure the students are learning well';
    }
}

$education = new University('Middlesex', 'Mauritius');
$education->favoriteUni();
$education->hybridLearning();


class Movie
{

    public $genre;
    public $year;

    public function __construct($genre, $year)
    {
        $this->genre = $genre;
        $this->year = $year;
    }

    public function actors()
    {
        echo 'The best actor is Professor';
        echo '<br>';
    }

    protected function director()
    {
        echo ' These details should be confidential';
        echo '<br>';
    }
}

class Action extends Movie
{
    public function series()
    {
        echo "The best Series ever produced is {$this->genre} in the year {$this->year}";
        echo '<br>';
        $this->director();
    }
}

$cinema = new Action('Hesit', '2019');
$cinema->actors();
$cinema->series();
$cinema->series();


class Sports
{
    public $city;
    public $games;

    public function __construct($city, $games)
    {
        $this->city = $city;
        $this->games = $games;
    }

    public function soccer()
    {
        echo "I enjoy playing {$this->games} in {$this->city}";
        echo '<br>';
    }
}

class FunZone extends Sports
{
    public $players;

    public function __construct($city, $games, $players)
    {
        $this->city = $city;
        $this->games = $games;
        $this->players = $players;
    }

    public function soccer()
    {
        echo "I enjoy playing {$this->games} in {$this->city} with {$this->players} players";
    }
}

$futsal = new Funzone('Moka', 'football', '5');
$futsal->soccer();


// final class Models
// {
//     public $brand;

//     public function __construct($brand)
//     {
//         $this->brand = $brand;
//     }
// }

// class Louis extends Models
// {
// }

// $gucci = new models('Prada');


// class Leather
// {
//     public $jeans;

//     public function __construct($jeans)
//     {
//         $this->jeans = $jeans;
//     }

//     final public function denim()
//     {
//         echo 'The type of outfit for summer';
//     }
// }

// class Vuitton extends Leather
// {
//     public function denim()
//     {
//     }
// }
