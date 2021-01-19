<?php
  session_start();
  include "dbconn.php";
  // if(isset($_SESSION["id"])){
  if(!$conn){
    die(mysqli_connect_error());
  }
 ?>
<div class="donation">
  <p class="text-center p-3 donation-head" style="font-size:1.5em">DONATIONS</p>
  <div class="donation-data container-sm">
    <div id="donors" class="donors">
      <?php
        $sql="SELECT COUNT(distinct d_number) from donations";
        $req=mysqli_query($conn,$sql);
        if($count=mysqli_fetch_row($req)){
       ?>
      <p class="text-center"><b><?php echo $count[0] ?></b></p>
      <?php
        }
       ?>
      <p>Donors</p>
    </div>
    <div id="donor-amount" class="donor-amount">
      <?php
        $sql="SELECT SUM(d_amount) FROM donations";
        $req=mysqli_query($conn,$sql);
        if($amount=mysqli_fetch_row($req)){
       ?>
      <p class="text-center"><b><?php echo $amount[0] ?> INR</b></p>
      <?php
    }
       ?>
      <p>Donated Amount</p>
    </div>
  </div>
  <div class="container-fluid-sm p-2 donation-table">
    <table id="donation-table" class="table table-bordered table-hover bg-white">
      <thead class="">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Phone</th>
          <th>Email</th>
          <th>Amount</th>
          <th>Payment ID</th>
          <th>Method</th>
          <th>Address</th>
          <th>Payment Date</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if(isset($_GET['page'])){
            $page=$_GET['page'];
          }else{
            $page=1;
          }
          $dataperpage=20;
          $start_num=($page-1)*$dataperpage;
          $sql="SELECT donation_id,d_payment_id,d_name,d_number,d_mail,d_amount,d_payment_method,d_address,d_payment_date FROM donations order by d_payment_date DESC ,donation_id DESC limit ".$start_num.",".$dataperpage;
          $req=mysqli_query($conn,$sql);
          if(mysqli_num_rows($req)>0){
            while($data=mysqli_fetch_assoc($req)){
              ?>
              <tr>
                <td><?php echo $data['donation_id'] ?></td>
                <td><?php echo $data['d_name'] ?></td>
                <td><?php echo $data['d_number'] ?></td>
                <td><?php echo $data['d_mail'] ?></td>
                <td><?php echo $data['d_amount']." INR" ?></td>
                <td><?php echo $data['d_payment_id'] ?></td>
                <td><?php echo $data['d_payment_method'] ?></td>
                <td><?php echo $data['d_address'] ?></td>
                <td><?php echo $data['d_payment_date'] ?></td>
              </tr>
              <?php
            }
          }
         ?>
      </tbody>
    </table>

    <div class="data-navigation">
      <?php
        $sql="SELECT donation_id,d_payment_id,d_name,d_number,d_mail,d_amount,d_payment_method,d_address,d_payment_date FROM donations order by d_payment_date ASC";
        $req=mysqli_query($conn,$sql);
        $total_data_count=mysqli_num_rows($req);
        $num_btns=ceil($total_data_count/$dataperpage);
        for($i=1;$i<=$num_btns;$i++){
       ?>
       <a href="index?page=<?php echo $i ?>"><?php echo $i ?></a>
       <?php
        }
        ?>
    </div>
  </div>

</div>
