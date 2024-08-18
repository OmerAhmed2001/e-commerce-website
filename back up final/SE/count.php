<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,500;1,200;1,300;1,400&display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>

</head>
<body>
<div class="navbar">
            <div>
            <a href="BigBuy.php"><img src="img/logof.png" width="450px"></a>
            </div>
                <nav>
                    <ul id= MenuItems>
                        <li><a href="BigBuy.php">Home</a></li>
                        <li><a href="Products.php">Products</a></li>
                        <li><a href="">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="login.php">Account</a></li>
                    </ul>
                    
                </nav>
                <!--Shopping cart-->
                <div class="shopping-cart">
                <?php
                            $count=0;
                            if(isset($_SESSION['cart']))
                            {
                                $count=count($_SESSION['cart']) ;
                            }
                        
                        ?>
                        <a href="card.php" class="btn-outline-success"><img src="img/shopc.png" alt=""width="30px" height="30px">(<?php echo $count;?>)</a> 
                    </div>   
                <img src="images/menu.png" class="menu-icon" 
                onclick="menutoggle()">
            </div>
</body>
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
</html>