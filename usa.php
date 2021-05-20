<?php

session_start();

if(!isset($_SESSION['username'])){
    header("location:app.php");
}

?>

<?php include "database.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}
		.alb {
			width: 600px;
			height: 400px;
			padding: 5px;
		}
		.alb img {
			width: 90%;
			height: 90%;
			border-radius: 5px;
			transition: all 1s ease;
			object-fit: cover;
			cursor: pointer;
		}

		.alb img:hover{
			width: 100%;
			height: 100%;
			transition: all 1s ease-out;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="index.php">&#8592;</a>
     <?php 
          $sql = "SELECT * FROM upload ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image']?>">
             </div>
          		
    <?php } }?>
</body>
</html>