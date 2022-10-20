<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts -->
<?php include 'components/user_header.php'?>
<!-- header section ends -->

<div class="heading">
    <h3>about us</h3>
    <p>about / <a href="home.php">home</a></p>
</div>

<!-- about section starts -->

<section class="about">

    <div class="row">

        <div class="image">
            <img src="images/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>why choose us?</h3>
            <p>Are you looking for something delicious to eat and a place to relax? then our restaurant is exactly what you need. With a professional and welcoming stuff and a well kown chef, we are planing to put your hunger away.</p>
            <a href="menu.php" class="btn">our menu</a>
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- steps section starts -->

<section class="steps">

    <h1 class="title">3 simple steps</h1>

    <div class="box-container">

        <div class="box">
            <img src="images/step-1.png" alt="">
            <h3>select foods</h3>
        </div>

        <div class="box">
            <img src="images/step-2.png" alt="">
            <h3>fast delivery</h3>
        </div>

        <div class="box">
            <img src="images/step-3.png" alt="">
            <h3>enjoy food</h3>
        </div>

    </div>

</section>

<!-- steps section ends -->

<!-- review section starts -->

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

   <div class="swiper-slide slide">
      <img src="images/pic-1.png" alt="">
      <p>Really enjoyed it! Good food and nice people.</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <h3>Allan Marcuise</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/pic-2.png" alt="">
      <p>The food was good, but the wait was big</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Christine</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/pic-3.png" alt="">
      <p>I ate a pizza. Very good! Reminded me of Italy.</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Louis</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/pic-4.png" alt="">
      <p>Great!</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <h3>Marta</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/pic-5.png" alt="">
      <p>The desserts are amaizing! Relly delicious!</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <h3>Aron</h3>
   </div>

   <div class="swiper-slide slide">
      <img src="images/pic-6.png" alt="">
      <p>Very nice vibe and good food.</p>
      <div class="stars">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half-alt"></i>
      </div>
      <h3>Yui</h3>
   </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>



<!-- review section ends -->









<!-- footer section starts -->
<?php include 'components/footer.php'?>
<!-- footer section ends -->

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->
<script src="js/script.js"></script>

<script>
    var swiper = new Swiper(".reviews-slider", {
        grabCursor: true,
        loop:true,
        spaceBetween: 20,
        pagination: {
            clickable:true,
          el: ".swiper-pagination",
        },

      breakpoints: {
         640: {
            slidesPerView: 1,
         },
         768: {
            slidesPerView: 2,
         },
         1024: {
            slidesPerView: 3 ,
         },
      },
   });
</script>

</body>
</html>