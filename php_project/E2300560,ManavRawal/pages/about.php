<!DOCTYPE html>
<html lang="en">
<head>
    <!--CSS TAGS FOR THE WEBPAGE-->
    <style type="text/css">
.body{
    padding: 0;
    margin:0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background:#ffff;
}
.aboutsectionfirst{
	padding-top: 100px;
	padding-left:80px;
	padding-right:80px;
    border-top-right-radius: 10% 10%;
	background-color: whitesmoke;
    top: 100px;
    width:80%;
    height: 300px;
    text-align: center;
    align-items: 100px;
     display: flex;
}
.aboutsectionfirst h1{
    height: 40%;
}

.bg-section {
    background-image: url(../images/bonsaiabout.jpeg);
    background-size: cover;
    background-position: center;
    height: 100px;
    width: 100%;
}
.aboutsectionsecond{
	padding-top: -100px;
	padding-left:80px;
	padding-right:80px;
	background-color: whitesmoke;
    width:80%;
    height: 1000px;
    align-items: 100px;
    text-align:center;
}
.slider{
    width:1000px;
    height:500px;
    border-radius:20px;
    overflow: hidden;
    padding-right: 100px;
}
.slides{
    width: 500%;
    height: 500px;
    display: flex;
}
.slides input{
    display:none;
    padding: 100px;
}
.slide{
    width:60%;
    transition:2s;
}
.slide img{
    width: 600px;
    height: 500px;
}
.navigation-manual{
position: absolute;
width: 900px;
margin-top:-40px;
display: flex;
justify-content: center;
}
.manual-button{
    border: 2px solid rgb(200, 233, 200);
    padding: 5px;
    border-radius:10px;
    cursor: pointer;
    transition: 1s;
}
.manual-button:not(:last-child){
    margin-right: 40px;
}
.manual-button:hover{
    background:#40D3DC;
}
#radio1:checked~.first{
    margin-left: (0px);
}
#radio2:checked~.first{
    margin-left: -25%;
}
#radio3:checked~.first{
    margin-left: -65%;
}
#radio4:checked~.first{
    margin-left: -150%;
}
#radio5:checked~.first{
    margin-left: -240%;
}
.aboutmembers{
    display: flex;
        position: relative;
        left: 5px;
        padding: 40px;
        left: 20px;
}
.aboutmembers h1{
    font-size:30px;
    height:100px;
    width:250px;
    margin-left:50px;
}

.aboutmembers p{
    font-family: monospace;
    font-size:15px;
    width:250px;
    margin-left:50px;
}
.learnmore button{
    border-radius: 12px;
        background-color:#87ccb5;
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
        margin-left:50px;
        
}
.learnmore button:hover{
        color:whitesmoke;
        background-color: rgb(200, 233, 200);
}
.blurbackground img{
transition:.3s;
}
.blurbackground:hover img{
    filter:blur(3px) brightness(80%);;

}
.aboutsectionlast{
    padding-top: -100px;
	padding-left:80px;
	padding-right:80px;
	background-color: whitesmoke;
    width:80%;
    height: 800px;
    align-items: 100px;
}


  </style>
   <!--TITLE FOR THE WEBSITE-->
    <title>Bonsai</title>
    <meta charset="UTF-8">
    <meta name="description" content="Bonsai plants">
    
    <!-- added some keywords you ac add-->
    <meta name="keywords" content="Bonsai plant,bonsai online,online store,online nurserty,botany,japanese plants">
    <meta name="author" content="group5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body  class="bg-section">
    <header>
        <nav>
            <figure >
                <!--logo -->
                <a href="../index.html"><img src="../images/logo.png" alt="picture of bonsai" class="logo"></a>
            </figure>
            <div class="navbar">
                <!--START OF NAVBAR-->
                <ul>

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
    <!--body content start-->
    <div style="margin-bottom:100px">
    <h1>WHO ARE WE?</h1>
    </div>
    <!--first section for the page-->
    <section class="aboutsectionfirst">        
        <div>
            <h1 style="color:#00A36C;font-size:50px;">WHO ARE WE ?</h1>
        <p style="font-size:20px;color: #4d423d;">As a company, we are an ecommerce website specializing in the sale of bonsai plants and related products. Our mission is to
             provide customers with a wide variety of high-quality bonsai trees and accessories,while also offering exceptional customer
              service and support.We understand that bonsai is a delicate and intricate art form, and we strive to provide our customers 
              with the knowledge and resources they need to properly care for their bonsai trees. We do this by offering detailed product 
              descriptions and care instructions for each of our bonsai varieties, as well as providing educational resources such as articles 
              and videos on bonsai care.
            </p><br>
            <p style="font-size:20px;color: #4d423d;">We source our bonsai plants from some of the best cultivators and nurseries in the world. Our suppliers are chosen for their commitment 
                to producing high-quality trees that are healthy, attractive, and suitable for bonsai culture. We regularly inspect our suppliers' facilities
                 and review their growing practices to ensure that we are offering the best products to our customers.At our e-commerce site, we are committed to providing
                  exceptional customer service, fast and reliable shipping, and competitive prices. Whether you are a seasoned bonsai enthusiast or just getting started, we have 
                  everything you need to start your own bonsai collection.</p>
			
    </div>
</br>
    </section>
    <!--second section for the page-->
	<section class="aboutsectionsecond">
        <!--division for the heading-->
        <div>
		<h1 style="font-size:50px ;padding-top:200px;color:#00A36C;">MEET OUR TEAM</h1>
        </div>
        <!--slider division for full image slider-->
        <center><div class="slider"style="text-align:center" >
            <!--division for actual slide-->
            <div class="slides">
                <input type="radio" name="radio-button" id="radio1">
                <input type="radio" name="radio-button" id="radio2">
                <input type="radio" name="radio-button" id="radio3">
                <input type="radio" name="radio-button" id="radio4">
                <!--division for first slide-->
                <div class="slide first"style="padding-right:100px">
                    <!--division for members and their description-->
                    <div class="aboutmembers">
                        <!--for making blur background while hovering in photo-->
                        <div class="blurbackground">
                            <a href="Adarshaportfolio.html"><img src="../images/adarshaabout.jpg"></a></div>
                            <!--short description of member-->
                    <div>
                    <h1>Adarsha <span>Dawadi</span>, 19</h1>
                    <p>A highly organized and driven individual with leadership skills, responsible for managing the daily operations of the e-commerce website, including overseeing the processing of customer orders, coordinating with suppliers and logistics companies, and analyzing data to identify areas for improvement.</p>
                    <br> <p style="color: rgb(39, 24, 24);">E-Commerce Operations Manager</p>
                    <center><br><div class="learnmore"><a href="Adarshaportfolio.html"><button> Learn More</button></a></div></center>
                </div>
                </div>
                </div>
                <!--division for second slide-->
                <div class="slide">
                    <!--division for members and their description-->
                    <div class="aboutmembers">
                        <!--for making blur background while hovering in photo-->
                        <div class="blurbackground">
                            <!--short description of member-->
                        <a href="Amoghportfolio.html"><img src="../images/Amoghabout.jpg"></a></div>
                    <div>
                        <h1>Amogh Man <span>Bajracharya</span>,19</h1>
                        <p>A friendly and professional individual with excellent communication skills, able to handle customer inquiries and complaints and resolve issues in a timely manner, possessing a good understanding of the company's products and services.</p>
                        <br><p style="color: rgb(20, 6, 6);">E-Commerce Customer Service Representative</p>
                        
                        <center><br><div class="learnmore"><a href="Amoghportfolio.html"><button> Learn More</button></div></center></a>
                    </div>  
                </div>
                </div>
                <!--division for third slide-->
                <div class="slide">
                     <!--division for members and their description-->
                    <div class="aboutmembers">
                        <!--for making blur background while hovering in photo-->
                        <div class="blurbackground">
                            <a href="krishaportfolio.html"><img src="../images/krishaabout.jpg"></a></div>
                            <!--short description of member-->
                    <div>
                        <h1>Krisha <span>bhainsink</span>, 19</h1>
                        <p>A data-driven and creative individual with experience in digital marketing, responsible for developing and implementing marketing strategies to drive traffic and sales to the e-commerce website through email marketing, search engine optimization, social media marketing, and content creation.</p>
                        <br><p style="color: rgb(18, 6, 6);">E-Commerce Marketing Specialist</p>
                        <center><br><div class="learnmore"><a href="krishaportfolio.html"><button> Learn More</button></a></div></center>
                    </div>
                </div></div>
                <!--division for fourth slide-->
                <div class="slide">
                    <!--division for members and their description-->
                    <div class="aboutmembers">
                        <!--for making blur background while hovering in photo-->
                        <div class="blurbackground">
                            <a href="sushanportfolio.html"><img src="../images/sushanabout.cr2"></a></div>
                             <!--short description of member-->
                    <div>
                        <h1>Sushan <span>Shakya</span>, 19</h1>
                        <p> An analytical and collaborative individual with strong market research skills, responsible for overseeing the selection and management of products offered on the e-commerce website, including conducting market research, negotiating with suppliers, and creating product descriptions and images.</p>
                      <br> <p style="color: rgb(22, 10, 10);">E-Commerce Product Manager</p>
                      <center><br><div class="learnmore"><a href="sushanportfolio.html"><button> Learn More</button></a></div></center>
                    </div>
                </div></div>
                <!--division for fifth slide-->
                <div class="slide">
                    <!--division for members and their description-->
                    <div class="aboutmembers">
                        <!--for making blur background while hovering in photo-->
                        <div class="blurbackground">
                    <a href="shivangiportfolio.html"><img src="../images/shivangiabout.jpg"></a></div>
                    <!--short description of member-->
                </div>
                </div>
            </div>
            <!--division for manual button-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-button"></label>
                <label for="radio2" class="manual-button"></label>
                <label for="radio3" class="manual-button"></label>
                <label for="radio4" class="manual-button"></label>
            </div>
        </div>
        </center> 
    </section>
    <!--last section division for why us topic-->
    <section class="aboutsectionlast">
           <center> <h1 style="font-size:50px;color:#00A36C">Why Us?</h1></center><br><br>
            <p style="font-size:20px;color: #4d423d; width:900px;">1.Exceptional Customer Service: Our dedicated team is available to answer any questions and provide advice to ensure that our customers have the best possible experience.

                <br><br><br><br>2.Wide Selection of Bonsai Trees: With a diverse range of bonsai trees available, including popular and exotic species, customers are sure to find what they are looking for.
                
                <br><br><br><br>3.High-Quality Plants: We source our plants from top cultivators and regularly inspect them to ensure that they are healthy and ready to flourish in their new home.
                
                <br><br><br><br>4.Fast and Reliable Shipping: We have established a reputation for fast and efficient shipping, delivering plants to customers quickly and in excellent condition.
                
                <br><br><br><br>5.Expert Staff: Our staff consists of experienced bonsai enthusiasts and experts who are always available to answer questions and provide advice.
                 </p>
    </section>
    <hr>
    <!--this is footer-->
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

    <script type="text/javascript">
        var count=1;
        setInterval(function(){
            document.getElementById("radio" + count).checked  = true;
            count++;
            if (count> 5){
                count=1;
            }
        },5000);
    </script>
</body>
</html>