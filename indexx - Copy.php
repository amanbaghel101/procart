<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Wing the Air</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .product {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .product img {
      width: 150px;
      margin-right: 20px;
    }

    .product-info {
      flex-grow: 1;
    }

    .product-title {
      font-size: 24px;
      font-weight: bold;
      margin: 0;
    }

    .product-price {
      font-size: 18px;
      margin: 10px 0;
    }

    .buy-btn {
      background-color: #333;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .buy-btn:hover {
      background-color: #555;
    }
  </style>
  <script>
  $(document).ready(function() {
    // Handle category selection change event
    $('#category-select').change(function() {
      var selectedCategory = $(this).val();
      
      // Show/hide products based on the selected category
      if (selectedCategory) {
        $('.card').hide();
        $('.' + selectedCategory).show();
      } else {
        $('.card').show();
      }
    });
  });
</script>

<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="StyleH.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="js/jquery.slide.js" type="text/javascript"></script>
<script src="js/jquery-func.js" type="text/javascript"></script>
</head>
<body>
<!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
    <div id="header">
      <h1 id="logo"><a href="#">Forozabad Maal</a></h1>
      <div id="navigation">
        <ul>
          <li><a href="categoury.html">Home</a></li>
          <li><a href="#">Support</a></li>
          <li><a href="#">My Account</a></li>
          <li><a href="#">The Store</a></li>
          <li class="last"><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
    <!-- End Header -->
    <!-- Slider -->
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="css/images/bracelets.jpg" height="410" width="1010" alt="" /></a></li>
          <li><a href="#"><img src="css/images/bang1.avif" height="410" width="1020" alt="" /></a></li>
          <li><a href="#"><img src="css/images/bang2.avif" height="410" width="1020" alt="" /></a></li>
          <li><a href="#"><img src="css/images/bang3.jpg" height="410" width="1020" alt="" /></a></li>
          <li><a href="#"><img src="css/images/bang4.jpg" height="410" width="1020" alt="" /></a></li>
          <li><a href="#"><img src="css/images/bang5.jpg" height="410" width="1020" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
    <!-- End Slider -->
  </div>


</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
    <!-- Search, etc -->
    <div class="options">
      <div class="search">
        <form action="#" method="post">
         
          <h3 style="color:hotpink;">select your category → </h3>
        
        </form>
      </div>
      <span class="left">
   <button><a href="#">All</a></button>
   <button><a href="#">Plastic Bangles</a></button>
   <button><a href="#">Multicolor Glass Kangan</a></button> 
   <button><a href="#">Golden Plated Bangle</a></button></span>
</div>
    </div>
    <!-- End Search, etc -->
    <!-- Content-->
    <div class="grid-container">
       <?php
  $imageURL = 'image/Glass Bangles.jpeg';
  ?>
        <div><div class="card">
            <img src="image/Glass Bangles.jpeg"width="96" height="115" alt="">
            <h3>Glass Bangles<br>₹150.00<br>24 pice</h3>
            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
      
        </div></div>
        <?php
  $imageURL = 'https://5.imimg.com/data5/PQ/LZ/AC/SELLER-23173285/kangan-c1-250x250.JPG';
  ?>
        <div><div class="card">
            <img src="https://5.imimg.com/data5/PQ/LZ/AC/SELLER-23173285/kangan-c1-250x250.JPG"width="96" height="115" alt="">
            <h3>Multicolor Glass Kangan<br>₹100.00<br>34 reviews</h3>
            <a href="pay.php">
            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
      
        </div></div>
        <?php
  $imageURL = 'https://5.imimg.com/data5/SC/OF/BZ/SELLER-57105705/sdbb-5089-gold1-250x250.jpg';
  ?>
        <div><div class="card">
            <img src="https://5.imimg.com/data5/SC/OF/BZ/SELLER-57105705/sdbb-5089-gold1-250x250.jpg"width="96" height="115" alt="">
            <h3>Golden Plated Bangle<br>₹100.00<br>34 reviews</h3>
            <a href="pay.html">
           <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
      
        </div></div>  
        <?php
  $imageURL = 'https://5.imimg.com/data5/ANDROID/Default/2022/12/UD/HY/NG/135795294/product-jpeg-250x250.jpg';
  ?>
        <div><div class="card">
            <img src="https://5.imimg.com/data5/ANDROID/Default/2022/12/UD/HY/NG/135795294/product-jpeg-250x250.jpg"width="96" height="115" alt="">
            <h3>Metal Bengals<br>₹100.00<br>34 reviews</h3>
            <a href="pay.html">
            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
      
        </div></div>
        <?php
  $imageURL = 'https://5.imimg.com/data5/XF/OL/ZY/SELLER-4786173/couple-name-bangle-250x250.jpeg';
  ?>
        <div><div class="card">
            <img src="https://5.imimg.com/data5/XF/OL/ZY/SELLER-4786173/couple-name-bangle-250x250.jpeg"width="96" height="115" alt="">
            <h3>Couple Name Bangle<br>₹100.00<br>34 reviews</h3>
            <a href="pay.html">
            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
      
        </div></div>
        <?php
  $imageURL = 'https://5.imimg.com/data5/SELLER/Default/2022/12/VU/RQ/HL/111395721/whatsapp-image-2022-11-03-at-11-50-21-pm-250x250.jpeg';
  ?>
        <div><div class="card">
            <img src="https://5.imimg.com/data5/SELLER/Default/2022/12/VU/RQ/HL/111395721/whatsapp-image-2022-11-03-at-11-50-21-pm-250x250.jpeg"width="96" height="115" alt="">
            <h3>Wedding Wear Bangles<br>₹100.00<br>34 reviews</h3>
            <a href="pay.html">
            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
      
        </div></div>
        <?php
  $imageURL = 'https://5.imimg.com/data5/ANDROID/Default/2022/9/CU/JJ/IE/2191345/product-jpeg-250x250.jpg';
  ?>
        <div><div class="card">
            <img src="https://5.imimg.com/data5/ANDROID/Default/2022/9/CU/JJ/IE/2191345/product-jpeg-250x250.jpg"width="96" height="115" alt="">
            <h3>Red Chuda<br>₹100.00<br>34 reviews</h3>
            <a href="pay.html">
           <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
      
        </div></div>
        <?php
  $imageURL = 'https://5.imimg.com/data5/SELLER/Default/2021/4/XE/PJ/JQ/37340766/metal-round-kada-250x250.jpg';
  ?>
        <div><div class="card">
            <img src="https://5.imimg.com/data5/SELLER/Default/2021/4/XE/PJ/JQ/37340766/metal-round-kada-250x250.jpg"width="96" height="115" alt="">
            <h3> Metal Round Kada<br>₹100.00<br>34 reviews</h3>
            <button type="button" class="btn bg-cart"><i class="fa fa-cart-plus mr-2"></i><a href="pay.php?image=<?php echo urlencode($imageURL); ?>">Buy Product</a></button>
            </div></div>
    </div>

  

    
         <!-- Footer -->
    <div id="footer">
             <div class="left"> <a href="#">Home</a> <span>|</span> <a href="#">Support</a> <span>|</span> <a href="#">My Account</a> <span>|</span> <a href="#">The Store</a> <span>|</span> <a href="#">Contact</a> </div>
             <div class="right"> &copy; Sitename.com. Design by <a href="http://chocotemplates.com">ChocoTemplates.com</a> </div>
    </div>
        <!-- End Footer -->
  </div>
      <!-- End shell Container -->
</div>
    <!-- End main Content -->
<!-- End Main -->
</body>
</html>
