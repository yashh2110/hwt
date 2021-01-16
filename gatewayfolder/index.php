<?php
require('../dbconn.php');
require_once('./config.php');
include('./Razorpay.php');

use Razorpay\Api\Api;
$api = new Api($razor_pay_key_id, $secret_key); //enter your test key credentials here
$payment = $api->payment->fetch($_REQUEST['razorpay_payment_id']); //post variable in index.php checkout.js
$text =  json_encode($payment->toArray());
$payment_id = $payment->id;
$name=$_POST["d_name"];
$number = $_POST['d_number'];
$mail  = $_POST['d_mail'];
$country=$_POST['d_country'];
$city=$_POST['d_city'];
$address=$_POST['d_address'];
$currency= $payment->currency;
$Amount    = $_POST["d_amount"];
$payment_method = $payment->method;
$created_date = date('Y-m-d',$payment->created_at);

if(!$conn){
  echo mysqli_connect_error();
  die;
}
$stmt=mysqli_stmt_init($conn);
$sql="INSERT INTO donations(d_payment_id,d_name,d_mail,d_number,d_amount,d_payment_method,d_country,d_city,d_address,d_crncy,d_payment_date) values(?,?,?,?,?,?,?,?,?,?,?)";
if(mysqli_stmt_prepare($stmt,$sql)){
  if(mysqli_stmt_bind_param($stmt,"sssssssssss",$payment_id,$name,$mail,$number,$Amount,$payment_method,$country,$city,$address,$currency,$created_date)){
    if(mysqli_stmt_execute($stmt)){
      echo "success";
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
