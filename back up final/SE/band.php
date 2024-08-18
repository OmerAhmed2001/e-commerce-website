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
                        <img src="img/band/apple.png" width="100%%" height="450px" id="ProductImg">
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="img/band/apple.png" width="100%" height="153" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/band/apple2.jpeg" width="100%" 
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/band/apple3.jpeg" width="100%"  height="153"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/band/apple4.jpeg" width="100%" 
                                class="small-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                      <form action="manage.php" method="POST">
                            <h1>APPLE Watch Series 7 GPS MKN53HN/A 45 mm Aluminium Case  (Black Strap, Regular)</h1>
                            <h4>&#8377;44,999.00</h4>
                            <button type="submit"name="Addtocart" class="btn btn-info" width="40%">Add To Cart</button>
                            <input type="hidden" name="Item_Name" value="APPLE Watch 7 ">
                            <input type="hidden" name="Price" value="44999">
                        </form>
                        <h3>Product Details<i class="fa fa-indent"></i></h3>
                        <br>
                        <p>Attend calls and reply to messages using the GPS model <br>
                            use fitness app on your iphone to see your daily activity trends <br>
                            Apple Watch Series 7 <br>
                            With Call Function <br>
                            Touchscreen <br>
                            Notifier, Fitness & Outdoor <br>
                            Battery Runtime: Upto 18 hrs <br>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        include('footer.php');
        ?>
        </body>
</html>