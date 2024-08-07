<!DOCTYPE html>
<?php
session_start();
 include ('mycon.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scent By Anike</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- This webiste is created by Omobolanle Azeezat -->

<link rel="stylesheet" href="style.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<!--Google map-->

<script src="map.js"></script>

<!-- font awesome -->
<script src="https://kit.fontawesome.com/ba9d34204b.js" crossorigin="anonymous"></script>

<!--favico icon-->
<link rel="icon" href="images/logoaniks.png">

</head>


<body>
 
  
    <nav class="navbar navv">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <i class="fa-solid fa-bars"></i>                       
          </button>
          <div class="margint">
          <img src="images/logoaniks.png" alt="logo" class="logoimg">
       
          <a href="#" class="scent"> Scent By Anike </a>
          </div>
           
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right liist">
            <li><a href="index.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Home">HOME</a></li>
            <li><a href="shop.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Shop">SHOP</a></li>
            <li><a href="about.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="About">ABOUT</a></li>
            <li><a href="contact.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Contact">CONTACT</a></li>
            <li><a href="feedback.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Feedback">FEEDBACK</a></li>
            <li><a href="blog.php" class="liist2" data-toggle="tooltip" data-placement="bottom" title="Blog">BLOG</a></li>
            </ul>
            </div>
            </nav>


            <main id="home">
            
            <?php include('topnav.php'); ?>
            

            
           
            
      <div class="container-fluid">       
      <div class="container1">
      <img src="img/lperfb.jpg" alt="bgimage" class="img-responsive" id="img1">
       <div class="texton">
       <h1 class="h1">Keep Yourself <br>Fresher</h1>
       <p class="p1">Men/Women/Kids Fragrance</p>
       <a href="shop.html">
        <button type="button" class="btn btn-primary bttn">Shop
      </button>
      </a>
      </div>
      </div>
      </div>

    
    <div class="container">
      <h3 class="long"><strong>
       The long-lasting Fragrance makes for a perfect refreshing everyday scent.
      </strong></h3>
      <p><b>Welcome to Scent By Anike, your ultimate destination for exquisite fragrances and personal care products. Whether you're searching for the perfect perfume, refreshing body sprays, convenient roll-ons, or delightful scents for men, women, ladies, and even kids, we have something for everyone. Our collection is curated to ensure you always smell nice and feel confident, no matter the occasion. Explore our diverse range and discover your signature scent today!</b></p>
      <div class="grid1">
      <div class="gift">
        <h3><span class="glyphicon glyphicon-gift"></span><br>Perfumes of all times</h3>
       <p>The long-lasting fragrance<br>
        makes for a perfect refreshing<br>
        everyday secret that can be<br>
        use all year round.</p>
      </div>

      <div class="comment">
        <h3><i class="fa-regular fa-comment"></i><br>Customer Review</h3>
       <p>I have wanted this perfume<br>
        for the longest time and couldn't<br>
        find it price anywhere for a good <br>
        price anywhere until i discovered<br>
        this site.</p>
      </div>

      </div>
     </div>
     </main>
    
     

<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><strong>Scent By Anike</strong></p>
  <div>
  <a href="https://wa.me/message/ZHJH5PW4BLDIH1" title="WhatsApp"><i class="fa-brands fa-whatsapp whatsapp"></i></a>
  <a href="https://www.facebook.com/adeola.nasir.9?mibextid=ZbWKwL" title="Facebook"><i class="fa-brands fa-facebook fb"></i></a>
  <a href="https://www.instagram.com/lady_anike?igsh=YTFpMmFwZWx6Y3Vy" title="Instagram"><i class="fa-brands fa-instagram ig"></i></a>
  <a href="https://www.tiktok.com/@lady_anike?_r=1&_d=edkhddibi2eala&sec_uid=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&share_author_id=6813977790288708614&sharer_language=en&source=h5_m&u_code=dblabealm8daag&timestamp=1717233817&user_id=6813977790288708614&sec_user_id=MS4wLjABAAAAM-TaDXpuI7nrHVPPOJHPTmFAFua_RQmtK6Y1BoQT7aUzz7TUr1gaHFpCMaJWI1lX&utm_source=copy&utm_campaign=client_share&utm_medium=android&share_iid=7372492772902995718&share_link_id=bfd38fce-7b26-4690-9e59-47a56d959ff1&share_app_id=1233&ugbiz_name=ACCOUNT&ug_btm=b8727%2Cb4907&social_share_type=5&enable_checksum=1"><i class="fa-brands fa-tiktok tik" title="Tiktok"></i></a>
  <p><small>&copy; scent by anike</small></p>
   </div>

</footer>

<script>
  $(document).ready (function() {
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
</body>
</html>