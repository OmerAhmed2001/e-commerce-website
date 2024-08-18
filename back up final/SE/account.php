<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - BuyBox</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="hello1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>


</head>
<body>

    <div class="container">
        <?php 
            include('count.php');
            ?>
        </div>   
    </div>
    <!---------------account-page-------->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="img/image1.png" width="100%">
                </div>
                <div class="col-2">
                    <div class="form-containers">
                        <div class="form">
                            <span onclick="register()">Sign up</span>
                            <hr id="Indicators">
                        </div>
                        <form id="RegForm" name="reg" method="post" action="#">
                            <input type="text" placeholder="Name" name="username">
                            <input type="text" placeholder="mobile" name="number">
                            <input type="email"placeholder="Email"name="email">
                            <input type="password" placeholder="Password"name="password">
                            <button type="submit" class="btn"onclick="fact()"name="signup">Sign Up</button>
                            <a href="login.php"><u><h3>Log in</h3></u></a>
                           
                        </form>
                        <?php
                        include("connection.php");
                        error_reporting(0);
                         if(isset($_POST['signup']))
                         {
                             $username=$_POST['username'];
                             $mobilenumber=$_POST['number'];
                             $email=$_POST['email'];
                             $password=$_POST['password'];
                             $query="insert into login(name,mobilenumber,emailid,password) values('$username','$mobilenumber','$email','$password')";
                             $execute=mysqli_query($connection,$query);
                            //  if($execute){
                            //      echo "data inserted";
                            //  }
                            //  else{
                            //      echo "data not inserted";
                            // }
                         }
                         
                        ?> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------footer------------>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
           
        </div>
        <hr>
        <p class="Copyright"> Copyright 2022 - All Rights Reserved</p>
    </div>
</div>
<!---------js for toggle menu------->
    <script>
        var MenuItems= document.getElementById("MenuItems");

        MenuItems.style.maxHeight = "0px"
        function menutoggle(){
            if(MenuItems.style.maxHeight=="0px")
            {
                MenuItems.style.maxHeight="200px";
            }
            else
            {
                MenuItems.style.maxHeight="0px";
            }
        }
    </script>
    <!------js for toggle form------>
    <script>
        function fact()
        {
        var numb=document.forms["Regform"]["num"].value;
        var numpat=/^\d{10}$/;
        if(numpat.test(numb)==false)
        {
            alert("enter 10 digit mobile number");
            return false;
        }
        }
        var LoginForm = document.getElementById("LoginForm");
        var RegForm = document.getElementById("RegForm");
        var Indicator = document.getElementById("Indicator");
        function register(){
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
        function login(){
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
            Indicator.style.transform = "translateX(0px)";
        }

    </script>
   

</body>
</html>