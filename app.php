<?php
include "config.php";
error_reporting(0);
session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
}
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn,$sql);
    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("location:index.php");
    }else{
        echo "<script>alert('Email or Password is Wrong!')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <title>Login</title>
</head>
<body>

    <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight:800;">Login</p>
        <form action="" method="POST" class="login-email">
            <p class="login-text">Login with email</p>
            <div class="input-group">
                <input type="email" placeholder="email" name="email" value="<?php echo $email;?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" <?php echo $_POST['password'];?> required>
            </div>
            <div class="login-group">
                <button name="submit" class="btn">Login</button>
                <p class="login-register-text">Don't have an account?<a href="register.php">Register Here</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>