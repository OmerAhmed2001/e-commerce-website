<?php
  session_start();
  
 if($_SERVER["REQUEST_METHOD"]=="POST")
  {
         if(isset($_POST['Addtocart']))
         {
            if(isset($_SESSION['cart']))
            {
              $myitems=array_column($_SESSION['cart'],'Item_Name'); //store the product names presnt in cart in an array
              // echo "<script>
              // window.location.href='BigBuy.php';
              // </script>";
              if(in_array($_POST['Item_Name'],$myitems)) // check the product names in the array 
              {
                 echo "<script>
                 alert('item already added');
                 window.location.href='card.php';
                 </script>";
              }
              else
              {
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
                echo "<script>
                alert('item added');
                window.location.href='card.php';
                </script>";

              }
           
            }
            else
            {
               $_SESSION['cart'][0]=array('Item_Name'=>$_POST['Item_Name'],'Price'=>$_POST['Price'],'Quantity'=>1);
               echo "<script>
               alert('item added');
               window.location.href='card.php';
               </script>";
            }
         }
        if(isset($_POST['Remove_Item']))
         {
           foreach($_SESSION['cart'] as $key => $value) // key has index and $value has array 
          {
            if($value['Item_Name']==$_POST['Item_Name']) //comparing array names with remove btn item name
            {
              unset($_SESSION['cart'][$key]);// remove item  
              $_SESSION['cart']=array_values($_SESSION['cart']);// for correct indexing after removing item from cart
              echo "
              <script>
               alert('Item Removed');
               window.location.href='card.php';
              </script>"
              ;
            }
          }


         }
        if(isset($_POST['mod']))
        {
          foreach($_SESSION['cart'] as $key => $value) // key has index and $value has array 
          {
            if($value['Item_Name']==$_POST['Item_Name']) //comparing array names with remove btn item name
            {
              $_SESSION['cart'][$key]['Quantity']=$_POST['mod'];  
              echo "
              <script>
               window.location.href='card.php';
              </script>"
              ;
            }
          
          }
        }
        // if(isset($_POST['Placeord']))
        // {
        //   echo "<script>
        //   alert('Order Placed');
        //   window.location.href='BigBuy.php';
        //   </script>
        //   ";
          
        // }
  }
?>