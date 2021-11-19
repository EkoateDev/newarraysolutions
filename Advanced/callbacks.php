<?php


// callback is a function pass as an argument into another function 
// usually in string 

function myCallback($item)
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
$arrLength = array_map('myCallback', $arr);
print_r($arrLength);

// 

$brandName = [
    'HP',
    'DELL',
    'APPLE'
];

$products = [
    'PROBOOK',
    'LATITUDE',
    'IPHONE'
];

$mergedArr = array_merge($brandName, $products);
$result = array_map('strtolower', $result);
echo '<pre>';
print_r($mergedArr);



//  anonymous function 

$arr = [
    'apple',
    'orange',
    'banana',
    'coconut'
];

$length = array_map(function ($item) {
    return strlen($item);
}, $arr);

print_r($length);
