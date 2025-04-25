<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>All Products - RedStore</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" width="125px"></a>

    </div>
    </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="index.html">Home </a></li>
                <li><a href="products.html">Products </a></li>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="account.html">Account</a></li>
                 </ul>
                 <a href="cart.html"><<img src="images/images - Copy/cart.png" width="20px" height="20px"></a>
                 <img src="images/images/menu.png" class="menu-icon" 
                 onclick="menutoggle()">
             </div>
        </nav>
    </div>
</div>
   
    

    </div>
    <!--------------------------------cart items details----------------------->
    <div class="small-container cart-page">
        <table>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/images/buy-1.jpg">
                        <div>
                            <p>Red Printed Tshirt</p>
                            <small>Price: $50.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$50.00</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/images/buy-2.jpg">
                        <div>
                            <p>Shoes</p>
                            <small>Price: $20.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$20.0</td>
            </tr>
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="images/images/buy-3.jpg">
                        <div>
                            <p>Pants</p>
                            <small>Price: $10.00</small>
                            <br>
                            <a href="">Remove</a>
                        </div>
                    </div>
                </td>
                <td><input type="number" value="1"></td>
                <td>$10.00</td>
            </tr>
        </table>

<div class="total-price">
    <table>
        <tr>
            <td>Subtotal</td>
            <td>$80.00</td>
        </tr>
        <tr>
            <td>Tax</td>
            <td>$10.00</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>$90.00</td>
        </tr>
    </table>
</div>






    </div>
    




<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/images/play-store.png">
                    <img src="images/images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
                <img src="images/images/logo-white.png">
                <p>Our Purpose Is To Sustainably Make the Pleasure and 
                    Benifits of Sports Acessible to the Many. </p>
            </div>
        
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
                <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright"> Copyright 2020 - Easy Tutorials</p>
    </div>
</div>
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle(){
        if(MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px";

        }
      else
          {
            MenuItems.style.maxHeight = "0px";
          }
          }
</script>

</body>
</html>






