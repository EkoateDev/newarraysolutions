<?php

session_start();

// storing
$_SESSION['favdriver'] = 'Lewis';
$_SESSION['favteam'] = 'Mercedes';

echo 'Session variables set';
echo '<br>';

// getting the values of the variable

echo ' my fav driver is ' . $_SESSION['favdriver'] . '<br>';
echo ' my fav team is ' . $_SESSION['favteam'];


// to remove all varaibles 

session_unset();

if(isset($_SESSION['favdriver'])){
    unset($_SESSION['favdriver']);
}
// to destroy 

session_destroy();

