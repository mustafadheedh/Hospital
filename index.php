
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medcare.</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#about">About Us</a>
        <a href="#doctors">Hospitals</a>
        <a href="#book">Contact Us</a>
        <a href="#review">Reviews</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>stay <span style="color: #16a085;">safe,</span> stay <span style="color: #16a085;">healthy</span></h3>
        <p>Right Solution For Your health!</p>
        <a href="./pages/login.php" class="btn"> Sign In <span class="fas fa-chevron-right"></span> </a>
       
    </div>

</section>

<!-- home section ends -->

<!-- icons section starts  -->

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <i class="fa-solid fa-syringe"></i>
        <h3>500+</h3>
        <p>Vaccines Avaliable</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>

<!-- icons section ends -->

<!-- services section starts  -->

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>24/7 Support</h3>
            <p>Contact Us Any Time For Any Query.</p>
        </div>

        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>Expert Doctors</h3>
            <p>Countries Best Doctors Avaliable</p>
        </div>

        <div class="box">
            <i class="fas fa-heartbeat"></i>
            <h3>total care</h3>
            <p>We Provide Complete Care To Our Patients</p>
        </div> 

    </div>

</section>

<!-- services section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Medcare is an online, Vaccination Booking System. We provide easy-to-use, in-depth, user-friendly, interactive system for patients.</p>
            <p>You can only book your appointment online. Don't need to call the vaccination clinic directly</p>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- doctors section starts  -->

<section class="doctors" id="doctors">

    <h1 class="heading"> Top <span>Hospitals</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/Hospital building-cuate.png" alt="">
            <h3>PIMS Hospital</h3>
            <span> Jinnah Avenue, <br> Islamabad</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/Hospital building-pana.png" alt="">
            <h3>Indus Hospital</h3>
            <span> Sector 39 Korangi, <br> Karachi</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/Hospital building-rafiki.png" alt="">
            <h3>RMI Hospital</h3>
            <span> Phase 5 Hayatabad, <br> Peshawar</span>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div>
        </div>

    </div>

</section>

<!-- doctors section ends -->

<!-- contact section starts   -->

<section class="book" id="book">

    <h1 class="heading"> <span>Contact</span> Us </h1>    

    <div class="row">

        <div class="image">
            <img src="image/book-img.svg" alt="">
        </div>

        <form method="post">
            <h3>Get In Touch</h3>
            <input type="text" placeholder="Your Name" id="c-name" name="contactname" class="box" required>
            <input type="email" placeholder="Your Email" id="c-email" name="contactemail" class="box" required>
            <textarea style=" overflow-y: scroll;height: 150px; resize: none;" placeholder="Your Message" id="c-mess" name="contactmess" class="box"></textarea>
            <input type="submit" value="Submit" name="contactbtn" id="c-btn" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->

<!-- review section starts  -->

<section class="review" id="review">
    
    <h1 class="heading"> Our <span>Reviews</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>Lucas dany</h3>
            <p class="text">The services that I received is excellent. the staff are friendly and ensure that I am properly informed about my health and care.</p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>Georgia James</h3>
           
            <p class="text">much helpful portal.highly satisfied.</p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>Noah Lee</h3>
           
            <p class="text">Great experience as a first timer. I barely waited to be helped when I checked in</p>
        </div>

    </div>

</section>

<!-- review section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>Quick Links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> Home </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> Services </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> About Us </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> Hospitals </a>
            <a href="#book"> <i class="fas fa-chevron-right"></i> Contact Us </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> Reviews </a>
        </div>

        <div class="box">
            <h3>Our Services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> 24/7 Support </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Expert Doctors </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> Total Care </a>
        </div>

        <div class="box">
            <h3>Contact Info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +923242795085 </a>
            <a href="#"> <i class="fas fa-phone"></i> +923373166016 </a>
            <a href="#"> <i class="fas fa-envelope"></i> ahproject2109@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Karachi, Pakistan - 75600 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>MedCare.</span> | all rights reserved </div>

</section>

<!-- footer section ends -->



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>