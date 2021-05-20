<?php
require "config.php";

error_reporting(0);
session_start();
if(isset($_SESSION['username'])){
    header("location:index.php");
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if($password == $cpassword){

        $sql1 = ("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $result1 =mysqli_query($conn, $sql1);
        if(mysqli_num_rows($result1)>0){
            echo "<script>alert('Email is already Exists')</script>";
        }else{
                    $sql = ("INSERT INTO users (username, email, password) VALUES('$username', '$email', '$password')");
        $result = mysqli_query($conn,$sql);
        if($sql){
            echo "<script>alert('User Register successfully')</script>";
            $username ="";
            $email = "";
            $_POST['password'] ="";
            $_POST['cpassword']="";
        }else{
            echo "<script>alert('Something went wrong')</script>";
        }
        }

    }else{
        echo "<script>alert('password is not matched')</script>";
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
    <title>Register</title>
</head>
<body>

    <div class="container">
        <p class="login-text" style="font-size: 2rem; font-weight:800;">Register</p>
        <form action="" method="POST" class="login-email">
            <p class="login-text">Registeration Down</p>
            <div class="input-group">
                <input type="text" placeholder="username" name="username" value="<?php echo $username;?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="email" name="email" value="<?php echo $email;?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="password" name="password" value="<?php echo $_POST['password'];?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm password" name="cpassword" value="<?php echo $_POST['cpassword'];?>" required>
            </div>
            <div class="login-group">
                <button name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Have an account?<a href="index.php">Login Here</a></p>
            
        </form>
    </div>
    
</body>
</html>