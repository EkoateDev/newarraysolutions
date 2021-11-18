<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filter</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: separate;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
</body>

</html>

<?php

foreach (filter_list() as $id => $filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
}

// filtering an email 

$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo ("$email is a valid email address");
    echo '<br>';
} else {
    echo ("$email is not a valid email address");
}


// validating an ip 

$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo ("$ip is a valid IP address");
} else {
    echo ("$ip is not a valid IP address");
}

// 
$userEmail = 'ham@merc.gmail.com';

if (!filter_var($userEmail, FILTER_VALIDATE_EMAIL) === false) {
    echo ('The email address provided is valid');
    echo '<br>';
} else {
    echo 'The email provided is not a valid email address';
}

// FILTERING A STRING 

$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;


// Filtering an interger 

$int = 10;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo 'The number proivided is a interger';
} else {
    echo 'The number is not an integer';
}



//  filter advanced 


$int = 50;
$min = 1;
$max = 100;

if (!filter_var($int, FILTER_VALIDATE_INT, ['options' => ['min_range' => $min, 'max_range' => $max]]) === false) {
    echo ('The variable is in a legal range');
} else {
    echo ('The variable is not accepted within this range');
}

?>