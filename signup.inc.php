<?php

if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $mail=$_POST["uid"];
    $username=$_POST["email"];
    $pwd=$_POST["pwd"];
    $pwdRepeat=$_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup()!==false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }

}else{
    header("location: ../signup.php");
    exit();
}