<?php require 'functions.php';  

if(!empty($_POST)){
    $errors = array();

    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Pseudo non-valide";
    }

    debug($errors)

    if(empty($_POST['email']) || ! !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $errors['email'] = "Email non-valide";
    }

    debug($errors)

    if(empty($_POST['password']) || $_POST['password'] != $_POST['password_confirm']){
        $errors['email'] = "Mot de passe non-valide";
    }

    debug($errors)

}

if (empty($errors)){

require_once 'db.php'
$req = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?")
$req->execute([$_POST]['username'], $_POST['password'], $_POST[email]])

?> 

<form action="" method="POST">

<label for="">Pseudo</label>
    <input type="text" name="username" class="form-control"/>
