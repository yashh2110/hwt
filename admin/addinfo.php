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
        <p class="text-center" style="font-weight: 500; font-size:1.3em">OUR <b style="color:rgb(211,8,8)">FOCUS</b> </p>
        <form class="form-group">
            <label for="focus_img" class="basicbtn">Picture</label>
            <input type="file" class=" d-none mt-2" name="focus_img" id="focus_img">
            <input type="text" class=" mt-2" name="focus_title" id="focus_title" placeholder="Title">
            <textarea class=" mt-2" name="focus_story" id="focus_story" placeholder="Story" cols="30" rows="4"></textarea>
            <button class="mt-2 d-block ml-auto mr-auto basicbtn">Post</button>
        </form>
    </div>
    <div class="ourwork"></div>
    <div class="gallery"></div>
    <div class="achivements"></div>
 </div>