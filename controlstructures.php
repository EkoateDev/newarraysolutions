<?php

$today = date('D');

if ($today === 'Tue') {
    echo 'The current day of the week is ' . $today;
} elseif ($today === 'Fri') {
    echo 'The current day of the week is  ' . $today;
} else {
    echo 'The current day of the week is not part of the list';
}

// 

$x = 15;

while ($x <= 20) {
    $x++;
    echo 'The numbers are ' . $x;
    echo '<br>';
}

// 

$y = 2;

do {
    echo 'The available numbers are ' . $y;
    echo '<br>';
    $y++;
} while ($y < 5);
// 

$size = 2;
$display = [];

for ($z = 0; $z < $size; $z++) {
    do {
        $nums = mt_rand(140, 220);
    } while (($nums % 2) == 1);
    $display[] = $nums;
}

asort($display);

echo '<pre>';
print_r($display);

// 

for ($x = 1; $x < 4; $x++) {
    echo 'Theses are the numbers' . $x;
    echo '<br>';
}


$places = [
    'West' => 'Flic',
    'North' => 'Loius',
    'East' => 'Bagatelle',
    'East' => 'Moka',
    'North' => 'Flaq'
];

while ($explore = current($places)) {
    if ($explore === 'Flic') {
        echo 'The region of your destination is ' . key($places);
    }
    next($places);
}


$rowSelector = [
    ['Volvo', 22, 18],
    ['BMW', 15, 13],
    ['Saab', 5, 2],
    ['Land Rover', 17, 15]
];

for ($row = 0; $row < 4; $row++) {
    echo '<p><b> Row Number ' . $row . ' </b></p>';
    echo '<ul>';
    for ($column = 0; $column < 3; $column++) {
        echo '<li>' . $rowSelector[$row][$column] . '</li>';
    }
    echo '</ul>';
}


$newCars = [
    ['Volvo', 18],
    ['BMW', 13],
    ['Saab', 20],
    ['Land Rover', 15]
];

foreach ($newCars as list($make, $year)) {
    echo 'My favorite car is ' . $make . ' The year it was produced is ' . $year;
    echo '<br>';
}
// 

$networks = [
    'Mtn',
    'Verizon',
    'Xfinity',
    'Airtel',
    'Orange',
];

foreach ($networks as $mobileCarrier) {
    if ($mobileCarrier === 'Xfinity') {
        break;
    }
    echo $mobileCarrier . '<br>';
}
// 

$z = 45;

while ($z < 55) {
    if ($z === 51) {
        break;
    }
    echo 'Here are the expected numbers ' . $z;
    echo '<br>';
    $z++;
}


// continue 

for ($i = 2; $i < 8; $i++) {
    if ($i === 6) {
        continue;
    }
    echo 'The expected integers ' . $i;
    echo '<br>';
}


$tracks = [
    'Brasil' => 'Sao Paul',
    'London' => 'Silverstone',
    'Austria' => 'Red Bull Ring',
    'Mexico' => 'Paul Richard'

];

foreach ($tracks as $k => $v) {
    if ($k === 'Austria') {
        continue;
    }
    echo 'These are the best tracks in F1 ' . $tracks[$k];
    echo '<br>';
}
