<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ECO-TOURISM </title>
   <link rel="icon" href="images/icon.jpg">
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo.jpg"></a>
   <nav class="navbar">
      <a href="home.php" class="active">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>
<!-- header section ends -->
<!-- home section starts  -->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>tour arround the universe</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>search, express, tour</span>
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>
<!-- home section ends -->
<!-- services section starts  -->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <a href="https://www.google.co.in/maps"> 
         <img src="images/icon-2.png" alt="">
         <h3 >tour guide</h3>
         </a>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>
<!-- services section ends -->
<!-- home about section starts  -->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>about us</h3>
      <p>Amazing Tours a Best tour Operator and Travel agent in Bangladesh. We are Tour Package, Hotel booking. Bangladesh Tours & Travel agent. Find international and domestic tour packages from bangladesh at low prices including best ... Travel Package | Honeymoon Package | Tour Package</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>
<!-- home about section ends -->
<!-- home packages section starts  -->
<section class="home-packages">
   <h1 class="heading-title"> our packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <a href="https://www.google.com/maps/place/Megamalai,+Tamil+Nadu/@9.6453047,77.4013102,16.25z/data=!4m15!1m8!3m7!1s0x3b06e220ff8697f1:0xf576d7c048845f44!2sMegamalai,+Tamil+Nadu!3b1!8m2!3d9.6461181!4d77.4013403!16s%2Fg%2F12hkzl2cf!3m5!1s0x3b06e220ff8697f1:0xf576d7c048845f44!8m2!3d9.6461181!4d77.4013403!16s%2Fg%2F12hkzl2cf?entry=ttu&g_ep=EgoyMDI0MTAwNy4xIKXMDSoASAFQAw%3D%3D">
            <h3>Megamalai</h3>
            <p>The mountain range is 1,500 metres above sea level, and it is rich in flora and fauna</p>
            <h2>₹ 1,500</h2>
            </a>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-2.jpg" alt="">
         </div>
         <div class="content">
            <a href="https://www.google.com/maps/place/Kolukkumalai,+Kottakudi,+Kottagudi,+Tamil+Nadu+625582/@10.0826638,77.1828757,14z/data=!3m1!4b1!4m6!3m5!1s0x3b0775c3e0a9aaad:0x1c4115833f0aeb27!8m2!3d10.0826663!4d77.2218449!16s%2Fm%2F012r2bt8?entry=ttu&g_ep=EgoyMDI0MTAwNy4xIKXMDSoASAFQAw%3D%3D">
            <h3>Kolukkumalai Tea Estate Munnar</h3>
            <p>Kolukkumalai Tea Estate tour offers a view of the plains of Tamil Nadu and the hills of Kerala</p>
            <h2>₹3,000</h2>
            </a>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <a href="https://www.google.com/maps/place/Kalvarayan+Hill/@11.7042658,78.4308815,11z/data=!4m10!1m2!2m1!1sKalvarayan+Hills!3m6!1s0x3bab799b37d2ac49:0x8d889779c8d89a3d!8m2!3d11.7042658!4d78.7357521!15sChBLYWx2YXJheWFuIEhpbGxzWhIiEGthbHZhcmF5YW4gaGlsbHOSAQRwZWFrmgEjQ2haRFNVaE5NRzluUzBWSlEwRm5TVU54TVdaSFFVcG5FQUXgAQA!16s%2Fg%2F1v6wmrnl?entry=ttu&g_ep=EgoyMDI0MTAwNy4xIKXMDSoASAFQAw%3D%3D">
            <h3>Kalvarayan Hills</h3>
            <p>Discover the magnificent Kalvarayan Hills, a majestic range of mountains that separates the Kaveri and Palar river basins in southern India.</p>
            <h2>₹1,900</h2>
            </a>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>
<!-- home packages section ends -->





<!-- home offer section starts  -->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/offer.jpg">
      </div>
   </div>
   <div class="content">
      <h3>upto 40% off</h3>
      <p>Bali Dynasty Resort is centrally located within walking distance to the nightlife and excitement of the Kuta area. This popular Bali accommodation offers a wide range of room types to suit families and couples. The kids can enjoy the kids club while the adults spoil themselves at Ashoka Spa or the Beach Club. For a memorable and relaxing stay in Kuta why not stay at Bali Dynasty Resort.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>
<!-- home offer section ends -->

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
<!-- footer section starts  -->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-8667058627</a>
         <a href="#"> <i class="fas fa-phone"></i> +111-2222-333333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> greenHarizon@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> TAMIL NADU </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.linkedin.com/in/lena-tamil-48a1b0283/"> <i class="fab fa-linkedin"></i> linkedin </a>
         <a href="https://x.com/lena_tamil"> <i class="fab fa-facebook-f"></i> X </a>
         <a href="https://www.instagram.com/__lena__tamil__/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.hackerrank.com/profile/lenatamil519"> <i class="fab fa-twitter"></i> Hackerrank </a>
      </div>
   </div>
   <div class="credit"> designed by <span>Nature's navigators</span> | all rights reserved! </div>
</section>
<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>