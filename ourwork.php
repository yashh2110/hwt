  <?php 
    session_start();
    include "dbconn.php";
  ?>
  <html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <?php include "./components/links.php" ?>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/ourwork.css">

    <style media="screen">
      #ourwork{
        border-bottom: 4px solid rgb(211,8,8);
      }
    </style>
    <title>About Us | Human Welfare Trust Delhi</title>
  </head>
  <body>
    <?php include "./components/navbar.php" ?>
    <section data-aos="fade-down" data-aos-duration="1000" class="background" style="background-image: url('./images/pic5.jpg')">
    <div class="darkbg">
    <div class="about-cap">
        <h3 data-aos="fade-right" data-aos-delay="500" class="text-white text-center d-block">We Are Doing Our Best To <b class="text-success">Support Poor</b>.</h3>
        <h3 data-aos="fade-right" data-aos-delay="700" class="text-white text-center d-block"> With Your <b class="text-success">Help</b> We Can Do More For Them</h3>
      </div>
    </div>
    </section>
    <div class="container-fluid-sm pl-5 pr-5 our-work">
      <p class="headings text-center "><span style="color:rgb(211,8,8)">Our</span> Work</p>
      <p data-aos="fade-up"  class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit, minima laborum! Inventore provident ullam quisquam voluptate expedita, nesciunt, dicta, soluta eveniet voluptates molestias ducimus suscipit ratione corrupti! Assumenda, earum voluptate.</p>
    </div>
    <div class="container-fluid-sm ourworks">
    <?php 
      $sql="SELECT w_id,w_img,w_title,w_story from work order by w_id desc limit 0,10";
      $res = mysqli_query($conn,$sql);
      if(mysqli_num_rows($res)>0){
        while($data=mysqli_fetch_assoc($res)){
    ?>
          <div class="workcard" style="background-image: url('./admin/workimg/<?php echo $data['w_img'] ?>');">
            <div class="workcard-info 
            <?php if($data['w_id']%2==0){
              echo "workcard-info-1";
            }else{
              echo "workcard-info-2";
            }
              ?>">
              <div class="workcard-data">
                <p class="text-white text-center" style="font-weight:700;font-size:1.7em"><?php echo $data['w_title'] ?></p>
                <p class="text-white text-center" style="font-weight:500;font-size:1.3em"><?php echo $data['w_story'] ?></p>
              </div>
            </div>
          </div>
      <?php   
        }
      } 
      ?>
    </div>
    <?php include "./components/footer.php"?>
    <?php include "./components/scripts.php" ?>

  </body>
</html>
