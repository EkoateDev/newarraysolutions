<?php


// callback is a function pass as an argument into another function 
// usually in string 

function my_callback($item)
{
    return strlen($item);
}

$arr = [
    'apple',
    'orange',
    'banana',
    'coconut'
];

// sends the array values to a user made function 
// returns the new values from the user made function 
$lengths = array_map('my_callback', $arr);
print_r($lengths);


//  anonymous function 

$arr = [
    'apple',
    'orange',
    'banana',
    'coconut'
];

$length = array_map(function($item){return strlen($item);}, $arr);

print_r($length);