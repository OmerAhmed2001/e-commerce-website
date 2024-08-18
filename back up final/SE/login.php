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
                            <span onclick="login()">Login</span>
                            <hr id="Indicators">
                        </div>
                        <form id="LoginForm" method="post" action="#">
                            <input type="email" placeholder="email id" name="email" id="email"required>
                            <input type="password" placeholder="Password" name="password" id="password"required>
                            <button name="Loginbtn" type="submit" class="btn" onclick="login(LoginForm)">Login</button>
                            <a href="">Forgot Password</a><br>
                            <a href="account.php">Don't Have an account?<u><h3> Sign up</h3><u></u></a>
                        </form>
                        <?php
                            include("connection.php");
                            if(isset($_POST['Loginbtn']))
                            {  
                                $uname=$_POST['email'];
                                $pass=$_POST['password'];
                                $sql="select * from login where emailid='". $uname."' AND password='".$pass."' limit 1 ";
                                $result=mysqli_query($connection,$sql);
                                if(mysqli_num_rows($result)==1)
                                {
                                    echo "<script>
                                         alert('Welcome $uname');
                                         window.location.href='BigBuy.php';
                                        </script>";
                                    exit();
                                }
                                else{
                                    echo "<script>
                                    alert('please enter detalils correctly');
                                    window.location.href='login.php';
                                   </script>";
                                    exit();
                                    }
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
     <script>
        // function login(LoginForm)
        // {
        //     if(LoginForm.email.value && LoginForm.password.value==true)
        //     {
        //         var username=document.getElementById("email").value;
        //         document.write('<html><body><h1><center>');
        //         document.write("welcome"+ "");
        //         document.write(username);
        //         document.write('</center></h1></body></html>');
        //     }
        //     else
        //     alert("please enter detalils correctly");
        // }
    </script>
</body>
</html>