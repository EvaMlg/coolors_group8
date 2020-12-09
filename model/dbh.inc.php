<?php

//this file is going to connect us to the database

$serverName="localhost";
//default name given by phpmyadmin
$dBUsername="root";
//default name given by phphmyadmin
$dBPassword="";
//password is by default empty when using Xamp
$dBName="userdb";
//name that I gave to the db

//making the connection
$conn=mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

//what happens if the connection fails
if (!$conn){
    //'die' is like 'exit' - it stops the function - between () is the message that the users will see - the mysqili_connect_error() will show what the error is/what went wrong
    die("Connection failed:" . mysqli_connect_error());
}
