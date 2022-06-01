<?php

$mysqli = new mysqli("localhost", "root", "hemligt", "projekt");

if ($mysqli->connect_error) {
    die("Connect error: " . $mysqli->connect_error);
}/*  else {
    echo("Connected successfully ");
} */


$mysqli->set_charset("utf8");

?>