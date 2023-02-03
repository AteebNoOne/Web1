<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>portfolio</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="container">

<?php @include 'header.php'; ?>

<section class="portfolio">

   <h1 class="heading">our portfolio</h1>

   <div class="portfolio-container">

      <a href="images/port-img-1.jpg" class="box">
         <div class="image">
            <img src="images/port-img-1.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

      <a href="images/port-img-2.jpg" class="box">
         <div class="image">
            <img src="images/port-img-2.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

      <a href="images/port-img-3.jpg" class="box">
         <div class="image">
            <img src="images/port-img-3.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

      <a href="images/port-img-4.jpg" class="box">
         <div class="image">
            <img src="images/port-img-4.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

      <a href="images/port-img-5.jpg" class="box">
         <div class="image">
            <img src="images/port-img-5.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

      <a href="images/port-img-6.jpg" class="box">
         <div class="image">
            <img src="images/port-img-6.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

   </div>

</section>

<?php @include 'footer.php'; ?>

</div>















<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

   lightGallery(document.querySelector('.portfolio .portfolio-container'));

</script>

</body>
</html>