<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - BigBuy</title>
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
<div class="container1">
    <div class="row">
      <h1 class="col-11">MY CART</h1>
    </div>
   <br>
   <!-- scope="col" -->
</div>
<div class="container2">
    <div id="row">
        <div class="col">
            <table  class="tables" border="1" >
                <thead class="text-center">
                    <tr>
                    <th>SI NO</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>SUB TOTAL</th> 
                    <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_SESSION['cart']))
                        {
                            foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sr=$key+1;
                                    echo "
                                        <tr>
                                            <td class='icount'>$sr</td>
                                            <td>$value[Item_Name]</td>
                                            <td class='icount'>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'</td>
                                            <td class='icount'>
                                                <form action='manage.php' method='post'> 
                                                    <input class='iquantity' onchange='this.form.submit();' name='mod' type='number' value='$value[Quantity]' min='1' max='20'>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                            <td class='itotal'></td>
                                            <td class='icount'>
                                                <form action='manage.php' method='post'>
                                                    <button name='Remove_Item' class='button'>REMOVE</button>
                                                    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                        }

                    ?>
                
                </tbody>
                
            </table>
            <br>
        </div>
        <div class="col" id="fm">
            <?php
                if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                {            
            ?>
                <form id="fmm"  >
                    <div class="col-12">
                        <h2><u> Customer details</u></h2>
                    </div>
                    <p class="fn"> Name: * <input type="text" name="name"  width="80px"required></p>
                    <p> address: * <input type="text" name="name"  required></p>
                    <p> phone number: * <input type="text" name="name"  required></p>   
                    <p><input class="as" type="radio" name="name"  required value=""checked>&nbsp;&nbsp;COD</p>  
                </form>
                <form method="POST" >
                        <div class="place" >
                            <button type="submit" name="Placeord" id="pbtn"class="btn" > Place Order</button>
                        </div>
                    </form> 
            <?php
                    if(isset($_POST['Placeord']))
                    {
                        if(isset($_SESSION['cart']))
                        {
                            echo "
                            <script>
                            alert('Order Placed successfully');
                            window.location.href='BigBuy.php';
                            </script>";
                            session_destroy();
                        }
                    }
                }
            ?>  
        </div>
    </div>
    <div class="tt">
    <p><h2>GRAND TOTAl: <b id="gtotal"></b> </h2></p> 
    </div>
</div>
<br>
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
        <p class="Copyright"> Copyright 2022-All Rights Reserved</p>
    </div>
</div>
<!---------js for toggle menu------->
<script>
    var addItemId = 0;
    function addToCart(item){
        var selectedItem = document.createElement( 'col-2');
        selectedItem.classList.add('gallery-1');
        selectedItem.setAttribute('id',addItemId)
        var img = document.createElement('img');
        img.setAttribute('src',item.children[0].currentSrc);
        var cartItems = document.getElementById('title');
        selectedItem.append(img);
        cartItems.append(selectedItem);

    }
</script>
<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity= document.getElementsByClassName('iquantity');
    var itotal= document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');
    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        { 
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }
    subTotal();
</script>
<script>
    function placed()
    {
       alert("order placed");
    }
</script>
</body>
</html>