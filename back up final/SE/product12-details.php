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
                        <img src="img/product-12/product-121.png" width="70%" id="ProductImg">
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="img/product-12/product-121.png" width="100%" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-12/product-122.png" width="100%" height="200"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-12/product-125.png" width="100%" height="200"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-12/product-124.png" width="100%" height="200"
                                class="small-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <form action="manage.php" method="POST">
                            <p>REALME</p>
                            <h1>realme GT NEO 2 (NEO Blue, 128 GB)  (8 GB RAM)  </h1>
                            <h4>&#8377;31,999</h4>
                            <button type="submit"name="Addtocart" class="btn btn-info" width="40%">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Realme GT Android Mobile">
                            <input type="hidden" name="Price" value="31999">

                        </form>
                        <h3>Product Details<i class="fa fa-indent"></i></h3>
                        <br>
                        <p>8 GB RAM | 128 GB ROM <br>
                            16.81 cm (6.62 inch) Full HD+ Display <br>
                            64MP + 8MP + 2MP | 16MP Front Camera <br>
                            5000 mAh Battery <br>
                            Qualcomm Snapdragon 870 Processor
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