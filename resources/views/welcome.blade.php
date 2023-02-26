<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Car Rental</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
        {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    scroll-padding-top: 2rem;
}
/*varaible*/
:root{
    --main-color:rgba(49, 9, 9, 0.267);
    --body-color:white(50, 148, 155);
    --container-color:black;
    --heading-color:black;
    --box-color:black;
    --bg-color:rgb(255, 255, 255);
}
body{
    color: rgb(3, 3, 3);
    background-image: linear-gradient( 174.2deg,  rgba(255,244,228,1) 7.1%, rgba(240,246,238,1) 67.4% );

}
img{
    width:100%
}
section{
    padding: 3rem 0 2rem;
}
a{
    text-decoration:none;
}
li{
    list-style: none;
}
.container{
    max-width: 960px;
    margin: auto;
    width: 100%;
}
header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1;
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 0;
    
    background-color: #333;
   

    
}
.logo{
    font-size: 1.2rem;
    font-weight:600 ;
    color:whitesmoke;
    
}
.navbar{
    display: flex;
    align-items: center;
   
    column-gap:1.5rem;
}
.nav-link{
    font-size: 0.94rem;
    padding: 4px 8px;
    border-radius:0.2rem;
    color:whitesmoke;
}
.nav-link:hover{
    color:#CE9FFC;
    background-color:#FD6585 ;
    transition: 0.3s all linear;
}
.menu-icon{
    display: none;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    row-gap: 5px;
    cursor: pointer;
    z-index: 200;
    transition: 0.3s;
}
.menu-icon div{
    display:block;
    background: whitesmoke;
    height: 2px;
    width: 24px;
    transition: 0.3s;
}
.move .line1{
    transform: rotate(-45deg)translate(-5px,5px);
}
.move .line2{
    opacity: 0;
}
.move .line3{
    transform: rotate(45deg)translate(-5px,-5px);
}
/*HOME*/
.home{
    min-height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 7rem;
}
.home-content{
    position: relative;
    max-width: 600px;
    width: 100%;
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.home-img{
    width: 500px;
    height: 100px;
    border-width: 50%;
    background:lightblue;
    overflow: hidden;
    margin-bottom: 2rem ;
    border-color: black;
}
.home-img{
    width: 49%;
    height: 70%;
    object-fit: center;
    object-position:center ;
}
.home-text{
    display: flex;
    flex-direction:column ;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.home-text h3{
    position: relative;
    display: flex;
    align-items: center;
    column-gap:0.5rem;
    font-size: 1.1rem;
    color: rgb(1, 1, 102);
}
.home-text h3::before{
    content: '';
    position: absolute;
    top: 50%;
    transform: translate(-50%);
    left: -15px;
    width: 20px;
    height: 2px;
    background: rgb(1, 1, 102);
}
.home-text h3::after{
    content: '';
    position: absolute;
    top: 50%;
    transform: translate(-50%);
    right: -35px;
    width: 20px;
    height: 2px;
    background: rgb(1, 1, 102);
}
.home-text h2{
    font-size: 3.5rem;
    line-height: 4.8rem;
}
.home-text p{
    font-size: 0.900rem;
    margin-bottom: 1.5rem;
}
.social{
    display: flex;
    align-items: center;
    column-gap: 0.5rem;
}
.social .bx{
    font-size: 1.3rem;
    padding: 10px;
    border-radius: 5px;
    color:white;
    background: black;
}
.social .bx:hover{
    background: #FD6585;
    transition: 0.3s all linear;
}
/*vehicles*/
.heading{
    font-size: 5rem;
    text-transform: uppercase;
    font-weight: 600;
    color: #B3315F;
    text-align: center;
    margin-bottom: 1.5rem;
}
.vehicles-content{
    display: grid;
    grid-template-columns: repeat(2,1fr);
    gap: 2rem;
}
.vehicles-box{
    position: relative;
    width:100%;
    height: 100%;
    border-radius:1rem;
    overflow:hidden;
    background-color: #fed6e3;
}
.vehicles-img{
    width:100%;
    height:100%;
    object-fit: cover;
    object-position:center;
    top:left;
}
.vehicles-overlay{
    position: absolute;
    top: -100%;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: hsl(234,45%,16%,0.7);
}
.vehicles-overlay h2{
    font-size: 1.6rem;
    font-weight: 600;
    margin: 10px;
}
.vehicles-overlay .bx{
    font-size: 24px;
    padding:10px;
    background:white;
    color: cornflowerblue;
    border-radius: 4px;
}
.vehicles-overlay .bx:hover{
    background: lightseagreen;
    transition: 0.3s all linear;
}
.vehicles-box:hover .vehicles-overlay{
    top:0;
    transition: 0.5s all linear;
}



/* howitworks*/
.howitworks-content{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    gap: 2rem;
}
.howitworks-box{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: left;
    padding: 15px;
    background-color: whitesmoke;
    border-radius: 0.4rem;
}
.howitworks-box:hover{
    transform:scale(1.05);
    transition: 0.5s all cubic-bezier(0.075, 0.82, 0.165, 1);
}
.howitworks-box .bx{
    font-size: 1.4rem;
    color: rgb(0, 0, 0);
    padding: 10px;
    border-radius: 5rem;
    border: 2px dashed rgb(98, 142, 156);
    margin-bottom: 1rem;
}
.howitworks-box h2{
    font-size: 1.1rem;
    font-weight: 1000;
    margin:0.5rem 0;
    color: black;
}
.howitworks-box p{
    font-size: 0.9rem;
}

/*about heading*/
.about-text p{
    font-size: 0.900rem;
    letter-spacing: 1px;
    text-align: justify;
    margin-bottom: 1.5rem;
}



/*contacts*/
.contact-form{
    max-width: 600px;
    margin: auto;
    width: 100%;
    display: grid;
    row-gap: 1rem;
}
.contact-form input,.contact-form textarea{
    border:none;
    outline: none;
    font-size: 0.9rem;
    padding: 15px;
    color: black;
    background-color: #80D0C7;
    border-radius: 0.4rem;
}
.contact-form .send-btn{
    width: 120px;
    font-size: 1rem;
    letter-spacing: 1px;
    font-weight: 500;
    text-transform: uppercase;
    padding: 12px;
    background-color: #80D0C7;
    cursor: pointer;
}
.contact-form .send-btn:hover{
    background-color: #80E0C7;
    transition: 0.3s all linear;
}


/*footer*/
.footer{
    display:flex;
    align-items: center;
    flex-direction: column;
    row-gap:1.4rem;
    padding: 30px 0;
}
.footer p{
    font-size: 0.9rem;
}
.footer-links{
    display:flex;
    align-items: center;
    column-gap:1rem;
}
.footer-links a{
    font-size: 1rem;
    font-weight:400;
    color:black;
}
.footer-links a:hover{
    color: blueviolet;
    transition: 0.3s all linear;
}
/*responsive*/
@media (max-width: 990px) {
    .container{
       margin: 0 auto;
       width: 90%; 
    }  
}
@media (max-width: 892px){
    section{
        padding: 2rem 0;  
    }
    .nav{
        padding:12px 0;
    }
    .heading{
    font-size:4rem;
    }
    .blog-box{
        height: 257px;

    }    
}
@media (max-width: 775px){
    .logo{
        font-size: 1.1rem;
    }
    .home{
        min-height: 500px;
        padding-top: 6rem;
    }
    .home-text h3{
        font-size: 1 rem;
    }
    .home-text h2{
        font-size:3.8rem;
        line-height: 3.8rem;
    }
    .home-text p{
        font-size:0.825rem;
    }
    .blog-content{
        grid-template-columns:(2,1r); 
    }
    .blog-box{
        height:245px;
    }
    .menu-icon{
        display: flex;
    }
    .navbar{
        position: absolute;
        top: 0;
        right:-100%;
        width: 100%;
        height:100vh ;
        background-color: #333;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding:50px 20px ;
        transition: 0.5s all cubic-bezier(0.075,0.82,0.265,1);
    }
    .open-menu{
        right:0;
        transition: 0.5s all cubic-bezier(0.075,0.82,0.265,1);

    }
    .nav-link{
        display:block;
        margin: 1rem 0;
    }
   
    


        </style>
</head>
<body>
    <header>
        <div class="nav container">
          <a href="#" class="logo">Car Rental</a>
          <ul class="navbar">
            <li><a href="#home" class="nav-link">Home<i class='bx bx-home'></i></a></li>
            <li><a href="#vehicles" class="nav-link">Vehicles</a></li>
            <li><a href="#howitworks" class="nav-link">How It Works </a></li>
            <li><a href="#about" class="nav-link">About Us</a></li>
            <li><a href="#contact" class="nav-link">Contact Us<i class='bx bxs-contact'></i></a></li>

          </ul>
          <div class="menu-icon">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
         </div>
        </div> 

    </header>
    <section class="home container" id="home">
    <div class="home-content">
        <div class="home-img">
          <img src="top.png" alt="">
        </div>
        <div class="home-text">
          <h3>Helloo</h3>
          <h2>Welcome to <span class="color ">Car Rental</span></h2>
          <p>
            Rent a car easily from anywhere.
             <br>Here is our social media handel.
          </p>
          <!--social-->
          <div class="social">
            <a href="https://www.facebook.com/bishyu.karki/"><i class='bx bxl-facebook'></i></a>
            <a href="https://www.instagram.com/bishalxx/"><i class='bx bxl-instagram'></i></a>
            <a href="https://www.linkedin.com/in/bishal-karki-269903211/"><i class='bx bxl-linkedin'></i></a>
          </div>
        </div>       
    </div>
    </section>

     <!--vehicles post -->
     <section class="vehicles container" id="vehicles">
      <!--heading-->
      <h2 class="heading">Featured Vehicles</h2>
      <!--vehicles content-->
      <div class="vehicles-content">
        <div class="vehicles-box">
          <img src="vehicles1.png" alt="" class="vehicles-img">
          <!--overlay-->
          <div class="vehicles-overlay">
            <h2>Vehicle 1</h2>
            <a href="#">
              <i class='bx bx-book-reader'></i>
            </a>
          </div>
        </div>
        <div class="vehicles-box">
          <img src="vehicles2.png" alt="" class="vehicles-img">
          <!--overlay-->
          <div class="vehicles-overlay">
            <h2>vehicles 2</h2>
            <a href="#">
              <i class='bx bx-book-reader'></i>
            </a>
          </div>
        </div>
        <div class="vehicles-box">
          <img src="vehicles3.png" alt="" class="vehicles-img">
          <!--overlay-->
          <div class="vehicles-overlay">
            <h2>vehicles 3</h2>
            <a href="#">
              <i class='bx bx-book-reader'></i>
            </a>
          </div>
        </div>
        <div class="vehicles-box">
          <img src="vehicles4.png" alt="" class="vehicles-img">
          <!--overlay-->
          <div class="vehicles-overlay">
            <h2>vehicles 4</h2>
            <a href="#">
              <i class='bx bx-book-reader'></i>
            </a>
          </div>
        </div>

      </div>
    </section>



    <!-- howitworks-->
    <section class="howitworks container" id="howitworks">
      <!--heading-->
      <h2 class="heading">How We Work</h2>
      <!--howitworks contain-->
      <div class="howitworks-content">
        <div class="howitworks-box">
          <i class='bx bx-current-location'></i>
          <h2>Renting a car</h2>
          <p>1. Browse our website and select the car that meets your needs.<br>
            2. Choose the rental period and any additional options you require.<br>
            3. Complete the online booking process and make your payment.<br>
            4. Collect your rental car at one of our convenient locations.<br>
            5. Enjoy your journey with peace of mind knowing that our cars are well-maintained and fully insured.</p>
        </div>
        <div class="howitworks-box">
          <i class='bx bx-cart-add' ></i>
          <h2>Buying a car</h2>
          <p>1. Browse our website and select the car that you're interested in buying.<br>
            2. Contact us to schedule a test drive or to ask any questions you may have.<br>
            3. Complete the purchase process and make your payment.<br>
            4. Collect your new car from one of our locations or have it delivered to your doorstep.<br>
            5. Enjoy driving your new car, knowing that it comes with a warranty and has been thoroughly inspected.</p>
        </div>
        <div class="howitworks-box">
          <i class='bx bx-money-withdraw' ></i>
          <h2>Selling a car</h2>
          <p> 1. Contact us to discuss your car and provide us with details such as the make, model, and year.<br>
            2. One of our experts will assess your car and provide you with a fair and competitive quote.<br>
            3. If you accept the quote, we will arrange for the car to be collected or you can bring it to one of our locations.<br>
            4. Upon receipt of the car, we will carry out a thorough inspection and pay you the agreed amount.<br>
            5. Your car will be added to our inventory and marketed to potential buyers.</p>
        </div>
      </div>
    </section>
  



  
  <!-- About-->
  <section class="about container" id="about">
    <!--heading About-->
   <h2 class="heading">About Us</h2>
   <div class="about-text">
    <p>At our car rental company, we believe that everyone deserves to have access to safe, reliable, and affordable transportation. That's why we have made it our mission to provide top-notch rental cars at unbeatable prices. Our vehicles are carefully maintained and kept in excellent condition, so you can enjoy a smooth, comfortable ride every time.</p>
    <p>Our team of experts is always on hand to help you find the best rental car for your needs. Whether you're looking for a compact car for a city trip or a large SUV for a family vacation, we have you covered. And with our flexible rental options, you can rent a car for just a few hours or for several weeks, depending on your needs.</p>
    <p>So why choose our car rental website? Here are just a few of the many reasons:<br>

     1. Wide range of vehicles: We offer a vast selection of vehicles, including compact cars, sedans, SUVs, vans, and more.<br>
     2. Affordable prices: We are committed to providing high-quality rental cars at prices that everyone can afford.<br>
     3. Convenient locations: With branches located in major cities and airports all over the world, we make it easy for you to rent a car, no matter where you're traveling.<br>
     4. Friendly and knowledgeable staff: Our team of experts is always ready to help.</p>
    <p>No matter whether you're looking to rent, buy, or sell a car, we make the process simple, fast, and hassle-free. Contact us today to learn more!</p>
   </div>
   </div>
  </section>
   


    <!--contact-->
    <section class="contact container" id="contact">
      <!--heading-->
      <h2 class="heading">Contact</h2>
      <!--contact form-->
      <form action="" class="contact-form" id="contact-form">
        <input type="text" placeholder="Your name" class="name" required>
        <input type="email" name="" id="" placeholder="Email address" class="email"required>
         <textarea name="" id="" cols="30" rows="10" placeholder="Message" class="message" required></textarea>
         <input type="submit" value="send" class="send-btn" >
      </form>
    </section>
    <!--footer-->
    <section class="footer" id="footer">
      <div class="social">
        <a href="https://mail.google.com/mail/u/0/#inbox"><i class='bx bxl-gmail'></i></a>
        <a href="https://www.facebook.com/bishyu.karki/"><i class='bx bxl-facebook'></i></a>
        <a href="https://www.instagram.com/bishalxx/"><i class='bx bxl-instagram'></i></a>
        <a href="https://www.linkedin.com/in/bishal-karki-269903211/"><i class='bx bxl-linkedin'></i></a>
      </div>
      <div class="footer-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions</a>
        <a href="#">Disclaimer</Datag></a>
      </div>
      <p>&#169; Car Rental</p>
    </section>



   
    <!--js link-->
    <script src="main.js"></script>
</body>
</html>