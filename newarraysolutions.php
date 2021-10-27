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

// $newXValue = $x;

// var_dump($newXValue);

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
//     echo $key = $val;
//     echo '<br>';
// }

// ksort($patients);

// echo 'ascending order sort by Key';
// echo '<br>';

// foreach ($patients as $key => $val) {
//     echo $key = $val;
//     echo '<br>';
// }

// arsort($patients);

// echo 'descending order sort by Value';
// echo '<br>';

// foreach ($patients as $key => $val) {
//     echo $key = $val;
//     echo '<br>';
// }

// krsort($patients);

// echo 'descending order sort by Key';
// echo '<br>';

// foreach ($patients as $key => $val) {
//     echo $key = $val;
//     echo '<br>';
// }

// Question 9 

$RecordedTemperatures = '78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 
75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73';

$temperature = explode(',', $RecordedTemperatures);

$amount = array_sum($temperature);

$total = count($temperature);

foreach ($temperature as $average) {
    $average = ceil($amount / $total);
}

echo '<em> Expected Outcome :</em>';
echo '<br>';
echo 'Average Temperature is : ' . $average;
echo '<br>';

for ($x = 0; $x < 7; $x++) {
    $x = $total;
    echo $x;
}

echo 'List of seven lowest temperatures  : ';
