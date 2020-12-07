<?php

//this file is going to connect us to the database

$serverName="localhost";
//^because i'm using a local server
$dBUsername="root";
$dBPassword="";
//password is by deafult empty when using Xamp
$dBName="userdb";
//name that i gave to local db on phpAdmin

$conn=mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

//what happens if the connection fails
if (!$conn){
    //'die' is like 'exit' - it stops the function - between () is the message that the users will see - the mysqili_connect_error() will show what the error is/what went wrong
    die("Connection failed:" . mysqili_connect_error());
}