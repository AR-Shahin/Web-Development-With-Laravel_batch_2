<?php

use App\models\Student;
use App\models\User;

require "./bootstrap.php";
echo "<h1 align='center'>PSR - Built in Functions in PHP</h1>";

// die();
// exit();

// sleep(2);
// new User();

// new Student();

use NumberToWords\NumberToWords;

$numberToWords = new NumberToWords();


$numberTransformer = $numberToWords->getNumberTransformer('en');

// echo $numberTransformer->toWords(1000);

echo "<br>";

use Rakibhstu\Banglanumber\NumberToBangla;

$numto = new NumberToBangla();


$text = $numto->bnWord(555555);

// echo $text;


class A
{
}

class B
{
}


$ob1 = new A();
$ob2 = new B();

// if ($ob1 instanceof B) {
//     echo "Class A";
// }

// if (is_a($ob1, 'B')) {
//     echo "Class A";
// }

$str = "My-name-is-Shahin";

// $var = explode("-", $str);

// echo $var[0];
// var_dump($var);

$arr = ["my", "name", "is", "shahin"];

$name = implode(" ", $arr);

// echo $name;

// echo count($arr);

$name = "SHAHIN";
// echo strtoupper($name);
// echo strtolower($name);
// echo md5($name);

// $str2 = "Hello Bangladesh test";
// echo str_word_count($str2);

// echo gettype($name);

$add = function ($a, $b) {
    return $a + $b;
};

// echo $add(10, 20);

$sub = fn ($a, $b) => $a - $b;


// echo $sub(100, 50);


$name  = "anisur rahman";

// echo ucwords($name);
echo ucfirst($name);
