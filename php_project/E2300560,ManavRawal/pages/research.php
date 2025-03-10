<!DOCTYPE html>
<html lang="en">

<body>
        </body>
        </html>
        <html>
    <head>
        <!--CSS tags for the WEBPAGE-->
        <style>
            * {
                margin: 0px;
                padding: 0%;
                scroll-behavior: smooth;
            }
            .body {
                display: flex;
                justify-content: center;
                align-items: baseline;
                flex-direction: column;
                background-size: cover;
            }
            .research-div {
                position: relative;
                align-items: center;
                display: flex;
                box-sizing: border-box;
                justify-content: center;
                flex-wrap: wrap;
            }
            .content-title {
                display: flex;
                flex-direction: column;
                position: relative;
                background-image: url(../background-images/researchh.jpg);
                background-size: 100% 100%;
                justify-content: center;
                align-items: center;
                top: -40px;
                width: 100%;
                z-index: 1;
                height:600px;
            }
            .content-title::before {
                content: "";
                display: block;
                position: absolute;
                z-index: -1;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                background-color: rgb(200, 233, 200);
            }
            .content-title p{
                font-size: 20px;
            }
            .content-title span {
                font-size: 30px;
                color: rgb(112, 40, 40);
                font-family: Poppins-Bold;
                margin-bottom: 10px;
            }
            .research-card {
                display: flex;
                flex-direction: column;
                justify-content: left;
                flex-basis: 50%;
                margin: 50px 50px 50px 200px;
                line-height: 1.5;
                padding: 10px 30px;
                align-items: flex-start;
            }
            .research-content{
                display: flex;
                text-align: center;
                flex-direction: column;
                margin: 0px 50px;
            }
            .research-card a{
                color: #00A36C;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: bolder;
                width: 100%;
                padding-bottom: 5px;
                font-size: 25px;
                text-decoration: none;
                border-bottom: 1px solid #00A36C;
            }
            .research-card .research-content p a {
                color: #00A36C;
                font-family: Poppins-Regular;
                font-size: 14px;
                border-bottom: 1px solid;
                text-decoration: none;
            }
            .research-card .research-content p {
                text-align: center;
                font-size: 17px;
                margin-top: 20px;
                font-family: Poppins-Regular;
                width: 100%;
            }
            .research-card .images {
                margin-top: 15px;
                display:flex;
                flex-direction:row;
            }
        </style>
            <!--TITLE OF WEBSITE-->
             <title>Bonsai</title>
             <meta charset="UTF-8">
             <meta name="description" content="Bonsai plants">
         
             <!-- added some keywords you ac add-->
             <meta name="keywords" content="Bonsai plant,bonsai online,online store,online nurserty,botany,japanese plants">
             <meta name="author" content="group5">
             <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <link rel="stylesheet" href="../css/main.css">
    </head>
    <!--start of body-->
    <body>
        <!--division for class body-->
        <div class="body">
            <!--division for header-->
            <header>
                <nav>
                    <figure >
                        <!--logo -->
                        <a href="../index.html"><img src="../images/logo.png" alt="picture of bonsai" class="logo"></a>
                    </figure>
                    <!--division for navigationbar-->
                    <div class="navbar">
                        <ul>       
                            <li><a href="../index.html">Home</a></li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="research.html">Research</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="#"><img class="cart" src="../images/cart.png" alt="cart"></a></li>
        
        
                        </ul>
                    </div>    
                </nav>
                </header>
                <!--division for research heading of the page -->
            <div class="research-div">
                <!--division on the content of the heading-->
                <div class="content-title">
                    <span style="text-shadow:  1px 2px 3px rgba(127, 239, 192, 0.718);font-size:80px;color:#00A36C;font-family:Poppins-Bold">Research Section</span>
                    <span style="padding:5px;margin-top:20px;font-size:17px;text-align:center;background-color:rgb(200, 233, 200);mix-blend-mode: multiply;color: white;letter-spacing: 2.5px;font-family:'Open Sans'">
                        The researches that helped me build this site are all enlisted below.
                    </span>
                    <!--division for research part-->
                    <div id="research-part" style="position:absolute;bottom:30px;"></div>
                </div>
                <!--division for for design part-->
                <div class="design-research">
                    <!--alignment for the heading-->
                    <div style="text-align:center;font-size:60px;font-family:'Poppins-Regular'">For Design</div>
                    <hr><hr style="margin-bottom:20px;">
                    <!--division for the flexbox part-->
                    <div class="research-card">
                        <a target="_blank" href="https://web.dev/learn/css/flexbox/">1. FlexBox Design</a>
                        <!--photos for the flexbox-->
                        <div class="images"style="height:300px;">
                            <img src="../images/flexboxnet.png" alt="">
                            <hr style="margin:0px 20px;" >
                            <img style="width:500px;" src="../images/flexboxours.png" alt=""> <br>
                        </div>
                        <!--references and research from other website-->
                        <div class="research-content">
                            <p>It is important to properly arrange and align the contents when developing the layout of websites. Through this article, I was taught how to create a Flex Layout using HTML and CSS, which I then applied to my website.<a target="_blank" href="https://web.dev/learn/css/flexbox/">See more</a></p>
                        </div>
                    </div>
                    <!--division for scroll down part-->
                    <div class="research-card">
                        <a target="_blank" href="https://codepen.io/nxworld/pen/OyRrGy">2. Scroll Down Button</a>
                        <!--photos for scroll down button-->
                        <div class="images"style="height:300px;">
                            <img style="width:550px;" src="../images/scrolldownnet.png" alt="">
                            <hr style="margin:0px 20px;">
                            <img  style="width:550px;" src="../images/scrolldownours.png" alt="">
                        </div>
                        <!--references and research from other website-->
                        <div class="research-content">
                            <p>
                                I wanted user to feel more comfortable using my website so instead of scrolling down through mouse i created a button which scrolls down for you in desierd location i was able to do so with the help of this site.    
                                <a target="_blank" href="https://codepen.io/nxworld/pen/OyRrGy">See more</a></p>
                            </p>
                        </div>
                    </div>
                </div>
                <!--division for for animation part-->
                <div class="animation-research">
                    <!--alignment for the heading-->
                    <div style="text-align:center;font-size:60px;font-family:'Poppins-Regular'">For Animations</div>
                    <hr><hr style="margin-bottom:20px;">
                    <!--divisoin for button animation part-->
                    <div class="research-card">
                        <a target="_blank" href="https://www.w3schools.com/css/css3_buttons.asp">1. Button Animation</a>
                        <p style="margin-left:650px;word-spacing:150px"><u>Normal</u> <u>On-hover</u></p>
                        <!--photos for button animation-->
                        <div class="images"style="height:300px;">
                            <img style="width:550px;" src="../images/hoverbuttonnet.png" alt="">
                            <hr style="margin:0px 20px;">
                            <img style="height:60px;width: 100px; margin-left:40px" src="../images/hoverbuttonnonours.png" alt="">
                            <img style="height:60px;width: 100px; margin-left:100px" src="../images/hoverbuttonyesours.png" alt="">
                        </div>
                        <!--references and research from other website-->
                        <div class="research-content">
                            <p>
                                For the learn more  button, I wanted to make it look dramatic . For this, I searched on many sites but I found this to be best and used some idea to add animation on my learn more button. 
                                <a target="_blank" href="https://www.w3schools.com/css/css3_buttons.asp">See more</a></p>
                            </p>
                        </div>
                    </div>
                    <!--Division for blogs and images-->
                    <div class="content-research">
                        <!--alignment for the title-->
                        <div style="text-align:center;font-size:60px;font-family:'Poppins-Regular'">For Blog and Images</div>
                        <hr><hr style="margin-bottom:20px;">
                        <div class="research-card">
                            <a  target="_blank"href="https://www.useoftechnology.com/technology-society-impact-technology-society/">Technology Trends</a>
                            https://www.useoftechnology.com/technology-society-impact-technology-society/
                            <a target="_blank" href="https://tech.co/news/6-main-ways-technology-impacts-daily-life-2017-02">Impacts of Technology</a>
                            https://tech.co/news/6-main-ways-technology-impacts-daily-life-2017-02
                            <a target="_blank" href="https://www.youtube.com/watch?v=7UIBIaEZVWw">For CV</a>
                            https://www.youtube.com/watch?v=7UIBIaEZVWw
                            <a target="_blank" href="https://www.youtube.com/watch?v=ZGCIWr67XiI&t=527s">Scroll Down Button</a>
                            https://www.youtube.com/watch?v=ZGCIWr67XiI&t=527s
                        </div>
                </div>
            </div>
        </div>
        <!--this is footer section-->
        <div class="footer" style="background-color: whitesmoke;"> 
          
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
    </body>
</html>