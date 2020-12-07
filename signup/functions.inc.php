<?php

function emptyInputSignup($name, $uid, $email, $pwd, $pwdrepeat){
    $result;
    if(empty($name)||empty($uid)||empty($email)||empty($pwd)||empty($pwdrepeat)){
        $result==true;
    }
    else{
        $result==false;
    }
    return $result;
}

function invalidUid($uid){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/")){
        $result==true;
    }
    else{
        $result==false;
    }
    return $result;
}

function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result==true;
    }
    else{
        $result==false;
    }
    return $result;
}
function pwdMatch($pwd, $pwdrepeat){
    $result;
    if ($pwd!==$pwdrepeat){
        $result==true;
    }
    else{
        $result==false;
    }
    return $result;
}

//to see if username & email already exists:
function uidExist($conn, $username, $email){
    //1.connect to database
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    //2.initialize a new prepared statement: this is a security measure
    //some explanation: this makes sure that the user can't ruin our code by putting in code in the formulaire
    $stmt = mysqli_stmt_init($conn);
    //3.checking for errors
    //in coding, its more useful to check for FAILING then for SUCCEEDING
    //IF the statement fails (there is an error), send user to start page
    if(!mysqli_stmt_prepare($sql,$stmt)){
        header("location: ../signup.php?error=stmtfailed");
    }
    //4.if it doesnt fail: run the function
    //""=input will be a string (text) - s s = two strings (email & uid)
    msqli_stmt_bind_param($stmt, "ss", $username, $email);
    msqli_stmt_execute($stmt);

    //5.fetching the data as an associated array
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){
    //if we get data from database: return as true - if not, return as false
    return $row;
    //return all the data from the user if the user already exists
    //!this function will also be used for the login! 
    }
    else{
        $return=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
    
}

//actually create user
function createUser($conn, $name, $email, $username, $pwd){
    //1.connect to database & push the info inside - the ? are placeholders bc it will be what the user inserts
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?);";
    //2.initialize a new prepared statement: this is a security measure
    $stmt = mysqli_stmt_init($conn);
    //3.checking for errors
    if(!mysqli_stmt_prepare($sql,$stmt)){
        header("location: ../signup.php?error=stmtfailed");
    }

    //hashing the password! this is a security measure
    //password_hash() is a built in php method
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    //4.if it doesnt fail: run the function
    //""=input will be a string (text) - s s s  = four strings
    msqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    msqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    //when sign up is complete: return to home page
    header("location:..signup.php?error=none");
    
}