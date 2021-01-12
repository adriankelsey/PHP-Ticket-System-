<?php

$servername = "127.0.0.1";
$dbUsername = "root";
$dbPassowrd = "";
$dbName = "ticket-system";

$conn = mysqli_connect($servername, $dbUsername, $dbPassowrd, $dbName);

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
}