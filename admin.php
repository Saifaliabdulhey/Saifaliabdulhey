<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload images</title>
    <style>
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;

    }
    
    </style>
</head>
<body>
<h1>HERE WHERE YOU CABABLE OF UPLOAD YOUR IMAGES INSIDE DATABASE</h1>
<?php if(isset($_GET['error'])): ?>
<p><?php echo $_GET['error']; ?></p>
<?php endif ?> 

    <form action="upload.php" style="margin: 12px; font-size:20px;" method="POST" enctype="multipart/form-data">
   U.S.A : <input type="file" name="my_image" required>
    <input type="submit" name="submit" value="upload">
    
    </form>
<?php if(isset($_GET['error'])): ?>
<p><?php echo $_GET['error']; ?></p>
<?php endif ?> 

    <form action="upload.php" style="font-size:20px;" method="POST" enctype="multipart/form-data">
   CHINA : <input type="file" name="my_image" required>
    <input type="submit" name="send1" value="upload">
    
    </form>
<?php if(isset($_GET['error'])): ?>
<p><?php echo $_GET['error']; ?></p>
<?php endif ?> 

    <form action="upload.php" style="margin: 12px; font-size:20px;" method="POST" enctype="multipart/form-data">
  RUSSIA :  <input type="file" name="my_image" required>
    <input type="submit" name="send2" value="upload">
    
    </form>
<?php if(isset($_GET['error'])): ?>
<p><?php echo $_GET['error']; ?></p>
<?php endif ?> 

    <form action="upload.php" style="font-size:20px;" method="POST" enctype="multipart/form-data">
   FRENCH : <input type="file" name="my_image" required>
    <input type="submit" name="send3" value="upload">
    
    </form>
</body>
</html>