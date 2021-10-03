<?php

//This is a Comment

# Another Comment

/* multi line comment 
kfbsdkfnd*/

echo "<h1 style='color:red'>I am Heading</h1>";

// $variableName = 'string';
// echo $variableName;

$a = 10;

// function test()
// {
//     $b = 10;
//     return $a + $b;
// }
// add();
function myTest()
{
    global $a;
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $a </p>";
}
myTest();


function myFunc()
{
    global $a;
    static  $x = 10;
    echo ++$x;
    echo "<br>";
    echo "a is $a";
}

myFunc();
echo "<br>";
myFunc();
echo "<br>";
myFunc();
echo "<br>";
print('hello PHP');
echo "<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
echo "<br>";

echo "1 ", "2";
echo "<br>";

$arr = array('10', '20', 100, true);

var_dump($arr);

$test = null;
echo "<br>";
var_dump($test);
echo "<br>";

$str = "Shahin bhai";

// echo strlen($str);
// echo str_word_count($str);
// echo strrev($str);
// echo strpos($str, 'bhai');
// echo str_replace('bhai', 'test', $str);

$number = 10;

var_dump($number);

if (is_int($number)) {
    echo "Number";
} else {
    echo "Not A Number";
}

// echo "<br>";
// $x = 1.9e411;
// var_dump($x);
echo "<br>";

// if (is_nan('test')) {
//     echo "Not a Num";
// } else {
//     echo " Number";
// }

$x = 10.5;

$y = (int)$x;

var_dump($y);

echo "<br>";

echo "Pi " . pi();
echo "<br>";
echo (min(0, 150, 30, 20, -8, -200));  // returns -200
echo "<br>";
echo (max(0, 150, 30, 20, -8, -200));

echo "<br>";
echo (rand(1, 10));
