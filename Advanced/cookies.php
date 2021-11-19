<?php

$cookieName = 'user';
$cookieValue = 'Doe';

setcookie($cookieName, $cookieValue, time() + (7 * 24 * 60 * 60),  "/");

if (!isset($_COOKIE[$cookieName])) {
    echo "Cookie named '" . $cookieName . "' is not set!";
} else {
    echo "Cookie '" . $cookieName . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookieName];
}


//  Check if cookies are enabled 

setcookie("test_cookie", "test", time() + 3600, '/');

if (count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}


// to delete a cookie set the expiration date in the past 
$user = 'Doe';
setcookie($user, '', time() - 3600);

echo 'cookie ' . $user  . ' is deleted';
