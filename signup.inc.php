<?php

if(isset($_POST["submit"])){
    
    $name=$_POST["name"];
    $mail=$_POST["uid"];
    $username=$_POST["email"];
    $pwd=$_POST["pwd"];
    $pwdRepeat=$_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $uid, $email, $pwd, $pwdrepeat)!==false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($uid)!==false){
        header("location: ../signup.php?error=invaliduid");
        exit();
    }
    if(invalidEmail($email)!==false){
        header("location: ../signup.php?error=invalidemail");
        exit();
    }
    if(pwdMatch($pwd, $pwdrepeat)!==false){
        header("location: ../signup.php?error=differentpasswords");
        exit();
    }
    if(uidTaken($conn, $uid, $email)!==false){
        header("location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

    // // else{
    // //     header("location: ../signup.php");
    // //     exit();
    // // }
}




