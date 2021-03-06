<?php
  session_start();
  include "./dbconn.php";
  if(!$conn){
    alert(mysqli_connect_error());
  }

?>

<html>
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <?php include "./components/links.php" ?>
  <link rel="stylesheet" href="./css/nav.css">
  <link rel="stylesheet" href="./css/index.css">
  <title>Best Human Welfare NGO In India | Human Welfare Trust India</title>
</head>
<body class="bg-light" id="scroll">
<?php include "./components/navbar.php" ?>
<!-- head carousel -->
<div  data-aos="fade-down" data-aos-duration="1000"  class="carousel slide " id="maincarousel"  data-ride="carousel" data-duration="1000" data-interval="6000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <section class="background" style="background-image: url('./images/pic2.jpeg')">
                <div data-aos="fade-left" data-aos-delay="500" class="cap">
                  <i class="fas fa-quote-left text-warning quta"></i>
                  <h3 class="bg-white ">Together We Can <b class="text-success">Help</b> The Poor For Their Better Lifes</h3>
                </div>
            </section>
        </div>
        <div class="carousel-item">
            <section class="background" style="background-image: url('./images/pic1.jpg')">
                <div class="cap">
                  <i class="fas fa-quote-left text-warning quta"></i>
                  <h3 class="bg-white ">Together We Can <b class="text-success">Help</b> The Poor For Their Better Lifes</h3>
                </div>
            </section>
        </div>
        <div class="carousel-item">
            <section class="background" style="background-image: url('./images/pic5.jpg')">
                <div class="cap">
                  <i class="fas fa-quote-left text-warning quta"></i>
                  <h3 class="bg-white ">Together We Can <b class="text-success">Help</b> The Poor For Their Better Lifes</h3>
                </div>
            </section>
        </div>
    </div>
    <div class="carousel-indicators">
        <li data-target="#maincarousel" data-slide-to="0" class="active"></li>
        <li data-target="#maincarousel" data-slide-to="1" ></li>
        <!-- <li data-target="#maincarousel" data-slide-to="2" ></li> -->
    </div>
    <a class="carousel-control-prev" style="font-size:2.5em;" href="#maincarousel" data-slide="prev">
      <i class="fas fa-angle-left"></i>
    </a>
    <a class="carousel-control-next" style="font-size:2.5em;" href="#maincarousel" data-slide="next">
      <i class="fas fa-angle-right"></i>
    </a>
</div>
<!-- heading -->
<div class="bg-white">
<div class="container-sm  pt-3 mt-3">
    <h3 class="text-center headings" style="color:rgb(211, 8, 8);">HEADING</h3>
    <p class="text-center lg-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum pariatur nostrum nobis dolore magnam id omnis! Dolorum obcaecati quis ex necessitatibus corporis, modi ducimus nobis similique eligendi maiores, distinctio qui! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit odio voluptatem, accusantium expedita impedit quidem officiis accusamus? Doloribus magni sequi illo, aperiam aspernatur vero maiores totam ipsam veniam. Illum, fugit!</p>

  </div>
  <div class=" container-sm bg-white homeimg">
    <div class="flexwrap">
      <img data-aos="fade-left" data-aos-duration="750" class="homeimgitem" src="./images/pic1.jpg" alt="ngo">
      <p data-aos="fade-left" data-aos-duration="750" class="homeimgitem homeimgitem-text lg-text  ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae debitis ea ab,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eos temporibus nisi deserunt alias sed quod at quas, repellat, voluptatibus necessitatibus vel molestias saepe commodi minima perspiciatis debitis dolor voluptatum.</p>
    </div>
    <div class="rev-flexwrap">
      <p data-aos="fade-right" data-aos-duration="750" class="homeimgitem homeimgitem-text lg-text "> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vitae debitis ea ab,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit eos temporibus nisi deserunt alias sed quod at quas, repellat, voluptatibus necessitatibus vel molestias saepe commodi minima perspiciatis debitis dolor voluptatum.</p>
      <img data-aos="fade-right" data-aos-duration="750" class="homeimgitem"src="./images/pic2.png" alt="ngo">
    </div>

    <!-- <div data-aos="fade-up" data-aos-duration="750" class="d-block mt-3" style="width:100%;">
      <button type="button" class="btn btn-danger d-block ml-auto mr-auto">Learn More</button>
    </div> -->
</div>
</div>

<br>
<br>
<!-- donor data -->
<div data-aos="fade-up" data-aos-duration="750" class="container-sm info">
  <div>
  <i class="fas fa-hand-holding-heart "></i>
  <b id="donors" class="text-center d-block p-2 mr-1 text-dark">2K</b>
  <p class="text-center">donors<p>
  </div>
  <div>
  <i class="fas fa-hands-helping "></i>
  <b id="saved" class="text-center d-block p-2 mr-1 text-dark">1269</b>
  <p class="text-center">saved<p>
  </div>
  <div>
  <i class="fas fa-handshake "></i>
  <b id="no-volunteer" class="text-center d-block p-2 mr-1 text-dark">259</b>
  <p class="text-center">volunteers<p>
  </div>
  <div>
  <i class="fas fa-rupee-sign"></i>
  <b id="donated" class="text-center d-block p-2 mr-1 text-dark">40K</b>
  <p class="text-center">dontated<p>
  </div>

</div>
<br>
<br>
<br>
<!-- our focus -->
<div class="container-fluid-sm mt-5" style="position:relative">
  <div class="work">
    <div class="darkbg">
      <div class="container-fluid-sm workinner">
        <h3 class="text-center m-2 text-white headings">Our Focus</h3>

        <div class="owl-carousel owl-work owl-theme">
        <?php
          $sql="SELECT f_title,f_story,f_img from focus order by f_id desc limit 0,30";
          $res=mysqli_query($conn,$sql);
          if(mysqli_num_rows($res)>0){
            while($data=mysqli_fetch_assoc($res)){
        ?>
              <div class="">
                <div class="pc-carousel-imgdiv">
                  <div class="workitem-img" style="background-image: url('./admin/focusimg/<?php echo $data['f_img'] ?>')"></div>
                  <div class="workitem-info">
                    <p class="workitem-heading"><b><?php echo $data['f_title'] ?></b></p>
                    <p class="workitem-story"><?php echo $data['f_story'] ?></p>
                    <div class="workitem-btns">
                        <a class="workitem-readmorebtn" href="">Read More</a>
                        <a class="workitem-donatebtn" href="http://localhost/hwt/donate">Donate</a>
                    </div>
                  </div>
                </div>
              </div>
          <?php 
            }
          }
          ?>
        </div>
      <svg class="pc-carousel-left" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="27" cy="27" r="27" transform="rotate(180 27 27)" fill="white"/>
      <path d="M14.2929 26.2929C13.9024 26.6834 13.9024 27.3166 14.2929 27.7071L20.6569 34.0711C21.0474 34.4616 21.6805 34.4616 22.0711 34.0711C22.4616 33.6805 22.4616 33.0474 22.0711 32.6569L16.4142 27L22.0711 21.3431C22.4616 20.9526 22.4616 20.3195 22.0711 19.9289C21.6805 19.5384 21.0474 19.5384 20.6569 19.9289L14.2929 26.2929ZM39 26L15 26V28L39 28V26Z" fill="#D30808"/>
      </svg>
      <svg class="pc-carousel-right" width="54" height="54" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
      <circle cx="27" cy="27" r="27" fill="white"/>
      <path d="M39.7071 27.7071C40.0976 27.3166 40.0976 26.6834 39.7071 26.2929L33.3431 19.9289C32.9526 19.5384 32.3195 19.5384 31.9289 19.9289C31.5384 20.3195 31.5384 20.9526 31.9289 21.3431L37.5858 27L31.9289 32.6569C31.5384 33.0474 31.5384 33.6805 31.9289 34.0711C32.3195 34.4616 32.9526 34.4616 33.3431 34.0711L39.7071 27.7071ZM15 28L39 28V26L15 26V28Z" fill="#D30808"/>
      </svg>


    </div>
  </div>

</div>

<!-- achivements -->
<div class="container-fluid-sm bg-white achievments">
  <br>
<h3 class="text-center headings pt-2" style="color:rgb(211, 8, 8);">Our Achievments</h3>
    <div class="owl-carousel owl-achivement owl-theme">
    <?php
          $sql="SELECT a_title,a_story,a_img from achivements order by a_id desc limit 0,30";
          $res=mysqli_query($conn,$sql);
          if(mysqli_num_rows($res)>0){
            while($data=mysqli_fetch_assoc($res)){
        ?>
        <div class="item achievment-item" data-aos="fade-up"  style="background-image:url('./admin/achivementimg/<?php echo $data['a_img'] ?>')">
          <div class="darkbg-darker">
            <p class="achivement-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, et vero necessitatibus veniam minus cupiditate fuga esse quod accusamus, natus atque. Praesentium quos quae magnam illum enim dicta voluptatibus assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus, expedita! Provident quaerat veritatis sequi vero. Possimus voluptatem saepe doloribus optio fugiat quidem sapiente ullam tempora tenetur, molestias suscipit numquam id? Lorem ipsum dolor sit, amet consectetur adipisicing elit. Assumenda minima iste non facere modi quasi fugit exercitationem est animi tempore culpa quam libero magni corrupti, eaque obcaecati molestias tenetur incidunt.</p>
            <a href="" class="p-2 achievment-readmorebtn">Read More..</a>
          </div>
          <div class="achivement-about">
            <span style="font-size:1.3em;font-weight:600;color:rgb(211,8,8)" class="text-left"><?php echo $data['a_title'] ?></span>
            <p><?php echo $data['a_story'] ?></p>
          </div>
      </div>
      <?php 
            }
          }
      ?>
</div>
    <svg class="achievment-left" width="54" height="54" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="17.0004" cy="17" r="17" transform="rotate(-180 17.0004 17)" fill="#D30808"/>
    <path d="M9.64682 16.6465C9.45155 16.8417 9.45155 17.1583 9.64682 17.3536L12.8288 20.5355C13.0241 20.7308 13.3406 20.7308 13.5359 20.5355C13.7312 20.3403 13.7312 20.0237 13.5359 19.8284L10.7075 17L13.5359 14.1716C13.7312 13.9763 13.7312 13.6597 13.5359 13.4645C13.3406 13.2692 13.0241 13.2692 12.8288 13.4645L9.64682 16.6465ZM24.0004 16.5L10.0004 16.5V17.5L24.0004 17.5V16.5Z" fill="white"/>
    </svg>
    <svg class="achievment-right " width="54" height="54" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
    <circle cx="17" cy="17" r="17" fill="#D30808"/>
    <path d="M24.3536 17.3536C24.5488 17.1583 24.5488 16.8417 24.3536 16.6464L21.1716 13.4645C20.9763 13.2692 20.6597 13.2692 20.4645 13.4645C20.2692 13.6597 20.2692 13.9763 20.4645 14.1716L23.2929 17L20.4645 19.8284C20.2692 20.0237 20.2692 20.3403 20.4645 20.5355C20.6597 20.7308 20.9763 20.7308 21.1716 20.5355L24.3536 17.3536ZM10 17.5H24V16.5H10V17.5Z" fill="white"/>
    </svg>

  <!-- Indicators -->
</div>
<div id="volenteer-form" class="volenteer container-fluid-sm">
  <div class="darkbg"></div>
  <div class="volenteer-cap">
    <div class="text-center p-3 m-3">
      <p class="headings p-3 m-3">Let's Spread <span class="text-success">Smiles</span> In India!</p>
    </div>
  </div>
  <div  class="volenteer-form-div ">
    <form id="vform" class="form-group volenteer-form ml-auto mr-auto">
      <p class="headings text-white text-left">Become A <span style="color:rgb(211,8,8)">Volenteer</span> </p>
      <p class="mt-2 volenteer-mobile-cap">Let's Spread <span class="text-success">Smiles</span> In India!</p>
      <div class="inputdiv">
            <input class="inputf" id="v-name" type="text" name="v-name" required>
            <span class="text">Name</span>
      </div>
      <div class="inputdiv">
            <input class="inputf" id="v-mail" type="text" name="v-mail" required>
            <span class="text">Email</span>
      </div>
      <div class="inputdiv">
          <select name="v-gender" class="inputf" id="v-gender" required>
            <option value="" disabled selected></option>
            <option value="male" class="text-dark">Male</option>
            <option value="femail" class="text-dark">Female</option>
            <option value="other" class="text-dark">Other</option>
          </select>
          <span class="text">Gender</span>

      </div>
      <div class="inputdiv">
            <input class="inputf" id="v-number" type="number" name="v-number" required>
            <span class="text">Phone</span>
      </div>
      <div class="inputdiv">
            <textarea class="inputf" name="v-address" id="v-address" cols="8" rows="6" required></textarea>
            <span class="text">Address</span>
      </div>

      <button class="btn text-white mt-4" type="submit" id="vsubmitbtn" style="background-color:rgb(211,8,8);font-weight:500">Submit</button>
    </form>
  </div>
</div>
<?php include "./components/footer.php"?>
<script type="text/javascript">
$("#vform").submit(function(e){
  e.preventDefault();
  $.ajax({
    type:"POST",
    url:"http://localhost/hwt/v-form-submit.php",
    data:$("#vform").serialize(),
    success:function(res){
      alert(res);
      $("#vform")[0].reset();
    }
  })
})
</script>
<?php include "./components/scripts.php" ?>

</body>

</html>
