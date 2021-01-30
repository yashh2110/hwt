<?php
    session_start();
    include "../dbconn.php";
    if(!$conn){
        echo mysqli_connect_error();
    }
    $w_title=mysqli_real_escape_string($conn,$_POST['work_title']);
    $w_story = mysqli_real_escape_string($conn,$_POST['work_story']);
    $w_img=$_FILES['work_img'];
    $img_name=$w_img['name'];
    $tmp_name=$w_img['tmp_name'];
    $error=$w_img['error'];
    $size=$w_img['size'];
    $extension=explode('.',$img_name);
    $extension=strtolower(end($extension));
    $newname=uniqid("",true).".".$extension;
    $wile_destination="../workimg/".$newname;
    $stmt=mysqli_stmt_init($conn);
    $sql="INSERT INTO work (w_img,w_title,w_story) values(?,?,?)";
    if(mysqli_stmt_prepare($stmt,$sql)){
        if(mysqli_stmt_bind_param($stmt,"sss",$newname,$w_title,$w_story)){
            if(mysqli_stmt_execute($stmt)){
                move_uploaded_file($tmp_name,$wile_destination);
                echo "data uploded";
            }else{
                echo mysqli_error($conn);
            }
        }else{
            echo mysqli_error($conn);
        }
    }else{
        echo mysqli_error($conn);
    }
?>