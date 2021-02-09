<?php
if(!isset($_SESSION)) session_start();
if(isset($_SESSION["user"])){
  include "dbconn.php";
  // if(isset($_SESSION["id"])){
  if(!$conn){
    die(mysqli_connect_error());
  }
 ?>
<div class="volenteer">
<p class="text-center p-3 secnav" style="font-size:1.5em">VOLUNTEERS APPLIED</p>

    <div class="container-fluid-sm p2  custom-table" id="volenteer-table-div">
    <table class="table table-bordered table-hover bg-white">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_GET["page"])){
                    $page=$_GET["page"];
                }else{
                    $page=1;
                }
                $pagelimit=20;
                $from=($page-1)*$pagelimit;
                $sql = "SELECT v_id,name,number,gender,address,email from v_forms order by date desc limit ".$from.",".$pagelimit;
                $res=mysqli_query($conn,$sql);
                $no_of_items=mysqli_num_rows($res);
                while($row=mysqli_fetch_assoc($res)){
            ?>
            <tr>
                <td><?php echo $row["v_id"]?></td>
                <td><?php echo $row["name"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["number"]?></td>
                <td><?php echo $row["gender"]?></td>
                <td><?php echo $row["address"]?></td>
            </tr>
            <?php

                }
            ?>
        </tbody>
    </table>
    <div class="data-navigation">
    <?php 
                $sql = "SELECT v_id,name,number,gender,address,email from v_forms";
                $res=mysqli_query($conn,$sql);
                $no_of_items=mysqli_num_rows($res);
                $num_pages=ceil($no_of_items/$pagelimit);
                for($i=1;$i<=$num_pages;$i++){
                    ?>
                    <a onclick="ajax_pagination(<?php echo $i ?>,'volenteer')"><?php echo $i ?></a>
                    <?php 
                }
            ?>
    </div>
</div>
</div>
<?php 
}else{
    header("location:http://localhost/hwt/admin/login");

  }
?>
