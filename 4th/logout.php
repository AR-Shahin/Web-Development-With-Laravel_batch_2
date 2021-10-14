<?php

session_start();

if ($_SESSION['email'] && $_SESSION['auth']) {
    unset($_SESSION['email']);
    unset($_SESSION['auth']);
    header('location: ./session_set.php');
}
