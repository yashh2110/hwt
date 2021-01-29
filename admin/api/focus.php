<?php
    session_start();
    include "../dbconn.php";
    if(!$conn){
        echo mysqli_connect_error();
    }
    $f_title=mysqli_real_escape_string($conn,$_POST['focus_title']);
    $f_story = mysqli_real_escape_string($conn,$_POST['focus_story']);
    $f_img=$_FILES['focus_img'];
    $img_name=$f_img['name'];
    $tmp_name=$f_img['tmp_name'];
    $error=$f_img['error'];
    $size=$f_img['size'];
    $extension=explode('.',$img_name);
    $extension=strtolower(end($extension));
    $newname=uniqid("",true).".".$extension;
    $file_destination="../focusimg/".$newname;
    $stmt=mysqli_stmt_init($conn);
    $sql="INSERT INTO focus (f_img,f_title,f_story) values(?,?,?)";
    if(mysqli_stmt_prepare($stmt,$sql)){
        if(mysqli_stmt_bind_param($stmt,"sss",$newname,$f_title,$f_story)){
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