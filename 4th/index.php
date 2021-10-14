<?php

// session_start();

// $_SESSION['name'] = 'Shahin';


// echo "Data Stored In session!";
?>
<!-- <a href="./session_set.php">Form</a>

<a href="./session_set.php">Login</a>

<a href="./dashboard.php">Dashboard</a> -->
<?php

// setcookie('test', 'Shahin', 5000, "/");

// echo $_COOKIE['test'];

$arr = ['shahin', 'omi', 'arif'];

function makeCapital($name)
{
    return ucwords($name);
}
var_dump($arr);
echo "<br>";
$result = array_map("makeCapital", $arr);

var_dump($result);

echo "<br>";
echo "<br>";


function sayHello($name)
{
    return "Hello $name !";
}
function sayHi($name)
{
    return "Hi $name !";
}


function ourCustomCallBack($fun, $name)
{
    return $fun($name);
}


echo ourCustomCallBack("sayHello", 'Shahin');

echo "<br><br>";
echo ourCustomCallBack("sayHi", 'Shahin');

echo "<br><br>";
$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);

var_dump($age);
echo "<br><br>";
json_encode($age);
var_dump($age);

echo "<br><br>";
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';


print_r($jsonobj);
echo "<br><br>";
$data = json_decode($jsonobj);

print_r($data);

echo "<br><br>";

$encodeData = json_encode($data);

print_r($encodeData);


echo "<br><br>";


function divide($dividend, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("custom Exception");
    }
    return $dividend / $divisor;
}

echo divide(5, 0);
