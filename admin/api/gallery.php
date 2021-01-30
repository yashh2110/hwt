<?php
    session_start();
    include "../dbconn.php";
    if(!$conn){
        echo mysqli_connect_error();
    }
    if(isset($_FILES['files']) && !empty($_FILES['files'])){ 
        $count=count($_FILES['files']['name']);
        for($i=0;$i<$count;$i++){
            $g_img=$_FILES['files'];
            $img_name=$g_img['name'][$i];
            $tmp_name=$g_img['tmp_name'][$i];
            $error=$g_img['error'][$i];
            $size=$g_img['size'][$i];
            $extension=explode('.',$img_name);
            $extension=strtolower(end($extension));
            $newname=uniqid("",true).".".$extension;
            $file_destination="../galleryimg/".$newname;
            $stmt=mysqli_stmt_init($conn);
            $sql="INSERT INTO gallery (g_img) values(?)";
            if(mysqli_stmt_prepare($stmt,$sql)){
                if(mysqli_stmt_bind_param($stmt,"s",$newname)){
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
        }
    }else{
        echo mysqli_error($conn);

    }

?>