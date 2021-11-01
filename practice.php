<?php

$testArray = [
    [
        'name' => 'ekoate',
        'color' => [
            'number' => '234'
        ],
    ],
];

$multiArray = [
    'name' => 'nek', 'c' => []
];


function my_callable_function()
{
    echo 'Oh hi Santan';
}

class MyClass
{
    static function myCallbackMethod()
    {
        echo 'Oh';
    }
}


// Simple Callback 

call_user_func('my_callback_function');

// Static class method call 

call_user_func(array('MyClass', 'myCallbackMethod'));

// Object method call 

$obj = new MyClass();
call_user_func(array('MyClass', 'myCallbackMethod'));

// static class method call 

call_user_func(array('MyClass::myCallbackMethod'));


// Create an object and output the value of one of its properties:
class AnotherClass
{
    public $name = 'ekoate';
}

$obj = new AnotherClass();
echo 'The name of the person is ' . $obj->name;



$Color = [
    'A' => 'Blue',
    'B' => 'Green',
    'c' => 'Red'
];

echo '<em> Expected Output :</em>';
echo '<br>';

echo 'Values are in lower case';
echo '<br>';

$lowerValues = array_map('strtolower', $Color);
print_r($lowerValues);

echo '<br>';
echo 'Values are in upper case.';
echo '<br>';

$upperValues = array_map('strtoupper', $Color);
print_r($upperValues);