
<?php
include('elements/dbconnect.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="SystemDesign.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Forgot Password</title>
</head>
<body>
   
<!-- header section starts  -->
<?php include 'elements/user_header.php'; ?>
<!-- header section ends -->


    <section class="form-container">
        <form action="password_reset_email.php"  method="POST">
          <h3>Forgot Password</h3>
          <h2>Reset your password<h2>
          <p style="color: black; font-size: medium;">  Enter your university email that entails @mynwu to Reset your password.</p>

          <input type="email" name="email" required placeholder="e.g 33525625@mynwu.ac.za" 
          class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
       
          <input type="submit" value="Submit" class="btn">
          
        </form>
    </section>


    <!--footer section starts-->
<footer class="footer">
  <section class="grid">
    <div class="box">
      <img src="images/email.pic.png" alt="">
      <h3>Our Email</h3>
      <a href="UniEats@gmail.com">UniEats@gmail.com</a>
    </div>

    <div class="box">
      <img src="images/time.pic.png" alt="">
      <h3>Our Operating Hours</h3>
      <p>08:00am to 19:00pm</p>
    </div>

    <div class="box">
      <img src="images/map.png" alt="">
      <h3>Our Address </h3>
      <a href="#">Mmabatho Unit 5, Mahikeng, 2790</a>
    </div>

    <div class="box">
      <img src="images/phone-book.png" alt="">
      <h3>Our Number</h3>
      <a href="tel:0115697894">011 569 7894</a>
      <a href="Phone:0787857895">078 785 7895</a>
    </div>
  </section>
<div class="credit"> created by <span>project x </span> |all rights reserved</div>
</footer>
<!--footer section ends-->

<!--loader section starts-->
<!--<div class="loader">
  <img src="images/loader.gif" alt="">
</div>
  loader section ends-->

<script src="homePage.js"></script>


   
</body>
</html>