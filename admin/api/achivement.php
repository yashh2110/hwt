<?php
    session_start();
    include "../dbconn.php";
    if(!$conn){
        echo mysqli_connect_error();
    }
    $a_title=mysqli_real_escape_string($conn,$_POST['achivements_title']);
    $a_story = mysqli_real_escape_string($conn,$_POST['achivements_story']);
    $a_img=$_FILES['achivements_img'];
    $img_name=$a_img['name'];
    $tmp_name=$a_img['tmp_name'];
    $error=$a_img['error'];
    $size=$a_img['size'];
    $extension=explode('.',$img_name);
    $extension=strtolower(end($extension));
    $newname=uniqid("",true).".".$extension;
    $file_destination="../achivementimg/".$newname;
    $stmt=mysqli_stmt_init($conn);
    $sql="INSERT INTO achivements (a_img,a_title,a_story) values(?,?,?)";
    if(mysqli_stmt_prepare($stmt,$sql)){
        if(mysqli_stmt_bind_param($stmt,"sss",$newname,$a_title,$a_story)){
            if(mysqli_stmt_execute($stmt)){
                move_uploaded_file($tmp_name,$file_destination);
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