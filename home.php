<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

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

   <section class="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <span>Explore, Discover & Travel!</span>
                  <h3>Travel around the world, feel your life!</h3>
                  <a href="package.php" class="btn">Discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
               <div class="content">
                  <span>Explore, Discover & Travel!</span>
                  <h3>Discover the new places</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
               <div class="content">
                  <span>Explore, discover & travel!</span>
                  <h3>Make your tour worthwhile</h3>
                  <a href="package.php" class="btn">discover more</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

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



   <!-- about sylhet start -->
   <section class="about">
      <!-- section 1 -->

      <div class="image">
         <div class="box-container">
            <img src="images/aboutSylhet.jpg" alt="Sylhet Image">
            <p style="text-align: center;">The Ali Amjad Clock (Bengali: আলী আমজদের ঘড়ি) is the
               oldest clock tower of Bangladesh located on the bank of Surma River in Sylhet City. It is locally known as
               "Ghori Ghar" and a popular tourist attraction adjacent to the Keane Bridge.
            </p>
         </div>
      </div>

      <div class="content">
         <h3>About Our Sylhet</h3>
         <p>Sylhet (Bengali: সিলেট) is a metropolitan city in northeastern Bangladesh. It is the administrative seat of the Sylhet Division.
            Located on the north bank of the Surma River at the eastern tip of Bengal, Sylhet has a subtropical climate and lush highland
            terrain. The city has a population of more than half a million and is one of the largest cities in Bangladesh after Dhaka,
            Chittagong and Khulna. Sylhet is one of Bangladesh's most important spiritual and cultural centres. Furthermore, it is one of
            the most economically important cities after Dhaka and Chittagong. The city produces the highest amount of tea and natural gas.</p>
         <p>The hinterland of the Sylhet valley is the largest oil and gas-producing region in Bangladesh. It is also the largest hub
            of tea production in Bangladesh. It is notable for its high-quality cane and agarwood. The city is served by the Osmani
            International Airport, named after General Bangabir M A G Osmani, the Commander-in-Chief of the Mukti Bahini during the
            Bangladesh Liberation War. People from Sylhet form a significant portion of the Bangladeshi diaspora, particularly in the
            United Kingdom and the United States and other countries in the Middle East.
            [Source: <a href="https://en.wikipedia.org/wiki/Sylhet">Wikipedia</a>]</p>
      </div>
   </section>
   <section class="about">
      <!-- section 2 -->
      <div class="content">
         <h3>History of Sylhet</h3>
         <p>In 1303, the Sultan of Lakhnauti Shamsuddin Firoz Shah conquered Sylhet by defeating Gour Govinda.
            Sylhet was a realm of the Bengal Sultanate. In the 16th-century, Sylhet was controlled by the Baro-Bhuyan zamindars and
            later became a sarkar (district) of the Mughal Empire. Sylhet emerged as the Mughals' most significant imperial outpost in the
            east, and its importance remained as such throughout the seventeenth century. British rule began in the 18th century under the
            administration of the East India Company. Sylhet became a key source of lascars in the British Empire with its ancient
            seafaring tradition. The Sylhet municipal board was established in 1867. Originally part of the Bengal Presidency and
            later Eastern Bengal and Assam; the town was part of Colonial Assam between 1874 and 1947 when following a referendum and
            the partition of British India, it became part of East Bengal. The Sylhet City Corporation was constituted in 2001. The
            Government of Bangladesh designated Sylhet a metropolitan area in 2009. <br>
            [Source: <a href="https://en.wikipedia.org/wiki/Sylhet#History">Wikipedia</a>]</p>
      </div>

      <div class="image">
         <div class="box-container">
            <img src="images/Portuguese_map_of_CHT.jpg" alt="Sylhet Image">
            <p style="text-align: center;">Reino Sirote or Sylhet/Srihatta Kingdom mentioned in the historical Portuguese map of 16th century,
               created by João de Barros. The word Sirote resembles local name in Sylheti: ꠍꠤꠟꠐ (Silot)</p>
         </div>
      </div>



   </section>
   <section class="about">
      <!-- section 3 -->

      <div class="image">
         <div class="box-container">
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463252.4192036706!2d91.78562190167463!3d24.892539652046526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751b4a3d19b010d%3A0x30cd24eb1e7aad4c!2sSylhet%20District%2C%20Bangladesh!5e0!3m2!1sen!2sin!4v1658072531699!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            <p style="text-align: center;">The map of Sylhet</p>
         </div>
      </div>

      <div class="content">
         <h3>Geography and Climate</h3>
         <p>Sylhet is located at 24.8917°N 91.8833°E, in the northeastern region of Bangladesh within the Sylhet Division,
            the Sylhet District and Sylhet Sadar Upazila. Sylhet has a typical Bangladeshi tropical monsoon climate (Köppen Am) bordering on a
            humid subtropical climate (Cwa) at higher elevations. The rainy season starts from April to October and it is so hot and humid with
            very heavy showers and thunderstorms almost every day, whilst the short dry season starts from November to February and it is very
            warm and fairly clear. Nearly 80% of the annual average rainfall of 4,200 millimetres (170 in) occurs between May and September.
            The city is located within the region where there are hills and basins which constitute one of the most distinctive regions in
            Bangladesh. The physiography of Sylhet consists mainly of hill soils, encompassing a few large depressions known locally as "beels"
            which can be mainly classified as oxbow lakes, caused by tectonic subsidence primarily during the earthquake of 1762.
            Geologically, the region is complex having diverse sacrificial geomorphology; high topography of Plio-Miocene age. Available
            limestone deposits in different parts of the region suggest that the whole area was under the ocean in the Oligo-Miocene.
            In the last 150 years three major earthquakes hit the city, at a magnitude of at least 7.5 on the Richter Scale,
            the last one took place in 1918, although many people are unaware that Sylhet lies on an earthquake prone zone. <br>
            [Source: <a href="https://en.wikipedia.org/wiki/Sylhet#Geography_and_climate">Wikipedia</a>]
         </p>
      </div>
   </section>

   <section class="services">

      <h1 class="heading-title"> <iframe width="860" height="515" src="https://www.youtube.com/embed/FKjmo8itr84" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </h1>
   </section>
   <!-- about sylhet end -->


   <!-- vlog start -->
   <section class="reviews">

      <h1 class="heading-title"> Travel Vlogs </h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/dfxQtdCzyzA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3 style="align-items: center;">Sada Pathor</h3>
               <!-- <span>Adventure</span> -->
               <!-- <img src="images/pic-1.png" alt=""> -->
            </div>

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/JGB7MIkjrEw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3>Jaflong</h3>
               <!-- <span>Adventure & Nature</span> -->
               <!-- <img src="images/pic-2.png" alt=""> -->
            </div>

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/DqsUn2CuGiM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3>Lawachara National Park</h3>
               <!-- <span>Adventure and Nature</span> -->
               <!-- <img src="images/pic-3.png" alt=""> -->
            </div>

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/qBcnhG6ujoQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3>TreeTop Adventure Farm</h3>
               <!-- <span>Adventure</span> -->
            </div>

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/yRgM2wXz39c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3>Tilagar Eco Park</h3>
               <!-- <span>Zoo</span> -->
            </div>

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/iN_tnnEiVaA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3>Adventure World Fun & Family Tourism Park</h3>
               <!-- <span>Amusement Park</span> -->
            </div>

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/E8R7aiTXT8E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3>Ratargul Swamp Forest</h3>
               <!-- <span>Nature</span> -->
            </div>

            <div class="swiper-slide slide">
               <p><iframe width="350" height="350" src="https://www.youtube.com/embed/bmGJlU159Ok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
               <h3>Sripur Picnic Corner</h3>
               <!-- <span>Picnic & Nature</span> -->
            </div>

         </div>

      </div>

   </section>
   <!-- vlog end -->
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


   <section class="home-packages">

      <h1 class="heading-title"> our packages </h1>

      <div class="box-container">

         <div class="box">
            <div class="image">
               <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>Adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

         <div class="box">
            <div class="image">
               <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>Adventure & tour</h3>
               <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
               <a href="book.php" class="btn">book now</a>
            </div>
         </div>

      </div>

      <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

   </section>

   <!-- home packages section ends -->

   <!-- offer section  -->

   <section class="home-offer">
      <div class="content">
         <h3>Upto 50% off for you lucky traveler!</h3>
         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
         <a href="book.php" class="btn">Book Now</a>
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
            <a href="hotels.php"> <i class="fas fa-angle-right"></i> hotels</a>
            <!-- <a href="book.php"> <i class="fas fa-angle-right"></i> book</a> -->
            <a href="index.php"> <i class="fas fa-angle-right"></i> Login or Register</a>

         </div>

         <div class="box">
            <h3>extra links</h3>
            <a href="https://forms.gle/6GZXWHze8dyerDQg7"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
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