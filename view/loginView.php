<html>
    <head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="login.php" method="POST">
                <h1>Log In</h1>
                
                <label><b>User Name</b></label>
                <input type="text" placeholder="Username" name="username" required>

                <label><b>Password</b></label>
                <input type="password" placeholder="Password" name="password" required>

                <input type="submit" id='submit' value='LOGIN' > 

                <?php 
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Wrong username or password</p>";
                }
                ?>
            </form>
        </div>
    </body>
</html>