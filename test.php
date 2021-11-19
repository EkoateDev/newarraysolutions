<?php

include 'vars.php';

echo 'The ' . $color . ' Sweet ' . $fruit;

// 

// $file = fopen('data.txt', 'r') or die('Sorry the file cannot be opened');
// if ($file) {
//     echo 'The file has been opened successfully';

//     fclose($file);
// }

// // 

// $myFile = fopen('data.txt', 'r') or die('Unable to read this file');
// if ($myFile) {
//     echo fread($myFile, filesize('data.txt'));

//     fclose($myFile);
// }

// fgets, gets line from file pointer. 
// reading with fgets ends when length -1 byte have been read or new line. 

// $testFile = fopen('data.txt', 'r') or die('Failed');
// if ($testFile) {
//     echo fgets($testFile);
//     fclose($testFile);
// }

// $sampleFile = fopen('data.txt', 'r') or die('File cannot be opened');

// // Ouput each line of file till the end 

// while (!feof($sampleFile)) {
//     echo fgets($sampleFile) . '<br>';
// }
// fclose($sampleFile);


//Fgetc Reading single character from a file 

// $fileName = fopen('data.txt', 'r') or die('Failed to read file');
// while (!feof($fileName)) {
//     echo fgetc($fileName) . '<br>';
// }
// fclose($fileName);


// $file = 'data.txt';

// if (file_exists($file)) {

//     $handle = fopen($file, 'r') or die('ERROR: cannot open this file');

//     if ($handle) {
//         echo fread($handle, filesize($file));
//         echo '<br>';
//     }

//     echo 'Ending the file here <br>';

//     if (fclose($handle)) {
//         echo ' The file has been closed';
//     }
// } else {
//     echo ' ERROR: File does not exist';
// }
