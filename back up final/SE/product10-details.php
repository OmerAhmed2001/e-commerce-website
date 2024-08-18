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
                        <img src="img/product-10/product-101.jpeg" width="70%" id="ProductImg">
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="img/product-10/product-101.jpeg" width="100%" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-10/product-102.jpeg" width="100%"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-10/product-103.jpeg" width="100%"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-10/product-104.jpeg" width="100%"
                                class="small-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <form action="manage.php" method="POST">
                            <p>boAt</p>
                            <h1>boAt Stone 350 10 W Bluetooth Speaker  (Black, Mono Channel)</h1>
                            <h4>&#8377;1499</h4>
                            <button type="submit"name="Addtocart" class="btn btn-info" width="40%">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="Bluetooth Speaker">
                            <input type="hidden" name="Price" value="1499">

                        </form>
                        <h3>Product Details<i class="fa fa-indent"></i></h3>
                        <br>
                        <p> Power Output(RMS): 10 W <br>
                            Battery life: 12 hrs <br>
                            Bluetooth Version: 5 <br>
                            Wireless range: 10 m <br>
                            Wireless music streaming via Bluetooth <br>
                            IPX7: Splash and Sweat Shield <br>
                            Multiple Connectivity: BT, TF Card and AUX
                        </p>
                    </div>
                </div>
            </div>
            <?php
        include('related.php');
        ?>
</div> 
    <!------footer------------>
    <?php
        include('footer.php');
        ?>

</body>
</html>