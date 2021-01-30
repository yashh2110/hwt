<?php
  session_start();
  include "dbconn.php";
  // if(isset($_SESSION["id"])){
  if(!$conn){
    die(mysqli_connect_error());
  }
 ?>
 <div class="container-fluid-sm addinfo">
    <div class="ourfocus">
        <p class="text-center" style="font-weight: 500; font-size:1.3em ;line-height:15px; margin-bottom:25px"> OUR <span style="color:rgb(211,8,8)">FOCUS</span> </p>
        <form class="form-group" id="focus" enctype="multipart/form-data">
            <label for="focus_img" class="focus_lable img_display">
              <div class="focus_img_display">
                <img src="./images/image_rep.jpg" id="focus_imgholder" width="150" height="150" alt="img">
                <div class="darkbg focus_img_text img_text">
                 <p class="text-center">Upload Image</p> 
                </div>
              </div>
            </label>
            <input type="file" class="d-none mt-2"  value="" name="focus_img" id="focus_img" required>
            <input type="text" class=" mt-2 input_title" name="focus_title" id="focus_title" placeholder="Title" required>
            <textarea class=" mt-2" name="focus_story" id="focus_story" placeholder="Story" cols="30" rows="4" required></textarea>
            <button class="mt-2 d-block ml-auto mr-auto basicbtn" type="submit" id="f_btn">Post</button>
        </form>
    </div>
    <div class="ourwork">
        <p class="text-center" style="font-weight: 500; font-size:1.3em ;line-height:15px; margin-bottom:25px"> OUR <span style="color:rgb(211,8,8)">WORK</span> </p>
        <form class="form-group" enctype="multipart/form-data">
            <label for="work_img" class="work_lable img_display">
              <div class="work_img_display">
                <img src="./images/image_rep.jpg" id="work_imgholder" width="150" height="150" alt="img">
                <div class="darkbg work_img_text img_text">
                 <p class="text-center">Upload Image</p> 
                </div>
              </div>
            </label>
            <input type="file" class="d-none mt-2"  value="" name="work_img" id="work_img">
            <input type="text" class=" mt-2 input_title" name="work_title" id="work_title" placeholder="Title">
            <textarea class=" mt-2" name="work_story" id="work_story" placeholder="Story" cols="30" rows="4"></textarea>
            <button class="mt-2 d-block ml-auto mr-auto basicbtn">Post</button>
        </form>
    </div>

    <div class="achivements">
      <p class="text-center" style="font-weight: 500; font-size:1.3em ;line-height:15px; margin-bottom:25px"><span style="color:rgb(211,8,8)">ACHIVEMENTS</span> </p>
          <form class="form-group" enctype="multipart/form-data">
              <label for="achivements_img" class="achivement_lable img_display">
                <div class="achivements_img_display">
                  <img src="./images/image_rep.jpg" id="achivements_imgholder" width="150" height="150" alt="img">
                  <div class="darkbg achivements_img_text img_text">
                  <p class="text-center">Upload Image</p> 
                  </div>
                </div>
              </label>
              <input type="file" class="d-none mt-2"  value="" name="achivements_img" id="achivements_img">
              <input type="text" class=" mt-2 input_title" name="achivements_title" id="achivements_title" placeholder="Title">
              <textarea class=" mt-2" name="achivements_story" id="achivements_story" placeholder="Story" cols="30" rows="4"></textarea>
              <button class="mt-2 d-block ml-auto mr-auto basicbtn">Post</button>
          </form>
    </div>
    <div class="gallery">
    <p class="text-center" style="font-weight: 500; font-size:1.3em ;line-height:15px; margin-bottom:25px"><span style="color:rgb(211,8,8)">GALLERY</span> </p>
        <form class="form-group" enctype="multipart/form-data">
            <label for="gallery_img" class="gallery-lable">
              <div class="gallery_img_display">
                <img src="./images/image_rep.jpg" style="border-radius:10px" width="150" height="150" id="gallery_imgholder" alt="img">
                <div class="darkbg gallery_img_text img_text" style="border-radius:10px">
                 <p class="text-center">Upload Images <br> ctrl + select <br> for mutiple select</p> 
                </div>
              </div>
            </label>
            <input type="file" class="d-none mt-2"  value="" name="gallery_img" id="gallery_img" multiple>
            
            <button class="mt-2 d-block ml-auto mr-auto basicbtn">Post</button>
        </form>
    </div>
 </div>
 <script src="./js/addinfo.js"></script>