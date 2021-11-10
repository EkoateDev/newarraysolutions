<?php

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
// // O of
// // D division
// // M multiplication
// // A addition
// // S substraction

// 4 - (6 +(2 * (2 / 2)))

// 4 - (6 +(2 * 1))

// 4 - (6 +2)

// 4 - 8

// 4 - 8
// -8





$t = date("H");

if ($t < "15") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}


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


$age = 19;

if ($age < 18) {
    echo 'Child';
} elseif ($age == 19) {
    echo 'Adult baby';
} else {
    echo 'We are only serching for 19 years of age';
}


$year = date('Y');

if ($year < 2020) :
    echo 'This is not the current year';
elseif ($year == 2021) :
    echo 'This is the current year ' . $year;
else :
    echo 'The selected year is not accepted here';
endif;


$x = 2;

while ($x <= 15) {
    $x += 5;
    echo 'The number is ' . $x . '<br>';
}


$y = 1;

while ($y <= 4) :
    $y++;
    echo 'The number is ' . $y . '<br>';
endwhile;


$brands = [
    'Apple',
    'Lg',
    'Samsung',
    'Asus',
];

$arrayLength = count($brands);

$i = 0;

while ($i < $arrayLength) :
    echo $brands[$i] . '<br>';
    $i++;

endwhile;

