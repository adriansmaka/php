<?php
if ($_GET) {
    $name = $_GET["name"];
    $surname = $_GET["surname"];
    if (empty($name) or empty($surname)) {
        header('location: uppgift01.html');
    } else {
        echo "Hello $name $surname";
    }
} else {
    header('location: uppgift01.html');
}
?>