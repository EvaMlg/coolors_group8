<?php
include_once 'header.php';
?>

    <section class="signup-form">
        <h2>Sign up</h2>
        <form action="signup.inc.php" method="post">
            <input type="text" name="name" placeholder="full name"><br>  
            <input type="text" name="uid" placeholder="username"><br>
            <input type="text" name="email" placeholder="you e-mail address"><br>
            <input type="pwd" name="pwd" placeholder="password"><br>
            <input type="pwdrepeat" name="pwdrepeat" placeholder="repeat password"><br>
            <button type="submit" name="submit">SIGN UP</button>
        </form>
    </section>
<?php
include_once 'footer.php';
?>