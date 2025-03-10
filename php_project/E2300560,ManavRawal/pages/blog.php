<!DOCTYPE html>
<html lang="en">
<head>
    <!--internal css for background-->
    <style>
        .bg-section {
            background-image: whitesmoke;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
   <!--here i have just assigned temporary title as bonsai-->
    <title>Bonsai</title>
    <meta charset="UTF-8">
    <meta name="description" content="Bonsai plants">

    <!-- added some keywords you ac add-->
    <meta name="keywords" content="Bonsai plant,bonsai online,online store,online nurserty,botany,japanese plants,technology">
    <meta name="author" content="group5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="bg-section">
    <header>
        <nav>
            <figure >
                <!--this is logo -->
                <a href="../index.html"><img src="../images/logo.png" alt="picture of bonsai" class="logo"></a>
            </figure>
            <div class="navbar">
                <ul>
                    <!-- this is navigation bar-->

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
    <br>
    <br>
    <br>
    <!--internal css for the blog-->
    <style>
        .post-wrapper a:hover {
            color: #00A36C;
        }
        .post:hover {
            transform: scale(1.1);
        }
        .post-slider {
            border: none;
        }
        .post-slider .slider-title{
            margin: 20px;
            color: #00A36C;
            padding: 20px 20px;
            text-align: center;
        }
        .post-slider .post-wrapper {
            width: 80%;
            height: 350px;
            margin: 0px auto;
            padding: 16px 0px 16px 0px;
            display: flex;
            flex-wrap: nowrap;
        }
        .post-slider .post-wrapper .post {
            width: 350px;
            height: 340px;
            margin: 1px 20px;
            background: whitesmoke;
            display: inline-block;
            box-shadow: 16px 16px 16px 16px rgb(228, 230, 233);
            border-radius: 16px;
            transition: all 0.5s ease;
        }
        .post-slider .post-wrapper .post .post-info {
            height: 90px;
            padding: 0px 16px;
        }
        .post-slider .post-wrapper .post .slider-image {
            width: 100%;
            height: 250px;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
        }
    </style>

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!-- Post Slider -->
        <div class="post-slider">
            <!--Header-->
            <h1 style="font-size: 70px;" class="slider-title">BLOGS</h1>
            <!--to contai the post in a area-->
            <div class="post-wrapper">
                <!--the block for post-->
                <div class="post">
                    <!--link to refering to through image blog post-->
                    <a href="../pages/Blog Posts/Technology.html">
                        <!--cover image for the post-->
                        <img src="../images/forblog1.jpg" alt="bonsai" class="slider-image">
                    </a>
                    <!--info about the blog-->
                    <div class="post-info">
                        <!--link to post through Blog Title-->
                        <h3><a href="../pages/Blog Posts/Technology.html">The Influence of Technology</a></h3>
                        <h4>
                            <!--Author and date of blog-->
                            <i>From Anna Redhawk,</i>
                            &nbsp;
                            <i>1 Jan, 2023</i>
                        </h4>
                    </div>
                </div>
                <!--using same thing to make post similar-->
                <div class="post">
                    <a href="../pages/Blog Posts/blog2.html">
                    <img src="../images/forblog2.jpg" alt="bonsai" class="slider-image">
                    </a>
                    <div class="post-info">
                        <h3><a href="../pages/Blog Posts/blog2.html">Pruning a Mature Bonsai Plant</a></h3>
                        <h4>
                            <i>From Jojo Foder,</i>
                            &nbsp;
                            <i>Jan 19,2023</i>
                        </h4>
                    </div>
                </div>

                <div class="post">
                    <a href="../pages/Blog Posts/blog3.html">
                    <img src="../images/forblog3.jpg" alt="bonsai" class="slider-image">
                    </a>
                    <div class="post-info">
                        <h3><a href="../pages/Blog Posts/blog3.html">Shaping and Nurturing Your Bonsai</a></h3>
                        <h4>
                            <i>From Bonou Baker,</i>
                            &nbsp;
                            <i>Jan 30,2023</i>
                        </h4>
                    </div>
                </div>

            </div> 
        </div>
    </div>

    <!--page wrapper for another row of posts-->
    <div class="page-wrapper">

        <!-- Post Slider -->
        <div class="post-slider">
            

            <div class="post-wrapper">

                <div class="post">
                    <a href="../pages/Blog Posts/blog4.html">
                    <img src="../images/forblog4.jpg" alt="bonsai" class="slider-image">
                    </a>
                    <div class="post-info">
                        <h3><a href="../pages/Blog Posts/blog4.html">Art of Cultivating Miniature Trees</a></h3>
                        <h4>
                            <i>From Coco Torre,</i>
                            &nbsp;
                            <i>21 Jan, 2023</i>
                        </h4>
                    </div>
                </div>

                <div class="post">
                    <a href="../pages/Blog Posts/blog5.html">
                    <img src="../images/forblog5.jpg" alt="bonsai" class="slider-image">
                    </a>
                    <div class="post-info">
                        <h3><a href="../pages/Blog Posts/blog5.html">Environmental Impact of Bonsai</a></h3>
                        <h4>
                            <i>From Zoro Hunter,</i>
                            &nbsp;
                            <i>Feb 1,2023</i>
                        </h4>
                        
                    </div>
                </div>

                <div class="post">
                    <a href="../pages/Blog Posts/blog6.html">
                    <img src="../images/forblog6.jpg" alt="bonsai" class="slider-image">
                    </a>
                    <div class="post-info">
                        <h3><a href="../pages/Blog Posts/blog6.html">Fast Growing Bonsai</a></h3>
                        <h4>
                            <i>From Elon Husk,</i>
                            &nbsp;
                            <i>Jan 27,2023</i>
                        </h4>
                    </div>
                </div>

            </div> 
        </div>
    </div>
    <br>
    <br>
    <br>
    <hr>
        <!--footer-->
        <div class="footer"> 
              
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
                    <li><a  style="color: #333;" href="../index.html">Home</a></li>
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
</body>
</html>