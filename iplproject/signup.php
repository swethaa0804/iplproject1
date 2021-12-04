<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST" action="insert.php ">
            <label">First Name</label>
            <input type="text" placeholder="" name="FirstName">
            <label">Last Name</label>
            <input type="text" placeholder="" name="LastName">
            <label">Email</label>
            <input type="email" placeholder="" name="Email">
            <label">Password</label>
            <input type="password" placeholder="" name="Password">
            <label">Confirm Password</label>
            <input type="password" placeholder="" name="ConfirmPassword">
            <button id="button">Submit</button>
        </form>
        <p>By clicking the Sign Up button,you agree to our <br>
        <a href="#">Terms and Condition</a> and <a href="#">Policy and Privacy</a>
        
        
        </p>
    </div>
    <p class="para-2">Already have an account? <a href="login.html">Login here</a></p>
</body>
</html>