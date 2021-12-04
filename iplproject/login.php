<!DOCTYPE html>
<?php
       session_start();
        if(isset($_SESSION['email'])){
            header('location: userhome.php');
            alert('already logged in.');
        }
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-box">
        <h1>Login</h1>
        <form class="container" method="POST" action="select.php">
            <label">Email</label>
            <input type="email" placeholder="" name="email">
            <label">Password</label>
            <input type="password" placeholder="" name="password">
            <button id="button">Submit</button>
        </form>
    </div>
    <p class="para-2">Not have an account? <a href="signup.php">Sign Up Here</a><br>
            <?php 
            if(isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            }
        ?>
    </p>
    
</body>
</html>