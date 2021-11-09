<?php

$d = date('D');

if ($d == 'Friday') {
    echo 'Have a lovely SLeep on this weekend';
} else {
    echo 'Oh Well, Today is ' . $d;
}


$t = date("H");

if ($t < "20") {
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
