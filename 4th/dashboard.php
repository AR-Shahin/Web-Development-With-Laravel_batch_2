<?php
session_start();

if (!$_SESSION['email'] && !$_SESSION['auth']) {
    //header('location: ./index.php');
    header('location: ./session_set.php');
}

echo "DashBoard<br>";


?>
<a href="./logout.php">Logout</a>
