<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login or Register</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <section class="header">

        <a href="home.php" class="logo"><img src="images/tittle.png" width="170" height="90" alt="TripIt"></a>

        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="about.php">About</a>
            <a href="package.php">Package</a>
            <a href="hotels.php"> hotels</a>
            <a href="guide.php"> Guides</a>
            <a href="index.php">Log in</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>

    <section class="services">

        <h1  class="heading-title">Please Login or Register to book or contact a guide!</h1>
        <h1 class="heading-title"> <a href="index.php" class="btn">Login</a>  <a href="register.php" class="btn">Register</a></h1>
        <!-- <h1  class="heading-title">Or</h1> -->
        <!-- <h1 class="heading-title"> <a href="register.php" class="btn">Register!</a> </h1> -->


    </section>

    <section class="services">

        <h1 class="heading-title"> Our Services </h1>

        <div class="box-container">
            <div class="box" style="background-color: darkgreen;">
                <img src="images/icon-1.png" alt="">
                <h3>Adventure</h3>
            </div>

            <div class="box" style="background-color: darkolivegreen;">
                <img src="images/icon-2.png" alt="">
                <h3>Tour guide</h3>
            </div>

            <div class="box" style="background-color: green;">
                <img src="images/icon-3.png" alt="">
                <h3>Tracking</h3>
            </div>

            <div class="box" style="background-color: darkseagreen;">
                <img src="images/icon-4.png" alt="">
                <h3>Camp Fire</h3>
            </div>

            <div class="box" style="background-color: indianred;">
                <img src="images/icon-5.png" alt="">
                <h3>Off Road</h3>
            </div>

            <div class="box" style="background-color: dimgray;">
                <img src="images/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>

        </div>

    </section>


    <!-- maps start -->
    <section class="reviews">

        <h1 class="heading-title"> Top Destinations </h1>

        <div class="swiper reviews-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.0238896548626!2d91.7499734148447!3d25.168671183909467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750f12442357305%3A0x733fa65750530a4f!2sSada%20Pathor%20Volagonj!5e0!3m2!1sen!2sbd!4v1657866870300!5m2!1sen!2sbd" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>Sada Pathor</h3>
                    <span>Adventure</span>
                    <!-- <img src="images/pic-1.png" alt=""> -->
                </div>

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28889.977405816036!2d91.99015607308571!3d25.161130470412818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375044bd7d747f47%3A0xef2b6cb5bcade375!2sJaflong!5e0!3m2!1sen!2sbd!4v1657867058280!5m2!1sen!2sbd" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>Jaflong</h3>
                    <span>Adventure & Nature</span>
                    <!-- <img src="images/pic-2.png" alt=""> -->
                </div>

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8963.733504007696!2d91.7936253046067!3d24.341128532272464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375179d765c0cacf%3A0x7b17e70cae88f95d!2sLawachara%20National%20Park!5e0!3m2!1sen!2sbd!4v1657867264171!5m2!1sen!2sbd" width="350" height="352" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>Lawachara National Park</h3>
                    <span>Adventure and Nature</span>
                    <!-- <img src="images/pic-3.png" alt=""> -->
                </div>

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.618795879541!2d91.89004120351603!3d24.967011079781376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375055f3d49883e7%3A0xb7202af823b1d73!2sTreeTop%20Adventure%20Farm!5e0!3m2!1sen!2sbd!4v1657867490442!5m2!1sen!2sbd" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>TreeTop Adventure Farm</h3>
                    <span>Adventure</span>
                    <!-- <img src="images/pic-4.png" alt=""> -->
                </div>

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.429859761405!2d91.90418031483941!3d24.91742208402703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750549f7b9a00bf%3A0xcee115f7fab88dc2!2sTilagar%20Eco%20Park!5e0!3m2!1sen!2sbd!4v1657868267137!5m2!1sen!2sbd" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>Tilagar Eco Park</h3>
                    <span>Zoo</span>
                    <!-- <img src="images/pic-4.png" alt=""> -->
                </div>

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.429859761405!2d91.90418031483941!3d24.91742208402703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750549f7b9a00bf%3A0xcee115f7fab88dc2!2sTilagar%20Eco%20Park!5e0!3m2!1sen!2sbd!4v1657868267137!5m2!1sen!2sbd" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>Adventure World Fun & Family Tourism Park</h3>
                    <span>Amusement Park</span>
                    <!-- <img src="images/pic-4.png" alt=""> -->
                </div>

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.5857751523454!2d91.91651441484147!3d25.014187483981647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375051377216199b%3A0x1e9a24c0202a6d39!2sRatargul%20Swamp%20Forest!5e0!3m2!1sen!2sbd!4v1657868720320!5m2!1sen!2sbd" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>Ratargul Swamp Forest</h3>
                    <span>Nature</span>
                    <!-- <img src="images/pic-4.png" alt=""> -->
                </div>

                <div class="swiper-slide slide">
                    <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.809001934436!2d92.07266127628132!3d25.175926278341674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3750552555555555%3A0x63110c3e6e0471be!2sSripur%20Picnic%20Corner!5e0!3m2!1sen!2sbd!4v1657869018515!5m2!1sen!2sbd" width="350" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                    <h3>Sripur Picnic Corner</h3>
                    <span>Picnic & Nature</span>
                    <!-- <img src="images/pic-4.png" alt=""> -->
                </div>

            </div>

        </div>

    </section>
    <!-- maps end -->

    <section class="home-about">

        <div class="image">
            <img src="images/about-img2.png" alt="Logo of TripIt!">
        </div>

        <div class="content">
            <h3>About us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et, recusandae nobis fugit modi quibusdam ea assumenda, nulla quisquam repellat rem aliquid sequi maxime sapiente autem ipsum? Nobis, provident voluptate?</p>
            <a href="about.php" class="btn">Read more</a>
        </div>

    </section>



    <!-- offer section  -->

    <section class="home-offer">
        <div class="content">
            <h3>Upto 50% off for you lucky traveler!</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
            <a href="errormsg.php" class="btn">Book Now</a>
        </div>
    </section>

    <!-- offer section-->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="errormsg.php"> <i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="https://forms.gle/6GZXWHze8dyerDQg7"> <i class="fas fa-angle-right"></i> ask questions</a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
                <a href="opps.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="opps.php"> <i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+8801718382009"> <i class="fas fa-phone"></i> +8801718382009 </a>
                <a href="tel:+8801733735071"> <i class="fas fa-phone"></i> +8801733735071 </a>
                <a href="mailto:pritompaul1920@gmail.com?subject = Feedback&body = Message"> <i class="fas fa-envelope"></i> <p style="text-transform:lowercase ; display: inline;">pritompaul1920@gmail.com</p></a>
                <!-- <a href="mailto:pritompaul1920@gmail.com?subject = Feedback&body = Message"> <i class="fas fa-envelope"></i> pritompaul19@gmail.com</a> -->
                <a href="https://goo.gl/maps/C9t9o5vAL7unMEpa9"> <i class="fas fa-map"></i> Sylhet, Bangladesh </a>>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="https://www.facebook.com/pritompaul.pappu"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="opps.php"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="opps.php"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="opps.php"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>

        </div>

        <div class="credit"> created by <span>Akhi Sarker & Pritom Paul</span> | all rights reserved! </div>

    </section>

    <!-- footer section ends -->









    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>