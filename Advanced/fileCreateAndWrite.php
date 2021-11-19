<?php

$fileName = 'newtext.txt';

$data = 'The quick guy';

$handle = fopen($fileName, 'w') or die('Error: Cannot open this file');

fwrite($handle, $data) or die('Error Cannot write to this file');

fclose($handle);

echo 'Data was Successfully added';


//  

$fileName = 'newtext.txt';
$content = 'Merc fan boy here';

// Checking if the file exists 

if (is_writable($fileName)) {

    // opening the file name in append mode
    if (!$handle = fopen($fileName, 'a')) {
        echo "Cannot open file ($fileName)";
        exit;
    }

    // Adding contents to opened file   
    if (fwrite($handle, $content) === FALSE) {
        echo "Cannot write to file ($fileName)";
        exit;
    }

    echo "Success, wrote ($content) to file ($fileName)";
} else {
    echo 'The File ' . $fileName . 'is not writable';
}
