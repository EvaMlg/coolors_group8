<?php
//file that holds all our functions - they are not being CALLED here, just CREATED

//function to check if all the fields have been filled
//if the input is EMPTY, $result will be TRUE (because we are checking for mistakes)
function emptyInputSignup($name, $username, $email, $pwd, $pwdRepeat){
    $result;
    if(empty($name)||empty($username)||empty($email)||empty($pwd)||empty($pwdRepeat)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

//function to check if the username uses characters between a-z AND A-Z AND 0-9
//! = not, so: if there is NOT a match with these characters, $result will be TRUE (because we are checking for mistakes)
function invalidUid($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

//function to check if the email is really an email
//filter_var = built-in method to check for certain filters
//FILTER_VALIDATE_EMAIL = built-in method to check if an email address is really an email address
//! = not, so: if the email is NOT correct, $result will be TRUE
function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

//function to check that password = repeat password
//if they are NOT the same, $result will be TRUE (because we are checking for errors)
function pwdMatch($pwd, $pwdrepeat){
    $result;
    if ($pwd!==$pwdrepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

// //FUNCTIONS WHERE WE CONNECT TO DATABASE

//function to see if username & email already exists:
function uidExist($conn, $username, $email){
    //1.connect to database using a SQL STATEMENT & select * (= all) from users (our dB)
    //SO it is checking in our database if this input already exists
    $sql = "SELECT * FROM users WHERE usersUid = '$username' OR usersEmail = '$email';";

    //2.initialize a new prepared statement: this is a security measure - some explanation: this makes sure that the user can't ruin our code by putting in code in the formulaire 
    $stmt = mysqli_stmt_init($conn);

    //3.checking for errors
    //in coding, it is often more useful to check for FAILING then for SUCCEEDING - IF the statement fails (there is an error), send user to start page
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    } 

    //4.if it doesnt fail: run the function
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);          //""=input will be a string (text) - s s = two strings (email & uid)
    //binds the parameters to the statement
    mysqli_stmt_execute($stmt);                                     //executes the statement

    //5.fetching the data as an associative array
    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData)){                     //if we get data from database: return as true - if not, return as false
    return $row;                                                    //return all the data from the user if the user already exists                                                                                                    //!this function will also be used for the login! 
    }
    else{
        $result=false;
        return $result;
    }
    mysqli_stmt_close($stmt);
    
}

//function to actually create user
function createUser($conn, $name, $email, $username, $pwd){
    //1.connect to database & push the info inside - the ? are placeholders bc it will be what the user inserts
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES ('$name', '$email', '$username', '$pwd');";
    mysqli_query($conn,$sql);
    //2.initialize a new prepared statement: this is a security measure
    $stmt = mysqli_stmt_init($conn);
    //3.checking for errors
    if(!mysqli_stmt_prepare($sql,$stmt)){
        header("location: ../signup.php?error=stmtfailed");
    }

    var_dump($name, $email, $username, $pwd);
    //hashing the password! this is a security measure
    //password_hash() is a built in php method - "rehashes" the pw into random string of letters & numbers
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    //4.if it doesnt fail: run the function
    // ""=input will be a string (text) - s s s  = four strings
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    // when sign up is complete: return to home page
    header("location:..signup.php?error=none");
}
