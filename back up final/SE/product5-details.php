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
                        <img src="img/product-5/product-51.jpeg" width="100%" id="ProductImg">
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="img/product-5/product-54.jpeg" width="100%" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-5/product-52.jpeg" width="100%" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-5/product-53.jpeg" width="100%" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-5/product-55.jpeg" width="100%" 
                                class="small-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                       <form action="manage.php" method="POST">
                            <p>Layasa</p>
                            <h1>Boult Audio Pro Bass Curve Pro Bluetooth Headset  (Grey, In the Ear)</h1>
                            <h4>&#8377;1099</h4>
                            <button type="submit"name="Addtocart" class="btn btn-info" width="40%">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value=" Bluetooth Headset ">
                            <input type="hidden" name="Price" value="1099">

                        </form>  
                        <h3>Product Details<i class="fa fa-indent"></i></h3>
                        <br>
                        <p><b> With Mic:</b>Yes <br>
                           <b> Bluetooth version:</b> 5 <br>
                           <b> Wireless range:</b> 10 m <br>
                            <b> Battery life:</b> 12 hrs |<b> Charging time:</b> 2 hrs <br>
                                <b> IPX5:</b> Water and Sweat Resistant <br>
                                    <b> Call Vibration Feature. </b><br>
                                        <b> Comfortable Fit</b>
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