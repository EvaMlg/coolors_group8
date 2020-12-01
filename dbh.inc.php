<?php

$serverName="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="userDB";

$conn=mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if (!$conn){
    die("Connection failer:" . mysqli_connect_error())
}