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
                        <img src="img/product-8/product-82.jpeg" width="70%" id="ProductImg">
                        <div class="small-img-row">
                            <div class="small-img-col">
                                <img src="img/product-8/product-83.jpeg" width="80%" height="140px"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-8/product-84.jpeg" width="80%" height="140px"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-8/product-85.jpeg" width="80%" height="140px"
                                class="small-img">
                            </div>
                            <div class="small-img-col">
                                <img src="img/product-8/product-81.jpeg" width="80%" height="140px"
                                class="small-img">
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                            <form action="manage.php" method="POST">
                                <p>Layasa</p>
                                <h1>Medium 30 L Laptop Backpack Intern 1  (Blue)     </h1>
                                <h4>&#8377;1000</h4>
                                <select>
                                    <option>Select Size</option>
                                    <option>Large</option>
                                    <option>Medium</option>
                                    <option>Small</option>
                                </select>
                                <button type="submit"name="Addtocart" class="btn btn-info" width="40%">Add To Cart</button>
                                <input type="hidden" name="Item_Name" value="Laptop Backpack">
                                <input type="hidden" name="Price" value="1000">
                            </form>    
                        <h3>Product Details<i class="fa fa-indent"></i></h3>
                        <br>
                        <p> <table>
                           <tr><td> Number of Contents </td><td>:</td>  <td> 1 Backpack </td></tr>
                           <tr><td> Type Laptop</td><td>:</td>  <td> Backpack </td></tr>
                            <tr><td> With Rain Cover</td><td>:</td>  <td> Yes</td></tr>
                                <tr><td> Compatible Laptop Size</td><td>:</td>  <td> 17 inch</td></tr>
                                    <tr><td> Capacity </td><td>:</td>  <td>30 L</td></tr>
                                        <tr><td>  Dimensions</td><td>:</td>  <td> W x H: 14 x 20 inch </td></tr></table>
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