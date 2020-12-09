<?php

//in this file, the functions that we created in functions.inc.php are being called
//when the user submits the data (= 'when submit is set')

if(isset($_POST["submit"])){
    
    $name=$_POST["name"];
    $username=$_POST["uid"];
    $email=$_POST["email"];
    $pwd=$_POST["pwd"];
    $pwdRepeat=$_POST["pwdrepeat"];

    //link to other files in same folder
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    //ERROR HANDLERS: you can add as many as you want - checks for errors & defines what shoudl happen when we run into them
    if(emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat)!==false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($username)!==false){
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email)!==false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdRepeat)!==false){
        header("location: ../signup.php?error=differentpasswords");
        exit();
    }
    if (uidExist($conn, $username, $email)!==false){
        header("location: ../signup.php?error=userexists");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
}
    else{
        header("location: ../signup.php");
        exit();
    }





