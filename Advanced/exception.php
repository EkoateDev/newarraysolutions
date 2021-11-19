<?php

// exception is an object that describes an error 
// throw statement allows a user defined function or method to throw an exception  


//  using try catch finally that will run if there is an exception 

function division($dividend, $divisor)
{
    if ($divisor === 0) {
        throw new Exception('Division by zero');
    }
    return $dividend / $divisor;
}

try {
    echo division(9, 0);
} catch (Exception $e) {
    echo '9 Cannot be divided by zero';
    echo '<br>';
} finally {
    echo ' Try again';
}


// try catch with the exception object 

function numbersDivision($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by zero", 1);
    }
    return $dividend / $divisor;
}

try {
    echo numbersDivision(5, 0);
} catch (Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]$message";
}


// function nameSearch($person)
// {
//     $person = 'Lando';

//     if (!$person) {
//         throw new Exception('Error on the name');
//     }
//     return $person;
// }

// try {
//     echo nameSearch('Land');
// } catch (Exception $e) {
//     echo 'caught exception ' . $e->getMessage();
// }



function subDivide($number, $x)
{

    if (!$x) {
        throw new Exception('Division by zero not allowed');
    }
    return $number / $x;
}
try {
    echo subDivide(5, 0);
} catch (Exception $ex) {
    echo 'Caught an exception here' . '<br>' . $ex->getMessage();
    echo '<br>';
} finally {
    echo 'Test for first finally here';
    echo '<br>';
}

try {
    echo subDivide(3, 1);
    echo '<br>';
} catch (Exception $ex) {
    echo 'Exception caught here ' . '<br>' . $ex->getMessage();
    echo '<br>';
} finally {
    echo 'Checking the second finally';
}
