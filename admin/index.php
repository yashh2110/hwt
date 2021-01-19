<?php
  session_start();
  include "dbconn.php";
  // if(isset($_SESSION["id"])){
  if(!$conn){
    die(mysqli_connect_error());
  }
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <?php include "./components/links.php" ?>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/sidebar.css">
    <title>Admin Panel | Human Welfare Trust Delhi</title>
  </head>
  <body class="bg-light">
      <?php include "./components/navbar.php" ?>
      <?php include "./components/sidebar.php" ?>
      <div id="main" class="main">

      </div>
     <?php include "./components/scripts.php" ?>
     <script src="./js/index.js"></script>
  </body>
</html>
