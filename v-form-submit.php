<?php
  session_start();
  include_once "dbconn.php";
  $name=mysqli_real_escape_string($conn,$_POST['v-name']);
  $email=mysqli_real_escape_string($conn,$_POST['v-mail']);
  $number=mysqli_real_escape_string($conn,$_POST['v-number']);
  $gender=mysqli_real_escape_string($conn,$_POST['v-gender']);
  $address=mysqli_real_escape_string($conn,$_POST['v-address']);
  $stmt=mysqli_stmt_init($conn);
  $sql="INSERT INTO v_forms (name,email,number,gender,address) values(?,?,?,?,?)";
  if(mysqli_stmt_prepare($stmt,$sql)){
    if(mysqli_stmt_bind_param($stmt,"sssss",$name,$email,$number,$gender,$address)){
      if(mysqli_stmt_execute($stmt)){
        echo "success";
      }else{
        echo mysqli_error($conn);
      }
    }else{
      echo "error in bind params";
    }
  }else{
    echo mysqli_error($conn);

  }

 ?>
