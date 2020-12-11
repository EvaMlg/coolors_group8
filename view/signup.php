<?php
include_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid p-4"> 
    <div class="row mb-5">
        <div class="col-md-6 col-lg-3 p-3 text-center">
            <div class="card p-3 text-center shadow-sm shadow-y">
                <section class="signup-form">
                    <h2>Sign up</h2>
                        <form action="signup.inc.php" method="post">
                            <input type="text" name="name" placeholder="full name">
                            <input type="text" name="uid" placeholder="username"><br>
                            <input type="text" name="email" placeholder="you e-mail address"><br>
                            <input type="password" name="pwd" placeholder="password"><br>
                            <input type="password" name="pwdrepeat" placeholder="repeat password"><br>
                            <button type="submit" name="submit">SIGN UP</button>
                        </form>
                 </section>
            </div>
        </div>
    </div>
</div>
</body>
</html>


    
<?php
include_once 'footer.php';
?>