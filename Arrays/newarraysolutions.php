<?php
// $color = [
//     'white',
//     'green',
//     'red',
//     'blue',
//     'black'
// ];

// echo 'The memory of that scene for me is like a frame of film forever frozen at that moment: the ' . $color[2] . ' carpet, 
// the ' . $color[1] . ' lawn, the ' . $color[0] . ' house, the leaden sky. The new president and his first lady. - Richard M. Nixon';

// Question 2 

// $color = [
//     'white',
//     'green',
//     'red'
// ];

// echo '<em> Output :</em>';
// echo '<br>';

// echo $color[0] . ',' . $color[1] . ',' . $color[2] . ',';

// echo '<br>';
// echo '<ul> 
// <li> ' . $color[1] . '</li>
// <li> ' . $color[2] . '</li> 
// <li> ' . $color[0] . '</li> 
// </ul>';


// Question 3

// $ceu = [
//     'Italy' => 'Rome',
//     'Luxembourg' => 'Luxembourg',
//     'Belgium' => 'Brussels',
//     'Denmark' => 'Copenhagen',
//     'Finland' => 'Helsinki',
//     'France' => 'Paris',
//     'Slovakia' => 'Bratislava',
//     'Slovenia' => 'Ljubljana',
//     'Germany' => 'Berlin',
//     'Greece' => 'Athens',
//     'Ireland' => 'Dublin',
//     'Netherlands' => 'Amsterdam',
//     'Portugal' => 'Lisbon',
//     'Spain' => 'Madrid',
//     'Sweden' => 'Stockholm',
//     'United Kingdom' => 'London',
//     'Cyprus' => 'Nicosia',
//     'Lithuania' => 'Vilnius',
//     'Czech Republic' => 'Prague',
//     'Estonia' => 'Tallin',
//     'Hungary' => 'Budapest',
//     'Latvia' => 'Riga',
//     'Malta' => 'Valetta',
//     'Austria' => 'Vienna',
//     'Poland' => 'Warsaw'
// ];

// asort($ceu);

// echo '<em> Sample Output :</em>';
// echo '<br>';

// foreach ($ceu as $country => $capital) {
//     echo 'The capital of ' . $country . ' is ' . $capital;
//     echo '<br>';
// }


//  Question 4

// $x = [
//     1,
//     2,
//     3,
//     4,
//     5
// ];

// echo '<em> Sample Output :</em>';
// echo '<br>';


// var_dump($x);

// echo '<br>';

// unset($x[3]);

// $newArrayVulues =  array_values($x);

// var_dump($newArrayVulues);


// Question 5 

// $color = [
//     4 => 'white',
//     6 => 'green',
//     11 => 'red'
// ];

// echo 'This is where the pointer is';
// echo '<br>';

// echo current($color);

// echo '<br>';
// echo 'Moving the Array forward';

// echo '<br>';
// echo next($color);

// echo '<br>';
// echo 'Getting the first element';

// echo '<br>';
// $newColors = $color;
// echo '<em> Expected Result : </em>' . reset($newColors);


// Question 6

// $jsonObjects = '{
//     "Title": "The Cuckoos Calling",
//     "Author": "Robert Galbraith",
//     "Detail": {
//         "Publisher": "Little Brown"
//     }
// }';

// echo '<em> Expected Output : </em>';
// echo '<br>';

// $infos = json_decode($jsonObjects, true);

// $detail = $infos['Detail']['Publisher'];
// $infos['Publisher'] = $detail;
// unset($infos['Detail']);

// foreach($infos as $key => $info) {
//     echo $key . ' : ' . $info;
//     echo '<br>';
// }

// Question 7

// $numbers = [
//     1,
//     2,
//     3,
//     4,
//     5
// ];

// echo 'Original array : ';
// echo '<br>';

// foreach ($numbers as $originalArray) {
//     echo $originalArray;
// }
// echo '<br>';

// $position = 3;

// $newSpot = array_splice($numbers, $position, 0, ['$']);

// echo 'After inserting "$" the array is :';
// echo '<br>';

// foreach ($numbers as $improvedArray) {
//     echo $improvedArray;
// }

// Question 8 

// $patients = [
//     'Sophia' => '31',
//     'Jacob' => '41',
//     'William' => '39',
//     'Ramesh' => '40'
// ];

// asort($patients);

// echo 'ascending order sort by value';
// echo '<br>';

// foreach ($patients as $key => $val) {
//     echo $key .' is ' . $val;
//     echo '<br>';
// }
// echo '<br>';

// ksort($patients);

// echo 'ascending order sort by Key';
// echo '<br>';

// foreach ($patients as $key => $val) {
//     echo $key . ' is ' . $val;
//     echo '<br>';
// }

// echo '<br>';

// arsort($patients);

// echo 'descending order sort by Value';
// echo '<br>';

// foreach ($patients as $key => $val) {
//     echo $key . ' is ' . $val;
//     echo '<br>';
// }

// echo '<br>';

// krsort($patients);

// echo 'descending order sort by Key';
// echo '<br>';

// foreach ($patients as $key => $val) {
//     echo $key . ' is ' . $val;
//     echo '<br>';
// }

// Question 9 

$RecordedTemperatures = '78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 
68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73';

$temperature = explode(', ', $RecordedTemperatures);

$sum = array_sum($temperature);

$total = count($temperature);

$average = $sum / $total;

$roundedAverage = round($average, 1);

echo '<em> Expected Outcome :</em>';
echo '<br>';
echo 'Average Temperature is : ' . $roundedAverage;
echo '<br>';

sort($temperature);

echo 'List of seven lowest temperatures  : ';
for ($x = 0; $x < 7; $x++) {
    echo $temperature[$x] . ', ';
}
rsort($temperature);

echo '<br>';
echo 'List of seven highest temperatures  : ';

for ($x = 0; $x < 7; $x++) {
    echo $temperature[$x] . ', ';
}


// Question 10

function columns($uarr)
{
    $n = $uarr;

    if (count($n) == 0) {
        return array();
    } else if (count($n) == 1) {
        return array_chunk($n[0], 1);
    }

    array_unshift($uarr, NULL);
    $transpose = call_user_func_array('array_map', $uarr);
    return array_map('array_filter', $transpose);
}

function bead_sort($uarr)
{
    foreach ($uarr as $e) {
        $poles[] = array_fill(0, $e, 1);
    }

    return array_map('count', columns(columns($poles)));
}

echo 'Original Array : ' . '
';
print_r(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3));
echo '
' . 'After Bead sort : ' . ' ';
print_r(bead_sort(array(5, 3, 1, 3, 8, 7, 4, 1, 1, 3)));

// Question 11

$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'w3resource',
    'com'
];

$result = [];

foreach ($array1 as $key => $arr) {
    $result[$key][0] = $array2[$key];
    $result[$key][1] = $arr[0];
    $result[$key][2] = $arr[1];
}

echo '<em> Expected Output : </em>';

echo '<pre>';
print_r($result);

// Question 12 

// $Color = [
//     'A' => 'Blue',
//     'B' => 'Green',
//     'c' => 'Red'
// ];

// echo '<em> Expected Output :</em>';
// echo '<br>';

// echo 'Values are in lower case';
// echo '<br>';

// $lowerValues = array_map('strtolower', $Color);
// print_r($lowerValues);

// echo '<br>';
// echo 'Values are in upper case.';
// echo '<br>';

// $upperValues = array_map('strtoupper', $Color);
// print_r($upperValues);


// Question 13 

// echo '<em> Expected Output : </em>';

// $start = 200;
// $end = 250;
// $step = 4;

// $rangeofNumbers = range($start, $end, $step);

// $numbers = implode(',', $rangeofNumbers);

// echo $numbers;


// Question 14 

// $sampleArray = [
//     'abcd',
//     'abc',
//     'de',
//     'hjjj',
//     'g',
//     'wer'
// ];

// $arrayLength = array_map('strlen', $sampleArray);

// $minimun = min($arrayLength);

// $maximum = max($arrayLength);

// echo '<em> Expected Output : </em>';

// echo 'The shortest array length is ' . $minimun . '. ';

// echo 'The shortest array length is ' . $maximum . '.';

// Question 15 

// echo '<em> Sample Range </em>: (11, 20)';
// echo '<br>';

// $start = 11;
// $stop = 20;

// $uniqueNumbers = range($start, $stop);

// shuffle($uniqueNumbers);

// echo '<em> Sample Output : </em>';

// foreach($uniqueNumbers as $number){
//     echo ' ' .$number;
// }

// Question 16 

// $formulaOneDrivers = [
//     'Mercedes' => 'Lewis',
//     'Redbull' => 'Max',
//     'Mclaren' => 'Lando',
//     'Ferrari' => 'Charles',
//     'Aston' => 'Sebastian'
// ];

// $arrayKeys = array_keys($formulaOneDrivers);
// $longestString = 0;
// $highestIndex = 0;

// foreach ($arrayKeys as $key => $value) {
//     $length = strlen($value);
//     if ($longestString < $length) {
//         $longestString = $length;
//         $highestIndex = $key;
//     }
// }

// $largestKey = $arrayKeys[$highestIndex];

// echo 'The largest Key in the array is ' . $largestKey;


// Question 17




// Question 18

// function dropDecimalNumber($number, $precision, $separator)
// {

// }


// Question 19

// $color = [
//     'color' => [
//         'a' => 'Red',
//         'b' => 'Green',
//         'c ' => 'White'
//     ],
//     'numbers' => [
//         1,
//         2,
//         3,
//         4,
//         5,
//         6
//     ],
//     'holes' => [
//         'First',
//         5 => 'Second', 'Third'
//     ]
// ];

// echo 'Write a PHP script to print ' . $color['holes'][5] . ' and ' . $color['color']['a'];

// Question 24

// $country = [
//     'Mauritius66',
//     'Nigeria80',
//     'India19',
//     'Congo12',
//     'Ghana20',
// ];

// natcasesort($country);

// foreach ($country as $key => $value) {
//     echo '<pre>';
//     echo $value;
// }

// Question 26

// function shuffleArray($values)
// {
//     $initialKeys = array_keys($values);

//     shuffle($initialKeys);

//     foreach ($initialKeys as $val) {
//         $new[$val] = $values[$val];
//     }

//     $values = $new;

//     return $values;
// }

// $shoeBrands = [
//     'Nike',
//     'Off-White',
//     'Adidas',
//     'Yeezy',
//     'Vans',
//     'Converse',
//     'Puma',
//     'Fila'
// ];

// echo '<pre>';
// print_r(shuffleArray($shoeBrands));


// Question 27

// function passwordGenerator($upperCase = 6, $lowerCase = 4, $numCase = 3, $others = 2)
// {
//     $passwordArray = [];
//     $passwordValues = '';

//     for ($x = 0; $x < $upperCase; $x++) {
//         $passwordArray[] = chr(mt_rand(44, 122));
//     }
//     for ($x = 0; $x < $lowerCase; $x++) {
//         $passwordArray[] = chr(mt_rand(77, 93));
//     }
//     for ($x = 0; $x < $numCase; $x++) {
//         $passwordArray[] = chr(mt_rand(60, 210));
//     }
//     for ($x = 0; $x < $others; $x++) {
//         $passwordArray[] = chr(mt_rand(22, 180));
//     }

//     shuffle($passwordArray);

//     // Appending values to the empty string 

//     foreach ($passwordArray as $val) {
//         $passwordValues .= $val;
//     }

//     return $passwordValues;
// }

// echo '<br>';
// echo 'Generated Password is : ' . passwordGenerator();


// Question 28

// $shoeCollection = [
//     'Nike',
//     'Off-White',
//     'Adidas',
//     'Yeezy',
//     'Vans',
//     'Converse',
//     'Puma',
//     'Fila'
// ];

// rsort($shoeCollection);

// foreach($shoeCollection as $val){
//     echo $val . ' ';
// }


// Question 29

$str = '2-4 19-21 8-15';

$pattern = "/";

// function stringRange($string1)
// {
//     preg_match_all("/([0-9]{1,2})-?([0-9]{0,2}) ?,?;?/", $string1, $a);
//     $y = [];
//     foreach ($a[1] as $z => $i) {
//         $y = array_merge($y, range($i, (empty($a[2][$z]) ? $i : $a[2][$z])));
//     }
//     return ($y);
// }

// $testString = '1-2 18-20 9-11';
// print_r(stringRange($testString));


// question 31 

// $arr = [
//     'Lenovo' => 'yoga',
//     'Paris Saint' => 'Psg',
//     'Stamford Bridge' => 'Chelsea',
// ];

// $highestValue = NULL;
// $highestIndex = NULL;

// foreach ($arr as $key => $value) {
//     $length = strlen($value);

//     if ($highestValue < $length) {
//         $highestValue = $length;
//         $highestIndex = $key;
//     }
// }
// echo 'The highest index of value in the array is ' . $highestIndex;


// Question 32

// $fileName = 'data.txt';

// $fileInfo = new SplFileInfo($fileName);

// echo 'the extension of this file is ' . $fileInfo->getExtension();

// Question 33 

// function searchValues($value, $key, $arr)
// {
//     foreach ($arr as $k => $val) {
//         if ($val['Iphone'] === $value) {
//             return $k;
//         }
//     }
//     return NULL;
// }

$smartPhones = [
    'Samsung' => 'Note',
    'Apple' => 'Iphone',
    'Lg' => 'Bait',
    'Sony' => 'Xperia'
];

$searchValue = 'Iphone';

if (in_array($searchValue, $smartPhones)) {
    echo 'A product with the name ' . $searchValue . ' has been found';
} else {
    echo 'The product is not available';
}

// print_r('searchValues'($smartPhones));

// $arrayKey = array_keys($smartPhones);
// $valfound = NULL;
// foreach ($smartPhones as $key => $value) {
//     if (array_search('Bait', $smartPhones, true)) {
//         $valfound = $value;
//     }
// }
// echo 'A product with the name ' . $valfound . ' has been found';


// if (array_search('Iphone', $smartPhones, true)) {
//     echo 'A product with the name ' . array_keys($smartPhones) . ' has been found';
// } else {
//     echo 'The product is not available';
// }

// foreach ($smartPhones as $key => $value) {
//     if (array_search('Note', $smartPhones, true)) {
//     }
// }
// echo 'The desired product has been found ' . $key;

// while ($valuesFound = current($smartPhones)) {
//     if (array_search('Iphone 13', $smartPhones, true)) {
//         echo 'The desired product has been found ' . key($smartPhones);
//     } else {
//         echo 'The product is not available';
//     }
// }


// Question 34

// $arraySort = [
//     'project' => 'roadconstruction 21',
//     'hp' => 'PROBOOK 16',
//     'apple' => 'IPHONE 08',
//     'samsung' => 'galaxy 03',
// ];

// natcasesort($arraySort);
// echo 'Sorting the Values in a natural order ';
// echo '<br>';
// echo '<pre>';
// print_r($arraySort);

// 35

function trimElements(&$values)
{
    $values = trim($values);
}

$staffNames = [
    'bono  ',
    ' Wolf',
    ' Chritian ',
    'Marko',
    ', '
];
echo 'Values before the trim';
echo '<br>';
echo '<pre>';
var_dump($staffNames);

echo 'Values after the trim';
echo '<br>';
array_walk($staffNames, 'trimElements');
var_dump($staffNames);
