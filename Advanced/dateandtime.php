<?php

// Date and Time 

// $today = date('Y-m-d');
// $day = date('l');

// $year = date('Y');
// $currentDay = date('dS');
// $month = date('F');

// echo $today;
// echo '<br>';
// echo 'Today is ' . $day;
// echo '<br>';
// echo 'Today is the ' . $currentDay . ' of ' . $month . ' of the Year ' .$year;

// //today is the 18th of November of the Year 2021

// // 

// $currentDay = date('l');
// echo 'On ' . $currentDay . ' We feast hard';

// // 

// $copyright = '&copy; 2018-';

// echo $copyright . date('Y');

// // 

// echo 'The current time is ' . date('h:i:s');
// // 

// $dateTimeZone = new DateTimeZone('Indian/Mauritius');
// // calling the method using ->
// echo '<pre>';
// print_r($dateTimeZone->getLocation());


// // 

// $liveTimeZone = date_default_timezone_set('Indian/Mauritius');

// echo 'The time in this zone is ' . $liveTimeZone . date('H:i:sa');

// // 

// $timestamp = time();
// echo $timestamp;

// // output = 1637050143

// // converting the above output to readable time

// $timestamp = 1637050143;

// echo (date('F d, Y h:i:s', $timestamp));

// // Mktime function

// echo mktime(13, 20, 10, 11, 15, 2021);

// // get a weekday name of a particular date 

// echo date('l', mktime(0, 0, 0, 8, 12, 1997));

// // Future date

// $futureDate = mktime(0, 0, 0, date("m") + 30, date("d"), date("Y"));
// echo date("d/m/Y", $futureDate);


// // 

// $d = strtotime("tomorrow");
// echo date("Y-m-d h:i:sa", $d);

// $d = strtotime("next Saturday");
// echo date("Y-m-d h:i:sa", $d);

// // 

// $startdate = strtotime('Tuesday');
// $enddate = strtotime('+ 4 weeks');

// while ($startdate < $enddate) {
//     echo date('M d', $startdate) . '<br>';
//     $startdate = strtotime('+1 week', $startdate);
// }

// reads a file an writes it to the output buffer(safeguard). 
echo readfile('data.txt');




