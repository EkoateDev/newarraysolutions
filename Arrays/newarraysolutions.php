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
//         'c' => 'White'
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

// Question 21 

// function subnetSort($subA, $subB)
// {
//     $subOneArr = explode(',', $subA);
//     $subTwoArr = explode(',', $subB);
//     foreach (range(0, 4) as $val) {
//         if ($subOneArr[$val] < $subTwoArr[$val]) {
//             return -1;
//         } elseif ($subOneArr[$val] > $subTwoArr[$val]) {
//             return 1;
//         }
//     }
//     return -1;
// }

// $subnets = [
//     '192.168.100.1',
//     '167.180.36.174',
//     '235.130.143.74',
//     '147.176.235.40',
//     '122.29.122.117',
//     '226.148.37.214'
// ];

// usort($subnets, 'subnetSort');
// echo '<pre>';
// print_r($subnets);

// Question 23 

$africanRegions = [
    'East' => [
        'Tanzania',
        'Kenya',
        'Uganda',
        'Botswana'
    ]
];


foreach ($africanRegions as $key => $val) {
    $east[$key] = $val['East'];
}

$arrSort = array_multisort($east, SORT_ASC, $africanRegions);

print_r($arrSort);

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

// $strOne = 'A';

// $strTwo = 'D';

// $range = array_fill(0, 5, range($strOne, $strTwo));

// echo '<pre>';
// print_r($range);







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

// function trimElements(&$values)
// {
//     $values = trim($values);
// }

// $staffNames = [
//     'bono  ',
//     ' Wolf',
//     ' Chritian ',
//     'Marko',
//     ', '
// ];
// echo 'Values before the trim';
// echo '<br>';
// echo '<pre>';
// var_dump($staffNames);
// echo '</pre>';

// echo 'Values after the trim';
// echo '<br>';
// array_walk($staffNames, 'trimElements');
// echo '<pre>';
// var_dump($staffNames);
// echo '</pre>';

// 36

// $countryNames = [
//     'MauRiTius',
//     'NIGERIa',
//     'Togo',
//     'GhaNA'
// ];

// $lowerCase = array_map('strtolower', $countryNames);
// $upperCase = array_map('strtoupper', $countryNames);

// echo 'Values in Lower case';
// echo '<br>';
// foreach ($lowerCase as $value) {
//     echo $value;
//     echo '<br>';
// }

// echo 'Values in Upper case';
// echo '<br>';
// foreach ($upperCase as $element) {
//     echo $element;
//     echo '<br>';
// }

// Question 37

// $arr = [
//     'D700',
//     '60D',
//     'miroless',
//     'E56',
//     'miroless',
//     'Lumix',
//     'miroless'
// ];

// $count = array_count_values($arr);

// if (array_search('miroless', $arr) !== false) {
//     echo 'This product appeared ' . $count['miroless'] . ' times';
// }else {
//     echo 'The product is not available';
// }


// if (in_array($searchElement, $cameraNames)) {
//     echo array_count_values(array_column($cameraNames, $searchElement))[$searchElement];
// }

// Question 38

// $formulaOneDrivers = [
//     0 =>  [
//         'number' => '44',
//         'name' => 'Lewis',
//         'car' => 'Mercedes'
//     ],
//     1 =>  [
//         'number' => '77',
//         'name' => 'Valtteri',
//         'car' => 'Mercedes'
//     ],
//     2 =>  [
//         'number' => '44',
//         'name' => 'George',
//         'car' => 'Williams'
//     ]
// ];

// function arrayUnique($arr, $key)
// {
//     $newArr = [];
//     $sum = 0;
//     $keyArr = [];

//     foreach ($arr as $value) {
//         if (!in_array($value[$key], $keyArr)) {
//             $keyArr[$sum] = $value[$key];
//             $newArr[$sum] = $value;
//         }
//         $sum++;
//     }
//     return $newArr;
// }
// echo '<pre>';
// print_r(arrayUnique($formulaOneDrivers, 'number'));

// Question 39

// $weekdays = [
//     'monday',
//     'tuesday',
//     'wednesday',
//     'monday',
//     'thursday',
//     'wednesday',
//     'friday',
// ];

// $result = array_unique($weekdays, SORT_STRING);
// print_r($result);

// Question 40 

// $footballClubs = [
//     'chelsea',
//     'bayern',
//     'United',
//     'chelsea',
//     'madrid',
//     'psg',
//     'madrid',
// ];

// $sortedArr = array_values(array_unique($footballClubs));
// echo '<pre>';
// print_r($sortedArr);

// Question 41

// function arrUnique($arr)
// {
//     return array_unique(array_diff_assoc($arr, array_unique($arr)));
// }

// $emailAddr = [
//     'johndoe@hotmail.com',
//     'rollingstone@gmail.com',
//     'johndoe@hotmail.com',
//     'stay@outlook.com',
//     'rollingstone@gmail.com',
// ];

// echo 'The emails which are not unique are ';
// echo '<br>';
// echo '<pre>';
// print_r(arrUnique($emailAddresses));
// 

$emailAddr = [
    'johndoe@hotmail.com',
    'rollingstone@gmail.com',
    'johndoe@hotmail.com',
    'stay@outlook.com',
    'rollingstone@gmail.com',
];

$uniqueArr = array_unique(array_diff_assoc($emailAddr, array_unique($emailAddr)));
echo 'The emails which are not unique are ';
echo '<br>';
echo '<pre>';
print_r($uniqueArr);
echo '</pre>';

// Question 42 

// function arrayFlatten($arr)
// {
//     $newArr = [];

//     foreach ($arr as $key => $value) {

//         if (is_array($value)) {
//             $newArr = array_merge($newArr, arrayFlatten($value));
//         } else {
//             $newArr[$key] = $value;
//         }
//     }
//     return $newArr;
// }

// $arr  = [
//     'a' => [
//         -1,
//         -2,
//         0,
//         2,
//         3
//     ],
//     'b' => [
//         'c' => [
//             -1,
//             0,
//             2,
//             0,
//             3
//         ]
//     ]
// ];

// $result = arrayFlatten($arr);
// $flattenValues = array_unique($result);
// echo '<pre>';
// print_r($flattenValues);


// Question 43 

// $firstDriversList = 'Lewis, Ocon, Carlos, Vettle';
// $secondDriversList = 'Ham, Ocon, Lando, Vettle';

// $mergedList = array_merge(explode(',', $firstDriversList), explode(',', $secondDriversList));

// $uniqueList = array_unique($mergedList);

// $listJoin = implode(' , ', $uniqueList);

// echo $listJoin;


// Question 44 

// function removeData($arr, $val)
// {
//     $duplicate = 0;

//     foreach ($arr as $key => $value) {
//         if (($duplicate > 0) && ($value === $val)) {
//             unset($arr[$key]);
//         }
//         if ($value ===  $val) $duplicate++;
//     }
//     return array_filter($arr);
// }

// $arr = [
//     4, 5, 6, 7, 4, 7, 8
// ];

// print_r(removeData($arr, 7));

// Question 45

// function dataComparism($laptopNames, $workstations)
// {
//     return strcmp(implode(',', $laptopNames), implode(',', $workstations));
// }

// $laptopNames = [
//     [
//         'Lenovo' => 'Legion'
//     ],
//     [
//         'Apple' => 'Macbook'
//     ],
//     [
//         'Lg' => 'Soft'
//     ]
// ];

// $workstations = [
//     [
//         'Acer' => 'predator'
//     ],
//     [
//         'Lenovo' => 'G5'
//     ],
//     [
//         'Lg' => 'Soft'
//     ],
// ];

// $result = array_udiff($laptopNames, $workstations, 'dataComparism');
// print_r($result);

// Question 46

// function stringCheck($arrValues)
// {
//     return array_map('is_string', $arrValues);
// }

// $arrOne = [
//     'Lg',
//     'macbook',
//     'asus',
// ];

// $arr = [
//     'Valtteri',
//     77,
//     693,
// ];

// var_dump(strCheck($arrOne));

// Question 47

// function firstKey($arr)
// {
//     $firstKey = array_key_first($arr);

//     if (null === $firstKey) {
//         $val = 'Array is empty';
//     } else {
//         $val = $arr[$firstKey];
//     }
//     return $val;
// }
// $arr = [
//     'cabs' => 'Rice',
//     'protein' => 'Beans',
//     'fresh' => 'Pasta',
//     'sick' => 'Soup'
// ];

// print_r(firstKey($arr));

// Question 48

// function unionJoin($arr1, $arr2)
// {
//     $union = array_unique(
//         array_merge(
//             array_intersect($arr1, $arr2),
//             array_diff($arr1, $arr2),
//             array_diff($arr2, $arr1)
//         )
//     );
//     return $union;
// }

// $arr1 = [
//     'Redbull',
//     'Mercedes',
//     'Petronas',
//     'Mclaren'
// ];

// $arr2 = [
//     'Lewis',
//     'Mercedes',
//     'Honda',
//     'Mclaren',
//     'Valtteri'
// ];

// print_r(unionJoin($arr1, $arr2));

// Question 49 

// $testData = [
//     'c1' => 'Red',
//     'c2' => 'Green',
//     'c3' => 'White',
//     'c4' => 'Black'
// ];

// $secondArr = [
//     'c2',
//     'c4'
// ];

// print_r(array_intersect_key($testData, array_flip($secondArr)));

// Question 50 

// $racingLocation = [
//     'Sao Paul',
//     'Monaco',
//     'Silverstone',
//     'Austria',
//     'Qatar'
// ];

// $lastItem = array_pop($racingLocation);

// echo $lastItem;

// // another method 

// function endOfArr($racingLocation)
// {
//     return end($racingLocation);
// }

// $racingLocation = [
//     'Sao Paul',
//     'Monaco',
//     'Silverstone',
//     'Austria',
//     'Qatar'
// ];

// $lastValue = endOfArr($racingLocation);

// echo $lastValue;

// Question 52

// $firstArr = [
//     'c1' => 'Red',
//     'c2' => 'Green',
//     'c3' => 'White',
//     'c4' => 'Black'
// ];

// $secondArr = [
//     'c2',
//     'c4'
// ];

// $arrFilter = array_diff_key($firstArr, array_flip($secondArr));
// echo '<pre>';
// print_r($arrFilter);

// Question 53


// $brands = [
//     'Canon' => '80D',
//     'Apple' => 'Macbook',
//     'Samsung' => 'Note 20',
//     'Puma' => 'Only See Great',
//     'Nike' => 'Mecury'
// ];

// $item = $brands['Nike'];

// $arrFilter = array_filter($brands, function ($keys) use ($item) {
//     return $keys !== $item;
// });

// echo '<pre>';
// print_r($arrFilter);

// Question 54

// $myBestPlayers = [
//     'Cristiano Ronaldo     r7',
//     'Kai               Haverts',
//     '   Christian Pulisic  ',
//     '  Lewandowski'
// ];

// $cleanedArr = array_map('trim', $myBestPlayers);
// echo '<pre>';
// print_r($cleanedArr);

// Question 55 

// $string = ' Thus, the most important characteristic of economic order prevailing in the world 
// today is a wage system that deprives the workers of any right to the products being produced, 
// be it for the society or for a private establishment
// Why were not only women created . 
// Sporting clubs represent the basic organization of traditional sport in the world today ';

// echo '<pre>';

// $result = array_filter(array_map('trim', explode("\n", $string)));
// print_r($result);


// Question 56

// $arrFill = array_fill(0, 4, array_fill(0, 4, 10));
// echo '<pre>';
// print_r($arrFill);

// Question  57

// function compareArrays($array1, $array2)
// {
//     if ($array1 === $array2) {
//         return 0;
//     } elseif ($array1 > $array2) {
//         return 1;
//     } else {
//         return -1;
//     }
//     // return ($x > $y) ? 1 : -1;
// }
// function compareArr($array1, $array2)
// {
//     return array_diff_assoc($array1['Toyota'], $array2['Toyota']);
// }

// $car1 = [
//     'petronas' => 'Amg',
//     'porshe' => '911',
//     'Toyota' => [
//         'Supra' => 'Gtx',
//         'Lexus' => 'x400'
//     ]
// ];
// $car2 = [
//     'petronas' => 'Amg',
//     'porshe' => '911',
//     'Toyota' => [
//         'corolla' => 'sports',
//         'Lexus' => 'x400'
//     ]
// ];

// print_r(compareArr($car1, $car2));

// Question 58 

// $strArr = [
//     'x',
//     'y',
//     'y'
// ];

// $arrOfNumbers = [
//     10,
//     20,
//     30
// ];

// $combinedArr = array_combine($arrOfNumbers, $strArr);
// echo '<pre>';
// print_r($combinedArr);

// Question 59

// $range = array_combine(range(20, 25), range(2, 7));

// echo '<pre>';
// print_r($range);
