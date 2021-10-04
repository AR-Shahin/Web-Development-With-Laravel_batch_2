<?php
$GLOBALS['x'] = 10;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_REQUEST['name']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}

// echo $_GET['query'];
function test_input($data)
{
    return $data;
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
