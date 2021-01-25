<?php
  session_start();
  include "dbconn.php";
  // if(isset($_SESSION["id"])){
  if(!$conn){
    die(mysqli_connect_error());
  }
 ?>
<div class="subscriber">
<p class="text-center p-3 secnav" style="font-size:1.5em">SUBSCRIBERS</p>
<div class="container-fluid-sm p2  custom-table">
    <table class="table table-bordered table-hover bg-white">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>yashwanth</td>
                <td>yashwanth.mudddana@gmail.com</td>

            </tr>
        </tbody>
    </table>
</div>

</div>