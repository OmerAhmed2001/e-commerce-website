<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - BuyBox</title>
    <link rel="stylesheet" href="style.css">
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
            <!------------single product details------>
            <div class="small-container single-product">
                <div class="row">
                    <div class="col-2">
                        <img src="img/product-9/product-91.jpeg" width="70%" id="ProductImg">
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="img/product-9/product-92.jpeg" width="100%" height="100%"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-9/product-93.jpeg" width="100%" height="100%"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-9/product-94.jpeg" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-9/product-95.jpeg" width="80%" height="140px"
                                class="small-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <form action="manage.php" method="POST">
                            <p>HP</p>
                            <h1>HP Pavilion Core i7 11th Gen - (16 GB/1 TB SSD/Windows 10 Home) 14-dv0058TU Thin and Light Laptop  (14 inch, Natural Silver, 1.41 kg, With MS Office) </h1>
                            <h4>&#8377;81,000</h4>
                            <button type="submit"name="Addtocart" class="btn btn-info" width="40%">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Dell i7 laptop">
                            <input type="hidden" name="Price" value="81000">

                        </form>   
                        <h3>Product Details<i class="fa fa-indent"></i></h3>
                        <br>
                        <p>Stylish & Portable Thin and Light Laptop <br>
                            14 inch Full HD LED Backlit Anti-glare IPS Micro-edge Display (250 nits Brightness, 45% NTSC Color Gamut, 157 PPI) <br>
                            Finger Print Sensor for Faster System Access <br>
                            Light Laptop without Optical Disk Drive
                        </p>
                    </div>
                </div>
            </div>
            <?php
        include('related.php');
        ?>
</div> 
<?php
        include('footer.php');
        ?>
</body>
</html>