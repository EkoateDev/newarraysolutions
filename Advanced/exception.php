<?php

// exception is an object that describes an error 
// throw statement allows a user defined function or method to throw an exception  
function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}

echo divide(5, 2);

//  using try and catch 


function divisionOfNumbers($dividend, $divisor)
{
    if ($divisor === 0) {
        throw new Exception('Division by Zero');
    }
    return $dividend / $divisor;
}

try {
    echo divisionOfNumbers(5, 0);
} catch (Exception $e) {
    echo 'Cannot be divided by zero';
}


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
