<?php

// Constant 
// $x = 10;
// $X = 10;

#define('key', 'value', false);

// define('MESSAGE', 'Hello World', false);

// echo message;

// const MESSAGE = "Hello const by JavaTpoint PHP";
// echo MESSAGE;
// echo "<br>";
// echo "Current " . __LINE__ . "<br><br>";
// echo "<br>";
// echo "Path " . __FILE__ . "<br><br>";

// echo "<br";
// echo __DIR__ . "<br><br>";

// $a = 2;
// $b = 3;

// $sum = $a + $b;
// // echo 'sum = ' . $sum;
// echo "Sum = $sum <br>";
// $sub = $a - $b;
// echo "Sub = $sub <br>";


// // $mod = $a % $b;
// // echo "Mod = $mod <br>";

// $ex = $a ** $b;

// echo "Sub = $ex <br>";

// if (true) {
//     if (false) {
//         echo "nested if <br>";
//     } else {
//         echo "false <br>";
//     }
//     echo "Hello";
// } else {
//     echo "World";
// }
// $x = 100;
// if ($x < 10) {
//     echo "test <br>";
// } else if ($x == 100) {
//     echo "100 <br>";
// } else {
//     echo "nothing";
// }

// for ($i = 1; $i <= 10; $i++) {
//     echo "$i <br>";
// }

// $i = 1;

// while ($i < 10) {
//     echo "$i <br>";
//     $i++;
// }

// $colors = ['red', 'green', 'blue'];


// foreach ($colors as $key => $value) {
//     echo $value . '<br>';
// }
// $num = 200;
// switch ($num) {
//     case 10:
//         echo "10";
//         break;
//     case 20:
//         echo "20";
//         break;

//     default:
//         echo "default";
// }

// function funcName($param)
// {
//     echo "Hello $param <br>";
// }
// funcName('test');
// funcName('omi');
// funcName('shahin');

function returnIndexFromArray($arr, $val)
{
    foreach ($arr as $key => $value) {
        if ($value == $val) {
            return $key;
        }
    }

    return -1;
}

$ourArray = [10, 20, 30, 40, 50, 500];

// echo returnIndexFromArray($ourArray, 50);

// Prime Number, Perfect Number
#6 => 1,2,3

echo "<br>";
echo count($ourArray);
