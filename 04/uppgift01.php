<?php
if ($_GET) {
    $name = $_GET["name"];
    $surname = $_GET["surname"];

    //echo "Welcome, " .$_GET["name"] ." " .$_GET["surname"];
    $valerr = "Please input your ";
    if (empty($name) or empty($surname)) {
        header('location: uppgift01.html');
    } else {
        echo "Hello $name $surname";
    }
} else {
    header('location: uppgift01.html');
}
?>