<?php

// 

$d = date('D');

if ($d === 'Friday') {
    echo 'Have a lovely SLeep on this weekend';
} else {
    echo 'Oh Well, Today is ' . $d;
}

// $x = 4;
// $y = 5;

// $x -= $y;

// $x = $x - $y;

// 4 - 6 +2 * 2 / 2
// // B bracket
// // O orders
// // D division
// // M multiplication
// // A addition
// // S subtraction

// 4 - (6 +(2 * (2 / 2)))

// 4 - (6 +(2 * 1))

// 4 - (6 +2)

// 4 - 8

// 4 - 8
// -8



// 

$t = date("H");

if ($t < "15") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}

// 

$drivers = [
    'Hamilton',
    'Vettle',
    'Valtteri',
    'Lando',
    'George'
];

if (array_search('Lewis', $drivers) !== false) {
    echo $drivers[0] . ' The Seven time World champ was found';
} elseif (array_search('Lando', $drivers) !== false) {
    echo 'Lando the new Rookie has been found';
} else {
    echo 'Other drivers Without 7x found';
}

// 

$age = 19;
$underAge = 18;
$correctAge = 19;

if ($age < $underAge) {
    echo 'Child';
} elseif ($age === $correctAge) {
    echo 'Adult baby';
} else {
    echo 'We are only serching for 19 years of age';
}

// 

$year = date('Y');
$lastYear = 2020;
$currentYear = 2021;

if ($year < $lastYear) :
    echo 'This is not the current year';
elseif ($year == $currentYear) :
    echo 'This is the current year ' . $year;
else :
    echo 'The selected year is not accepted here';
endif;

// 

$x = 2;
while ($x <= 15) {
    $x += 5;
    echo 'The number is ' . $x . '<br>';
}

// 

$y = 1;
while ($y <= 4) :
    $y++;
    echo 'The number is ' . $y . '<br>';
endwhile;

// 

$z = 5;
do {
    echo "the number is : $z <br>";
} while ($z <= 4);



// generating an array with random even numbers between 1 and 1000

$numbers = [];
$arraySize = 5;

// for loop runs as long as 2nd condition evaluates to true
for ($i = 0; $i < $arraySize; $i++) {

    // always executes (as long as the for-loop runs)
    do {
        $random = mt_rand(100, 1000);

        // if the random number is even (condition below is false), the do-while-loop execution ends
        // if it's uneven (condition below is true), the loop continues by generating a new random number
    } while (($random % 2) == 1);

    // even random number is written to array and for-loop continues iteration until original condition is met
    $numbers[] = $random;
}

// sorting array by values

asort($numbers);

// printing array

echo '<pre>';
print_r($numbers);
echo '</pre>';

// 

for ($x = 0; $x < 4; $x++) {
    echo "The number is $x <br>";
}

// 
$people = [
    [
        'name' => 'Kalle',
        'salt' => 856412
    ],
    [
        'name' => 'Pierre',
        'salt' => 215863
    ]
];

$size = count($people);

for ($i = 0; $i < $size; $i++) {
    $people[$i]['salt'] = mt_rand(000000, 999999);
}

echo '<pre>';
print_r($people);

// Displays all associative array keys where value is equal to Milk
$products = [
    'stock1' => 'Milk',
    'stock2' => 'Milo',
    'stock3' => 'Wine',
    'stock4' => 'Milk',
    'stock5' => 'Ice',
    'stock6' => 'Milk',
];

while ($productName = current($products)) {
    if ($productName === 'Milk') {
        echo key($products) . '<br>';
    } else {
        echo 'Product not found';
    }
    next($products);
}

// Here is a two dimentional array  in order to access the elements we need to access the indices Row and Column 

$cars = [
    ['Volvo', 2022, 18],
    ['BMW', 2015, 13],
    ['Saab', 2005, 2],
    ['Land Rover', 2017, 15]
];

echo 'car name is ' . $cars[0][0] . ' production year is ' . $cars[0][1] . ' Current stock is ' . $cars[0][2];
echo '<br>';
echo 'car name is ' . $cars[1][0] . ' production year is ' . $cars[1][1] . ' Current stock is ' . $cars[1][2];
echo '<br>';
echo 'car name is ' . $cars[2][0] . ' production year is ' . $cars[2][1] . ' Current stock is ' . $cars[2][2];
echo '<br>';
echo 'car name is ' . $cars[3][0] . ' production year is ' . $cars[3][1] . ' Current stock is ' . $cars[3][2];
echo '<br>';

// 

$cars = [
    ['Volvo', 22, 18],
    ['BMW', 15, 13],
    ['Saab', 5, 2],
    ['Land Rover', 17, 15]
];

for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo '<ul>';
    for ($col = 0; $col < 3; $col++) {
        echo '<li>' . $cars[$row][$col] . '</li>';
    }
    echo '</ul>';
}

// 

$numbers = [
    1,
    2,
    3,
    4,
];

foreach ($numbers as $value) {
    $value = &$value * 2;
}

print_r($value);

// 

$h = 20;
do {
    $h++;
    echo $h . '<br>';
} while ($h <= 30);

// 

$juices = [
    'apple',
    'orange',
    'koolaid1' => 'purple'
];

echo "He drank some $juices[0] juice." . PHP_EOL;
echo "He drank some $juices[1] juice." . PHP_EOL;
echo "He drank some $juices[koolaid1] juice." . PHP_EOL;

class people
{
    public $john = 'John Smith';
    public $jane = 'Jane Smith';
    public $robert = 'Robert Paulsen';

    public $smith = 'Smith';
}

$data = new people();

echo "$data->john drank some $juices[0] juice." . PHP_EOL;
echo "$data->john then said hello to $data->jane." . PHP_EOL;
echo "$data->john's wife greeted $data->robert." . PHP_EOL;
echo "$data->robert greeted the two $data->smith.";

// 

$favCar = 'Tesla';

switch ($favCar) {
    case 'Tesla':
        echo 'This is your favorite car ' . $favCar;
        break;

    case 'Mercedes':
        echo 'Mercedes is now your favorite car' . $favCar;
        break;

    default:
        echo 'none of the listed car here is your favorite';
}


$str = 'Welcome to The Test';
$result = strlen($str)-1;

echo $result;