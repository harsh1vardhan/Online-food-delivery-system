<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/Aboutimg.jpeg" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Welcoming and taking the responsibility of a great number of students at chandigarh university by providing them a self -sustaining platform where they can easily order and receive their food inside the college boundary .This website will serve the users all the facility to ease up their daily schedule .We ensure users of our website absolute and convincing environment .Further we will also upgrade and make modification to inculcate more user engagement .Our mission is to save our customers time and provide them with awesome opportunity too .</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">our team members</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/shubhimg.jpeg" alt="">
               <p>Second Year<br>BE-CSE<br>Chandigarh University</p>
               <h3>Shubhranshu Bhardwaj</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/" alt="">
               <p>Second Year<br>BE-CSE<br>Chandigarh University</p>
               <h3>Suchismita Behera</h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-3.png" alt="">
               <p>Second Year<br>BE-CSE<br>Chandigarh University</p>
               <h3>Harshvardhan</h3>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: false,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>