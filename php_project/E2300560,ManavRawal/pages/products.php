<?php
require '../db.php'; // Include database connection

try {
    // Fetch all users
    $stmt = $pdo->query("SELECT * FROM users");
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($users);
} catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
}
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: ../login.php");
    exit;
}
echo "Welcome, " . $_SESSION["user"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!--here i have just assigned temporary title as bonsai-->
    <title>Bonsai</title>
    <meta charset="UTF-8">
    <meta name="description" content="Bonsai plants">

    <!-- added some keywords you ac add-->
    <meta name="keywords" content="Bonsai plant,bonsai online,online store,online nurserty,botany,japanese plants">
    <meta name="author" content="group5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <style>
        #countdown {
  text-align: center;
  font-size: 24px;
  font-family: sans-serif;
  color: #333;
  margin: 50px auto;
}

#countdown .days,
#countdown .hours,
#countdown .minutes,
#countdown .seconds {
  display: inline-block;
  background-color: #fff;
  padding: 10px;
  border-radius: 5px;
  margin: 0 10px;
  box-shadow: 0 2px 5px #ccc;
}

#countdown p {
  margin: 0;
  padding: 0;
}

#countdown .timeRefDays,
#countdown .timeRefHours,
#countdown .timeRefMinutes,
#countdown .timeRefSeconds {
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #999;
  margin-top: 5px;
}
.product-container {
        display: flex;
        
      }
      .product {
        width: 250px;
        height: 300px;
        position: relative;
        overflow: hidden;
        padding: 35px;
        box-shadow: 10px 10px 10px 10px rgb(228, 230, 233);
      }
      .product img {
        width: 300px;
        height: 300px;
        overflow: hidden;
        transition: all 0.5s ease;
      }
      .product .info {
        position: absolute;
        bottom: -100%;
        left: 0;
        right: 0;
        background-color:whitesmoke;
        padding: 10px;
        transition: all 0.5s ease;
        
      }
      .product:hover img {
        transform: scale(1.1);
      }
      .product:hover .info {
        bottom: 0;
      }
      .product-price {
        color: #333;
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 5px;
      }
      .product-discounted-price {
        color: #aaa;
        font-size: 16px;
        text-decoration: line-through;
        margin-left: 10px;
      }
      .productname{
        padding-bottom: 20px;
      }
      .productname p{
        font-weight: bold;
        color: grey;
        font-size: larger;
        padding: 10px;
        padding-left: 30px;
      }
      .allbutton{
        border-radius: 12px;
        background-color:#00A36C;
        border: none;
        color: whitesmoke;
        padding-top: 13px;
        padding-bottom: 13px;
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
        text-decoration: none;
        display: block;
        font-size: 16px;
        margin: 4px 1px;
        cursor: pointer;
       
    }
    .allbutton:hover{
        color:whitesmoke;
        background-color: #34eb6b;
        

    }

    </style>
</head>
<body>
    <header>
        <nav>
            <figure >
                <!--this is just temporary logo -->
                <a href="../index.html"><img src="../images/logo.png" alt="picture of bonsai" class="logo"></a>
            </figure>
            <div class="navbar">
                <ul>
                    <!-- this is just temporary we have to go through templates for the final-->

                    <li><a href="../index.html">Home</a></li>
                      
                    <li><a href="products.html">Products</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="Research.html">Research</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="#"><img class="cart" src="../images/cart.png" alt="cart"></a></li>


                </ul>
            </div>
            
            
        </nav>
    </header>
    <section class="firstsection">
        <div class="lefthome">
            
          
            <h1 style="color: black; position: relative; text-align: left; top: 0px; font-size: 60px; text-transform: uppercase; left: 100px;">
                
                EXPLORE THE <span>VARIETY</span> 
                </h1>
                <br>
                 <h1 style="color: black; position: relative; text-align: left; top: 10px; font-size: 60px; text-transform: uppercase; left: 150px;">OF OUR <span>PRODUCTS</span> </h1>
               
            </h1>
           

        </div>
        <div class="righthome">
            <img style="margin-left: 100px;" src="../images/producttop.webp" alt="bonsai">
            
        </div>
        
       
        
    </section>
    <div class="discountbar" style="display: flex;" id="discount">
        <div style="padding: 80px;padding-left: 300px;">
            <h1 style="color: #00A36C; font-weight: lighter;">Items on Sale</h1>
        </div>
        
            <div id="countdown">
                <div class="days">
                  <p class="timeRefDays">days</p>
                  <p id="days">00</p>
                </div>
                <div class="hours">
                  <p class="timeRefHours">hours</p>
                  <p id="hours">00</p>
                </div>
                <div class="minutes">
                  <p class="timeRefMinutes">minutes</p>
                  <p id="minutes">00</p>
                </div>
                <div class="seconds">
                  <p class="timeRefSeconds">seconds</p>
                  <p id="seconds">00</p>
                </div>
              </div>
              
        
    </div>
    <div class="product-container" style="margin-left: 250px;">
        <div class="product">
           <div class="productname"> <p>Juniper</p></div>
           <a href="#"><img src="../images/product1.webp" alt="Product 1"></a>
           <div class="info">
               
            <div class="product-price">$50</div>
            <div class="product-discounted-price">$75</div>
            <div> <button class="allbutton">Buy Now</button></div>
            
           </div>
           
        </div>
        <div class="product">
           <div class="productname"> <p>Japanese Maple</p></div>
        <img src="../images/product2.jpg" alt="Product 2">
           <div class="info">
               
             <div class="product-price">$40</div>
             <div class="product-discounted-price">$60</div>
             <div> <button class="allbutton">Buy Now</button></div>
            </div>
        </div>
           <div class="product">
               <div class="productname"> <p>Azalea</p></div>
           <img src="../images/product3.jpg" alt="Product 3">
           <div class="info">
               
               <div class="product-price">$30</div>
               <div class="product-discounted-price">$45</div>
               <div> <button class="allbutton">Buy Now</button></div>
</div>
</div>
       </div>
       <div class="featured" style="padding-top:150px;">
        <h1 style="text-align: center;padding: 50px; color: #00A36C;"> Featured Products</h1>
        <div class="product-container" style="margin-left: 250px;">
        <div class="product">
           <div class="productname"> <p>Bald Cypress</p></div>
           <a href="#"><img src="../images/product4.webp" alt="Product 4"></a>
           <div class="info">
               
            <div class="product-price">$90</div>
            
            <div> <button class="allbutton">Buy Now</button></div>
            
           </div>
           
        </div>
        <div class="product">
           <div class="productname"> <p>Blank Olive</p></div>
        <img src="../images/product5.webp" alt="Product 5">
           <div class="info">
               
             <div class="product-price">$75</div>
             
             <div> <button class="allbutton">Buy Now</button></div>
            </div>
        </div>
           <div class="product">
               <div class="productname"> <p>Bougainvillea</p></div>
           <img src="../images/product6.webp" alt="Product 6">
           <div class="info">
               
               <div class="product-price">$93</div>
               
               <div> <button class="allbutton">Buy Now</button></div>

        </div>


       
       </div>
       </div>
       </div>


       <div class="other" style="padding-top:150px;">
        <h1 style="text-align: center;padding: 50px; color: #00A36C;"> Other Products</h1>
        <div class="product-container" style="margin-left: 250px;">
        <div class="product">
           <div class="productname"> <p>Boxwood</p></div>
           <a href="#"><img src="../images/product7.webp" alt="Product 7"></a>
           <div class="info">
               
            <div class="product-price">$110</div>
            
            <div> <button class="allbutton">Buy Now</button></div>
            
           </div>
           
        </div>
        <div class="product">
           <div class="productname"> <p>Buttonwood</p></div>
        <img src="../images/product8.webp" alt="Product 8">
           <div class="info">
               
             <div class="product-price">$120.35</div>
             
             <div> <button class="allbutton">Buy Now</button></div>
            </div>
        </div>
           <div class="product">
               <div class="productname"> <p>Cherry Blossom</p></div>
           <img src="../images/product9.webp" alt="Product 9">
           <div class="info">
               
               <div class="product-price">$140</div>
               
               <div> <button class="allbutton">Buy Now</button></div>

        </div>


       
       </div>
       </div>
       <div class="product-container" style="margin-left: 250px; padding-top: 50px;" >
        <div class="product">
           <div class="productname"> <p>Cherry Bonsai</p></div>
           <a href="#"><img src="../images/product10.webp" alt="Product 10"></a>
           <div class="info">
               
            <div class="product-price">$150</div>
            
            <div> <button class="allbutton">Buy Now</button></div>
            
           </div>
           
        </div>
        <div class="product">
           <div class="productname"> <p>Ficus</p></div>
        <img src="../images/product11.webp" alt="Product 11">
           <div class="info">
               
             <div class="product-price">$125.99</div>
             
             <div> <button class="allbutton">Buy Now</button></div>
            </div>
        </div>
           <div class="product">
               <div class="productname"> <p>Ginkgo</p></div>
           <img src="../images/product12.webp" alt="Product 12">
           <div class="info">
               
               <div class="product-price">$99.99</div>
               
               <div> <button class="allbutton">Buy Now</button></div>

        </div>


       
       </div>
       </div>
       </div>


       <div class="footer" style="background-color: whitesmoke; padding-top: 100px;"> 
          
        <div class="footermain" style="display: flex;">
            <div class="connect" style="margin-left: 70px;">
                <img src="../images/logo.png" alt="logo">
                <h1>Connect with us</h1>
                <div class="logosfooter" style="display: flex;">
                    <a href="https://www.instagram.com" target="_blank" title="Instagram"><img  src="../images/insta.png" alt="instagram"></a>
                    <a href="https://www.facebook.com" target="_blank" title="Facebook"><img  src="../images/facebook.png" alt="facebook"></a>
                    <a href="https://www.twitter.com" target="_blank" title="Twitter"><img  src="../images/twitter.png" alt="twitter"></a>
                </div>    

            </div>  
            <div class="information" style="padding: 40px;padding-left: 120px;">
                <h3 style="padding-bottom: 20px;">Navigate</h3>
                <ul style="line-height: 30px;">
                <li><a  style="color: #333;" href="index.html">Home</a></li>
                <li><a style="color: #333;" href="../pages/products.html">Products</a></li>
                <li><a style="color: #333;" href="../pages/blog.html">Blog</a></li>
                <li><a style="color: #333;" href="../pages/research.html">Research</a></li>
                <li><a style="color: #333;" href="../pages/about.html">About</a></li>
                <li><a style="color: #333;" href="../pages/contact.html">Contact</a></li>
                </ul>

            </div>  
            <div class="thirdpartfooter" style="padding: 40px;padding-left: 80px;">
                <div>
                    <h3>
                        About Us
                    </h3>
                    <p style="padding-top: 25px;color: #333;">
                        We deliver bonsai to your and your <br>
                        loved ones doorstep just one click away. <br>
                        you can find a wide selection of 
                        <br>high-quality bonsai trees to enhance your 
                        <br> home or office.
                    </p>

                </div>
                
            </div> 
            <div class="contactusfooter" style="padding: 40px; padding-left: 80px;">
                <h3 style="padding-bottom:20px ;"> Contact Us</h3>
                <div style="display: flex;"><a href="tel: +9779842447841"><img style="height: 20px;" src="../images/phone.png" alt="phone"></a>
                <p style="padding-left: 28px;"> 9842447841</p>
            </div>
            <div style="display: flex; padding-top: 10px;">
                <a href="mailto:dawadiadarsha2018@gmail.com"><img style="height:20px;" src="../images/mail.png" alt="mail"></a><p style="padding-left: 20px;"> dawadiadarsha2018@gmail.com</p>
            </div>
            <div style="display: flex; padding-top: 10px;">
                <a  href="https://goo.gl/maps/29yuvYstV8XH3wht8" target="_blank"><img style="height:20px;" src="../images/location.png" alt="location"></a><p style="padding-left: 35px;"> City Center 5th floor</p>
            </div>

                
            </div>      
            
        </div>
        <hr>
        <div class="Copyright" style="padding: 30px;">
            <div align="center" style="padding:0px 0px 10px 0px;font-size: 15px;font-family: Poppins-Regular;box-sizing:border-box;background:url(../background-images/white.png)">
                Copyright &copy Lil Trees 2023.  All rights reserved
        </div>
            </div>
       

    <script>
        // Set the date we're counting down to
var countDownDate = new Date();
countDownDate.setDate(countDownDate.getDate() + 30);

// Update the count down every 1 second
var x = setInterval(function() {
  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="countdown"
  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;},1000)

 

    </script>
</body>
</html>