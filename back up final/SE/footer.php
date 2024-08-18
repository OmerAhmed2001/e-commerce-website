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

    <!--------js for product gallery------>
    <script>
        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");
        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }
        </script>
