<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
echo "Welcome, " . $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!--title for our website-->
    <title>Bonsai</title>
    <meta charset="UTF-8">
    <meta name="description" content="Bonsai plants">

    <!-- added some keywords for seo-->
    <meta name="keywords" content="Bonsai plant,bonsai online,online store,online nurserty,botany,japanese plants">
    <meta name="author" content="group5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <style>
        /* internal css for styling */
        /* set the bg color to whitesmoke */
        body{
            background-color: whitesmoke;
        }
        /* this is the styling for very first section */
    .firstsection{
    
        background:rgb(200, 233, 200);
        width:100%;
        height: 550px;
        align-items: center;
     display: flex;
      
    
        
    }

    section div h1 span{
        color:#00A36C;
      
    }
    /* set the position of the image */
    .righthome img{
        position:relative;
        align-items: right;
        height: 400px;
        width: 380px;
        display: flex;
        left: 100px;
        top: 10px;
    

    }
    /* assigned the position for the text */
    .righthome{
        position:relative;
        top:10px;
        align-items: right;
        width: 25%;
        display: flex;
        
    
    }
    .lefthome p{
       
        position: relative;
        
        display: flex;
       
    }
    
    
    /* this the stylining for second part */
    .secondpart{
        display: flex;
        position: relative;        
        background-color:whitesmoke;
        top: 100px;
        left: 0px;
        padding-bottom: 100px;
        padding: top 100px;;
    }
    /* styling for the featured products of home page */
    .featuredproducts{
        display: flow-root;
        position: relative;
        left: 5px;
        
        padding: 40px;
        left: 20px;
    }
    .featuredproducts h1{
        font: size 11px;
        font-weight: lighter;
    }
    .featuredproducts p{
        position: relative;
        display: flex;
        top: 20px;
        color: lightslategrey;
        line-height:25px;
    }
    .moreproducts{
        padding-top: 35px;
        padding-left: 10px;
    
        position: relative;
    }
    /* css for all the buttons that are used */
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
    /* this is the css for the product section */
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
      /* styling and assigning flex and  padding to the third part */
      .thirdpart{
        display: flex;
        padding: 50px;
        padding-top: 200px;
        top: 300px;
        
      }
      .textblog{
        padding: 30px;
      }
      /* styling for about us section */
      
    .fourthpart{
        padding: 50px;
        display: flex;
        
    }
    .aboutustext{
        
        position: relative;
    }
    .aboutuspicture{
       
        position: relative;
        padding: 20px;
        overflow: hidden;
        
    }
    .aboutblock{
        display: flex;
        padding: 20px;

       
    }
    .objectabout{
            padding: 20px;
        }
     
   
    


    </style>
    <!-- end of head -->
</head>
<body>
    <header>
        <nav>
            <figure >
                <!--used logo as link for homepage-->
                <a href="index.html"><img src="images/logo.png" alt="picture of bonsai" class="logo"></a>
            </figure>
            <!-- navigation bar -->
            <div class="navbar">
                <ul>
                    <!-- this is just temporary we have to go through templates for the final-->

                    <li><a href="index.html">Home</a></li>
                      
                    <li><a href="pages/products.php">Products</a></li>
                    <li><a href="pages/blog.html">Blog</a></li>
                    <li><a href="pages/Research.html">Research</a></li>
                    <li><a href="pages/about.html">About Us</a></li>
                    <li><a href="pages/contact.html">Contact</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="#"><img class="cart" src="images/cart.png" alt="cart"></a></li>

                </ul>
            </div>
            
            
        </nav>

    </header>
    <!-- this is the first section -->
    <section class="firstsection">
        <div class="lefthome">
            
          <!-- used some inline css for the texts -->
            <h1 style="color: black; position: relative; text-align: left; top: 0px; font-size: 60px; text-transform: uppercase; left: 100px;">
                
MAKING BEAUTIFUL <span>Bonsai</span> 
                </h1>
                <br>
                 <h1 style="color: black; position: relative; text-align: left; top: 10px; font-size: 60px; text-transform: uppercase; left: 190px;">PART OF YOUR <span>LIFE</span> </h1>
               
            </h1>
           

        </div>
        <div class="righthome">
            <img src="images/bonsaihome.png" alt="bonsai">
            
        </div>
        
       
        
    </section>
    <!-- start of second section of featured products -->
    <div class="secondpart" >
        
       
        <div class="featuredproducts">
            <h1 style="color:#00A36C;" > Nurtured by skilled hands....</h1>
         <!-- some text to define this section  -->
            <p > We provide bonsai masterpiece that are hands crafted <br> by love and care. So do bring beauty in your home <br> one bonsai at a time.</p>
            <div class="moreproducts">
                <a href="pages/products.html">
                    <!-- button that redirects us to product page -->
                    <button class="allbutton"> Explore</button>
                </a>
            </div>
            </div>
            <!-- the 3 products are displayed on home page -->
             <div class="product-container">
                 <div class="product">
                    <div class="productname"> <p>Juniper</p></div>
                    <a href="#"><img src="images/product1.webp" alt="Product 1"></a>
                    <div class="info">
                        <!-- assigned discounted price and actual price -->
                     <div class="product-price">$50</div>
                     <div class="product-discounted-price">$75</div>
                     <!-- this button redirects you to the page and location of the product in product page -->
                     <div> <a href="pages/products.html#discount"><button class="allbutton">Buy Now</button></div></a>
                     
                    </div>
                    <!-- similar work is done here -->
                 </div>
                 <div class="product">
                    <div class="productname"> <p>Japanese Maple</p></div>
                 <img src="images/product2.jpg" alt="Product 2">
                    <div class="info">
                        
                      <div class="product-price">$40</div>
                      <div class="product-discounted-price">$60</div>
                      <div> <a href="pages/products.html#discount"><button class="allbutton">Buy Now</button></div></a>
                     </div>
                 </div>
                    <div class="product">
                        <div class="productname"> <p>Azalea</p></div>
                    <img src="images/product3.jpg" alt="Product 3">
                    
                    <div class="info">
                        
                        <div class="product-price">$30</div>
                        <div class="product-discounted-price">$45</div>
                        <div> <a href="pages/products.html#discount"><button class="allbutton">Buy Now</button></div></a>

                </div>
                </div>
             </div>

<!-- the blog seection starts -->
        </div>  
        <div class="thirdpart">
            <div class="aboutus">
                <div class="product-container">
                    <!-- the blogs are linked to this container as whole  -->
                     <a href="pages/Blog Posts/Technology.html"><div class="product">
                       <div class="productname"> <p>The Influence of Technology</p></div>
                       <img src="images/forblog1.jpg" alt="blog1">
                       <div class="info">
                           
                        <div class="product-price">The impact of technology on society has been immense and far-reaching. Over the past few decades, technological advancements have completely transformed the way we live, work, and interact with each other.</div>
                    </a>
                        
                       </div>
                       
                    </div>
                    <!-- similar as above -->
                    <a href="pages/Blog Posts/blog2.html">
                    <div class="product">
                        
                            
                       <div class="productname"> <p>Pruning a Mature Bonsai Plant</p></div>
                    <img src="images/forblog2.jpg" alt="blog 2">
                       <div class="info">
                           
                         <div class="product-price">Pruning is an important aspect of bonsai care, as it helps to maintain the shape and size of the tree. It is essential...</div>
                         
                        </div>
                    </div></a>
                    <a href="pages/Blog Posts/blog3.html">
                       <div class="product">
                           <div class="productname"> <p>Shaping and Nurturing Your Bonsai</p></div>
                       <img src="images/forblog3.jpg" alt="blog 3">
                       <div class="info">
                           
                           <div class="product-price">Pruning is an important aspect of bonsai care, as it helps to maintain the shape and size of the tree. It is essential to prune mature bonsai plants....</div>
                           
   
                   </div>
                   </div></a>
                    
                </div>
                    
                
                
            </div>
            
            <div class="textblog">
               <h1 style="color:#00A36C">Here are some blogs...</h1>
               <p style="line-height: 30px; color: #aaa; padding-top: 20px;">Many people around the globe has trusted us for our excellent services. Lets hear what they have to say about us. We present you the honest feedbacks from our beloved clients who have helped us grow and are getting worldclass services with us.</p>
               <div class="buttonblog" style="padding-left: 200px; padding-top: 20px;">
                <a href="pages/blog.html">
                    <button class="allbutton"> Learn More</button>
                </a>
               </div>
            </div>
               
            
        </div>
         <!-- about section starts -->
        <div class="fourthpart" style="margin-top: 100px;">
            <!-- our features -->
        <div class="aboutustext">
            <h1 style="color:#00A36C;font-weight: lighter;padding: 20px;padding-bottom: 10px;"> Why choose us..</h1>
            <p style="padding: 20px;">Welcome to our online bonsai store, where you can find a wide selection of high-quality bonsai trees to enhance your home or office.</p>
            <!-- added pictures and explained 4 features -->
            <div class="aboutblock">
                <div class="objectabout">
                    <img src="images/truck.svg" alt="delivert">
                    <h3> Fast & Free Shipping</h3>
                    <p>We provide instant delivery with our delivery partners to your doorstep free of cost.</p>
                </div>
                <div class="objectabout">
                    <img src="images/bag.svg" alt="delivert">
                    <h3>Easy To Shop</h3>
                    <p>We provide you a variety of our featured and quality products for you to choose from...</p>
                </div>
                <!-- did same as above -->
            </div>
            <div class="aboutblock">
                <div class="objectabout">
                    <img src="images/support.svg" alt="delivert">
                    <h3> 24/7 Support</h3>
                    <p>We provide instant delivery with our delivery partners to your doorstep free of cost.</p>
                </div>
                <div class="objectabout">
                    <img src="images/return.svg" alt="delivert">
                    <h3>Hassle Free Returns</h3>
                    <p>We provide you a variety of our featured and quality products for you to choose from...</p>
                </div>
            </div>
                
        </div>
        <!-- our logo picture is kept here -->
        <div class="aboutuspictures">
            <img style="height: 80px; padding-left: 100px;padding-top: 200px;" src="images/logo.png" alt="our logo">
            
            <a href="pages/about.html" >
                <button class="allbutton" style="margin-left: 100px;margin-top: 40px;"> Learn More</button>
            </a>
        
        

        </div>
        </div>
        <hr>
        <!-- footer section starts it has contact section navigation section of all pages our location about us and our social media links-->
        <div class="footer"> 
              
            <div class="footermain" style="display: flex;">
                <div class="connect" style="margin-left: 70px;">
                    <!-- used image as links to social media -->
                    <img src="images/logo.png" alt="logo">
                    <h1>Connect with us</h1>
                    <div class="logosfooter" style="display: flex;">
                        <a href="https://www.instagram.com" target="_blank" title="Instagram"><img  src="images/insta.png" alt="instagram"></a>
                        <a href="https://www.facebook.com" target="_blank" title="Facebook"><img  src="images/facebook.png" alt="facebook"></a>
                        <a href="https://www.twitter.com" target="_blank" title="Twitter"><img  src="images/twitter.png" alt="twitter"></a>
                    </div>    

                </div> 
                 <!--diff links for diff page with hover effect  -->
                <div class="information" style="padding: 40px;padding-left: 120px;">
                    <h3 style="padding-bottom: 20px;">Navigate</h3>
                    <ul style="line-height: 30px;">
                    <li><a  style="color: #333;" href="index.html">Home</a></li>
                    <li><a style="color: #333;" href="pages/products.php">Products</a></li>
                    <li><a style="color: #333;" href="pages/blog.html">Blog</a></li>
                    <li><a style="color: #333;" href="pages/research.html">Research</a></li>
                    <li><a style="color: #333;" href="pages/about.html">About</a></li>
                    <li><a style="color: #333;" href="pages/contact.html">Contact</a></li>
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
                    <!-- phone number location and email is given here with small logo that acts as hyperlink -->
                </div> 
                <div class="contactusfooter" style="padding: 40px; padding-left: 80px;">
                    <h3 style="padding-bottom:20px ;"> Contact Us</h3>
                    <div style="display: flex;"><a href="tel: +9779842447841"><img style="height: 20px;" src="images/phone.png" alt="phone"></a>
                    <p style="padding-left: 28px;"> 9842447841</p>
                </div>
                <div style="display: flex; padding-top: 10px;">
                    <a href="mailto:Liltrees224@gmail.com"><img style="height:20px;" src="images/mail.png" alt="mail"></a><p style="padding-left: 20px;"> dawadiadarsha2018@gmail.com</p>
                </div>
                <div style="display: flex; padding-top: 10px;">
                    <a  href="https://goo.gl/maps/29yuvYstV8XH3wht8" target="_blank"><img style="height:20px;" src="images/location.png" alt="location"></a><p style="padding-left: 35px;"> City Center 5th floor</p>
                </div>

                    
                </div>      
                
            </div>
            <hr>
            <!-- the last copyright description at the bottom of the page -->
            <div class="Copyright" style="padding: 30px;">
                <div align="center" style="padding:0px 0px 10px 0px;font-size: 15px;font-family: Poppins-Regular;box-sizing:border-box;background:url(../background-images/white.png)">
                    Copyright &copy Lil Trees 2023.  All rights reserved
            </div>
                </div>
    </body>
</html>