<?php

if(isset($_POST['submit']) && isset($_FILES['my_image'])){
    include "database.php";
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if($error === 0){
        if($img_size > 1230000){
            $em = "Sorry!, your file is too large";
            header("location:index.php?erroe=$em");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_ls = strtolower($img_ex );
            $allowed_ex = array("png", "jpg", "jpeg");

            if(in_array($img_ex_ls,$allowed_ex)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_ls;
                $img_uploaded_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_uploaded_path);

                //INSERT INTO DATABASE
                $sql = "INSERT INTO upload(image)VALUES('$new_img_name')";
                mysqli_query($conn,$sql);
                header("location: usa.php");
            }else{
                $em = "You can't upload file of this type";
                header("location:index.php?erroe=$em");
            }
        }
    }else{
        $em = "unknown issue occurred!";
        header("location:index.php?erroe=$em");

    }
}else{
    header("location:index.php");
}


if(isset($_POST['send1']) && isset($_FILES['my_image'])){
    include "database.php";
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if($error === 0){
        if($img_size > 1230000){
            $em = "Sorry!, your file is too large";
            header("location:index.php?erroe=$em");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_ls = strtolower($img_ex );
            $allowed_ex = array("png", "jpg", "jpeg");

            if(in_array($img_ex_ls,$allowed_ex)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_ls;
                $img_uploaded_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_uploaded_path);

                //INSERT INTO DATABASE
                $sql = "INSERT INTO china(image)VALUES('$new_img_name')";
                mysqli_query($conn,$sql);
                header("location: china.php");
            }else{
                $em = "You can't upload file of this type";
                header("location:index.php?erroe=$em");
            }
        }
    }else{
        $em = "unknown issue occurred!";
        header("location:index.php?erroe=$em");

    }
}else{
    header("location:index.php");
}


if(isset($_POST['send2']) && isset($_FILES['my_image'])){
    include "database.php";
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if($error === 0){
        if($img_size > 1230000){
            $em = "Sorry!, your file is too large";
            header("location:index.php?erroe=$em");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_ls = strtolower($img_ex );
            $allowed_ex = array("png", "jpg", "jpeg");

            if(in_array($img_ex_ls,$allowed_ex)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_ls;
                $img_uploaded_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_uploaded_path);

                //INSERT INTO DATABASE
                $sql = "INSERT INTO russia(image)VALUES('$new_img_name')";
                mysqli_query($conn,$sql);
                header("location: russia.php");
            }else{
                $em = "You can't upload file of this type";
                header("location:index.php?erroe=$em");
            }
        }
    }else{
        $em = "unknown issue occurred!";
        header("location:index.php?erroe=$em");

    }
}else{
    header("location:index.php");
}

if(isset($_POST['send3']) && isset($_FILES['my_image'])){
    include "database.php";
    echo "<pre>";
    print_r($_FILES['my_image']);
    echo "</pre>";

    $img_name = $_FILES['my_image']['name'];
    $img_size = $_FILES['my_image']['size'];
    $tmp_name = $_FILES['my_image']['tmp_name'];
    $error = $_FILES['my_image']['error'];

    if($error === 0){
        if($img_size > 1230000){
            $em = "Sorry!, your file is too large";
            header("location:index.php?erroe=$em");
        }else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_ls = strtolower($img_ex );
            $allowed_ex = array("png", "jpg", "jpeg");

            if(in_array($img_ex_ls,$allowed_ex)){
                $new_img_name = uniqid("IMG-",true).'.'.$img_ex_ls;
                $img_uploaded_path = 'uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_uploaded_path);

                //INSERT INTO DATABASE
                $sql = "INSERT INTO french(image)VALUES('$new_img_name')";
                mysqli_query($conn,$sql);
                header("location: french.php");
            }else{
                $em = "You can't upload file of this type";
                header("location:index.php?erroe=$em");
            }
        }
    }else{
        $em = "unknown issue occurred!";
        header("location:index.php?erroe=$em");

    }
}else{
    header("location:index.php");
}
