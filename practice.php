<?php

$testArray = [
    [
        'name' => 'ekoate',
        'color' => [
            'number' => '234'
        ],
    ],
];

$multiArray = [
    'name' => 'nek', 'c' => []
];


function my_callable_function()
{
    echo 'Oh hi Santan';
}

class MyClass
{
    static function myCallbackMethod()
    {
        echo 'Oh';
    }
}


// Simple Callback 

call_user_func('my_callback_function');

// Static class method call 

call_user_func(array('MyClass', 'myCallbackMethod'));

// Object method call 

$obj = new MyClass();
call_user_func(array('MyClass', 'myCallbackMethod'));

// static class method call 

call_user_func(array('MyClass::myCallbackMethod'));


// Create an object and output the value of one of its properties:
class AnotherClass
{
    public $name = 'ekoate';
}

$obj = new AnotherClass();
echo 'The name of the person is ' . $obj->name;

$result = [];
$arraySize = 2;

for ($x = 0; $x < $arraySize; $x++) {

    do {
        $randomNumbers = mt_rand(200, 350);
    } while (($randomNumbers % 2) == 1);

    $result[] = $randomNumbers;
}

asort($result);

echo '<pre>';
print_r($result);
echo '</pre>';

$Color = [
    'A' => 'Blue',
    'B' => 'Green',
    'c' => 'Red'
];

echo '<em> Expected Output :</em>';
echo '<br>';

echo 'Values are in lower case';
echo '<br>';

$lowerValues = array_map('strtolower', $Color);
print_r($lowerValues);

echo '<br>';
echo 'Values are in upper case.';
echo '<br>';

$upperValues = array_map('strtoupper', $Color);
print_r($upperValues);


$rookies = [
    ['Geroge', 'Alex'],
    ['Latifi', 'Ocon']
];

$topRookies = [
    'Lando',
    'Stroll'
];

$result = [];

foreach ($rookies as $key => $val) {
    $result[$key][0] = $topRookies[$key];
    $result[$key][1] = $val[0];
    $result[$key][2] = $val[1];
}

echo 'The List of Top Rookies are';

echo '<pre>';

print_r($result);


$output = [];
$sizeOfArray = 3;

for ($x = 0; $x < $sizeOfArray; $x++) {
    do {
        $dynamicNumbers = mt_rand(250, 300);
    } while (($dynamicNumbers % 2) == 1);

    $output[] = $dynamicNumbers;
}

asort($output);
echo '<pre>';
print_r($output);

$speedKings = [
    'Valtteri',
    'Ham',
    'Max',
    'Charles',
    'Norris'
];

if (array_search('Charles', $speedKings) !== false) {
    echo $speedKings[3] . ' The new driver without sprint speed was found';
}


$x = 10;
if ($x <= 12) {
    echo 'the values are' . $x;
    echo '<br>';
}


$today = date('D');

if ($today === 'Sun') {
    echo 'Hey it is the start of the week once again';
} elseif ($today === 'Wed') {
    echo 'Well mid-week is here';
} else {
    echo 'Today is ' . $today;
}

// 

$num = 16;

while ($num <= 20) {
    echo 'Numbers only here' . $num;
    $num++;
    echo '<br>';
}

$testNum = 10;
do {
    echo 'The right number is ' . $testNum;
    $testNum++;
    echo '<br>';
} while ($testNum < 20);


$color = 'blue';

echo gettype($color);
