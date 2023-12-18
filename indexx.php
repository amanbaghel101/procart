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

  h2 {
  text-align: center;
  padding: 20px;
}

    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 0 20px;
    }

.headerr {
      border: 3px double #000;
      padding: 20px;
      text-align: center;
    }

    /* Style for the buttons */
    .headerr input[type="submit"] {
      background-color: #555;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 16px;
      cursor: pointer;
    }

    .headerr input[type="submit"]:hover {
      background-color: #777;
    }
 
   
  </style>
  

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
          <li><a href="index.php">Home</a></li>
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
  <h2>Select your Rate</h2>
 <div class="headerr">
  
    <form method="post">
      <input type="submit" name="btn1" value="Bangels in 150">
      <input type="submit" name="btn2" value="Bangels in 350">
      <input type="submit" name="btn3" value="Bangels in 550">
      <input type="submit" name="btn4" value="Bangels in 1050">
    </form>
  </div>
    <!-- End main Content -->
<!-- End Main -->

<?php
  if (isset($_POST['btn1'])) {
    include 'onefifty.php';
  } elseif (isset($_POST['btn2'])) {
   include 'threefifty.php';
  }
  elseif (isset($_POST['btn3'])) {
    include 'fivefifty.php';
  }
  elseif (isset($_POST['btn4'])) {
    include 'onehunfifty.php';
  }
  ?>
</body>
</html>
