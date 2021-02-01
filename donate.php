<?php
   require_once('./gatewayfolder/config.php');
?>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />
    <?php include "./components/links.php" ?>
  <link rel="stylesheet" href="./css/index.css">

    <link rel="stylesheet" href="./css/gateway.css">
    <link rel="stylesheet" href="./css/nav.css">
    <title>Support Us To Make The lifes of Poor Better | Human Welfare Trust Delhi</title>
  </head>
  <body>
    <?php include "./components/navbar.php" ?>
    <div class="gateway-div container-fluid-sm bg-light">
      <div class="gateway-cap">
        <div class="gateway-cap-img">
        <div class="darkbg donate-cap">
          <div class="donate-cap-div">
            <div>
                <p class=" headings text-white " style="font-size:2.5em"><span style="color:rgb(211,8,8)">Small</span>  Amounts For You Can Make A Big Difference In There Lifes
              </p>
              <p class="text-white" style="font-weight:600;font-size:1.4em" >Please Donate The Amount You Wish!</p>
            </div>

          </div>

        </div>
        </div>
      </div>
      <div class="gateway-form">
        <form id="d-form" class="form-group donor-form ml-auto mr-auto">
          <p class="headings"><span style="color:rgb(211,8,8)">Donate</span> The Amount You Like</p>
          <div class="inputdiv">
                <input class="inputf p-2" id="d-amount" type="number" name="d-amount" required autofocus>
                <span class="text">Amount*</span>
          </div>
          <div class="inputdiv">
                <input class="inputf" id="d-name" type="text" name="d-name" required>
                <span class="text">Name*</span>
          </div>
          <div class="inputdiv">
                <input class="inputf" id="d-mail" type="text" name="d-mail" required>
                <span class="text">Email</span>
          </div>

          <div class="inputdiv">
                <input class="inputf" id="d-number" type="number" name="d-number" required>
                <span class="text">Phone*</span>
          </div>
          <div class="inputdiv">
              <select name="d-country" class="inputf" id="d-country" required>
                <option value="india" class="text-dark">India</option>
                <option value="femail" class="text-dark">Foreign</option>
              </select>
          </div>
          <div class="inputdiv">
                <input class="inputf" id="d-city" type="text" name="d-city" required>
                <span class="text">City*</span>
          </div>
          <div class="inputdiv">
                <textarea class="inputf" name="d-address" id="d-address" cols="8" rows="6" required></textarea>
                <span class="text">Address*</span>
          </div>

          <button class="btn text-white mt-4" type="submit" id="dsubmitbtn" style="background-color:rgb(211,8,8);font-weight:500">Donate</button>
        </form>
      </div>
    </div>
    <?php include "./components/footer.php" ?>
<script src="./js/index.js"></script>

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
  $("#d-form").submit(function(e){
    e.preventDefault();
    var name =$("#d-name").val();
    var mail=$("#d-mail").val();
    var number=$("#d-number").val();
    var amount=$("#d-amount").val();
    var city=$("#d-city").val();
    var country=$("#d-country").val();
    var address=$("#d-address").val();
    var options = {
    "key":"<?php echo $razor_pay_key_id ?>",
    "amount": amount * 100, // 2000 paise = INR 20
    "name": "Human Welfare Trust",
    "description": "Lets help the poor",
    "currency":"INR",
    "image": "./img/eletter.png",
    "handler": function (response){
            $.ajax({
            url: './gatewayfolder/index.php',
            type: 'post',
            data: {
              razorpay_payment_id: response.razorpay_payment_id,
              d_name:name,
              d_mail:mail,
              d_number:number,
              d_amount:amount,
              d_city:city,
              d_country:country,
              d_address:address
            },
            success: function (msg) {
              alert(msg);
              $("#d-form")[0].reset();
            }
        });

    },
    "prefill": {
        "name": name,
        "email": mail,
        "contact": number
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#528FF0"
    }
  };
  var rzp1 = new Razorpay(options);
   rzp1.open();
  e.preventDefault();
  });

</script>

  </body>
</html>
