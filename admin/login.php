<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include "./components/links.php";
    ?>
    <link rel="stylesheet" href="./css/ls.css">
    <title>LOGIN | Human Welfare Trust Delhi</title>
</head>
<body>
    <div class='bg'>
        <nav class="allnav">
        <a href="http://localhost/hwt/admin"><h4  class="logo"><b style="color:rgb(211,8,8)">Human</b> Welfare Trust</h4></a> 
        <h4 class='admintitle'>dmin Panel</h4>

        </nav>
        <div class="logindiv">
            <div class="loginform">
                <p class="title">ogin</p>
                <form class="form-group" method="post" id="login">
                    <input type="text" class="inp" placeholder="Username" name="username" id="user">
                    <input type="password" class="inp" placeholder="Password" name="password" id="password">
                    <button type="submit" class="button" >Login</button>
                </form>
                <a  class="text-center text-danger m-2" href=""><p>Forget Password?</p></a> 
            </div>
        </div>
    </div>  
</body>
<?php 
    include "./components/scripts.php";
?>
<script src="./js/ls.js"></script>
</html>