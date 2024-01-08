<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Navigation Menu</title>
      <link rel="stylesheet" href="styleH.css">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <nav>
         <div class="logo">
            Brand
         </div>
         <input type="checkbox" id="click">
         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>
         <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="index.html">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Feedback</a></li>
         </ul>
      </nav>
      <div class="content">
                 <div class="slides fade">
        <div class="slider-numbers">1/4</div>
        <div class="slider-image"><img src="https://image.ibb.co/kpmt3k/background_1.jpg" alt="background_1"></div>
        <div class="slider-caption">Caption 1</div>
    </div>
      <h3>Select Your City</h3>
         <div class=" ">
            <a href="index.html">
               <input name="imgbtn" type="Image" value="index.html" class="city" src="./image/glass.jpg"></a>
            <a href="index.html">
               <input name="imgbtn" type="Image" value="index1.html" class="city" src="./image/saree.jpg"></a>
            <a href="index.html">
               <input name="imgbtn" type="Image" value="index2.html" class="city" src="./image/chickn.jpeg"></a>
            <a href="index.html">
               <input name="imgbtn" type="Image" value="index3.html" class="city" src="./image/lether.jpeg"></a>
         </div>
      </div>
   </body>
</html>