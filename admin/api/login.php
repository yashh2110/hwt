<?php 
    session_start();
    include "../dbconn.php";
    echo $pass;
    if(!$conn) throw mysqli_connect_error();
    $username =mysqli_real_escape_string($conn,$_POST['username']);
    $password =mysqli_real_escape_string($conn,$_POST['password']);
    $sql="SELECT user,password,email from users where user='$username'";
    $res=mysqli_query($conn,$sql);
    if(mysqli_num_rows($res)>0){
        if($row=mysqli_fetch_assoc($res)){
            if(password_verify($password,$row['password'])){
                $_SESSION['user']=$row['user'];
                $_SESSION['email']=$row['email'];
                echo json_encode(array("status" =>200));

            }else{
                 echo json_encode(array("status" =>202));
            }
        }
    }else{
        echo json_encode(array("status" =>201));
    }

?>