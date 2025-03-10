<!DOCTYPE html>
<html lang="en">
<head>
   <!--Title of bonsai-->
    <title>Bonsai</title>
    <meta charset="UTF-8">
    <meta name="description" content="Bonsai plants">
    <meta name="keywords" content="Bonsai plant,bonsai online,online store,online nurserty,botany,japanese plants">
    <meta name="author" content="group5">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <!--CSS FOR THE WEBPAGE-->
    <style>
        .maincontent{
    width: 100%;
    height: 900px;
    background-image:whitesmoke;
    background-position:full;
    background-size: cover;
    display: flex;
    align-items:center;
    justify-content:center; 
}

    .maincontent h2{
        position:absolute;
        font-family: default;
        align-items:center;
        height: 600px ;
        color: #00A36C;
        justify-content: first baseline;
        font-size:250%;
    }
    
form{
    width: 100%;
    max-width: 500px;
   max-height: 50%;

}
.input-group{
    font-family:default;
    margin-top: 20px;
    position: relative;
}

input, textarea{
width: 100%;
padding: 13px;
border: 2px solid rgb(62, 70, 77);
background: transparent ;
font-size: 20px;
align-content: center;
border-radius:25px;

}

label{
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    padding: 10px;
    color:rgb(15, 19, 23);
    cursor: text;
    transition: 0.3s;

}
button{
     padding: 10px 0;
     color:rgb(10, 18, 26);
     outline: rgb(13, 18, 23);
     background: transparent;
     border: 2px solid rgb(13, 24, 33);
     width: 105%;
     border-radius: 25px;
     cursor: pointer;
     font-family:default;
}
.message{
    width: 105%;
    position: relative;
    margin-bottom: 50px;
    display: flex;
    justify-content: center;
    height: 1px;
    font-style: italic;
    
}
.message .success{
    font-size: 20px;
    color: lightgreen;
    position: absolute;
    animation: buttons .3s linear;
    display: none;
}
.message .danger {
    font-size: 20px;
    color: lightcoral;
    position: absolute;
    animation: buttons .3s linear;
    display: none;
}

input:focus-within~label,
input:valid~label,
textarea:focus~label,
textarea:valid ~label{
    top: -35px;
    font-size: 14px;
}
.row{
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.row .input-group{
    flex-basis: 46%;
}

    </style>
</head>
<!--BODY of the WEBSITE-->
<body>
    <header>
        <nav>
            <figure >
                <!--logo -->
                <a href="../index.html"><img src="../images/logo.png" alt="picture of bonsai" class="logo"></a>
            </figure>
            <!-- division for navigationbar-->
            <div class="navbar">
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
    <section>
        <!--division for main content-->
        <div class="maincontent" style="">
           
           <h2>   Contact Us  </h2>
               <form onsubmit="sendEmail(); reset(); return false;"> 
                <!--division for the row of form-->  
                   <div class="row">
                    <!--inputbox of your name-->
                       <div class="input-group">
                           <input type="text" id="Full Name"  required>
                           <label for="name"><i class="fas fa-user"></i> Your Name</label> 
                          <span id="name-error" ></span>
                       </div>
                       <!--inputbox for Phone Number-->
                           <div class="input-group">
                               <input type="text" id="number" required>
                               <label for="number"><i class="fas fa-phone-square-alt"></i> Phone Number</label> 
                               <span id="phone-error"></span>
                               
                           </div>
                   </div>
       <!--inputbox for Email-ID-->
        <div class="input-group">
               <input type="email" id="email" required>
               <label for="email"><i class="fas fa-envelope"></i> Email Id </label> 
               <span id="email-error"></span>
           </div>
       <!--inputbox for your message-->
           <div class="input-group">
               <textarea id="message" rows="8"required></textarea>
               <label for="message"><i class="fas fa-comments"></i>Your Message</label> 
               <span id="message-error"></span>
           </div>
           <button type="submit" onclick="message()">Send  <i class="fas fa-paper-plane"></i></button>
                <!--division for css and form validation javascript merge-->
                   <div class="message">
                       <div class="success" id="success">Your message is successfully sent!</div>
                       <div class="danger" id="danger">Fields can't be empty!</div>
                    </div>
             
               </form>
        </div>
           </section>
           <!--division for footer-->
        <section>
            <hr>
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
                        <li><a  style="color: #333;" href="index.html">Home</a></li>
                        <li><a style="color: #333;" href="pages/products.html">Products</a></li>
                        <li><a style="color: #333;" href="pages/blog.html">Blog</a></li>
                        <li><a style="color: #333;" href="../pages/research.html">Research</a></li>
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
    
         <!--division for javascript-->  
           
       <script src="/script.js"></script>
           <script src="https://smtpjs.com/v3/smtp.js"></script>
       
       <script> 
      function sendEmail() {
            var element = document.getElementById("email");
            if(element.checkValidity()) {
            //if valid email entered
            alert("Your feedback has been submitted")
            document.getElementById("Send").reset();
            return false;
  }
}
       </script>
        
</body>
</html>