<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> </title>
  <link rel="stylesheet" type="text/css" href="StyleH.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    /* Your existing CSS styles */

    /* Example CSS for responsive navigation menu */
    @media screen and (max-width: 768px) {
      /* Hide the normal navigation on small screens */
      ul {
        display: none;
        background-color: white; /* Set the background color */
        position: absolute;
        top: 100%; /* Position the menu below the Brand */
        width: 100%; /* Take full width of the screen */
        text-align: center; /* Center-align the links */
        padding: 10px 0; /* Add some padding */
        z-index: 999; /* Set z-index to appear above other content */
      }

      /* Display the mobile menu icon */
      .menu-btn {
        display: block;
      }

      /* Style the mobile menu icon (hamburger menu) */
      .menu-btn .fas {
        /* Add styles for the icon */
      }

      /* Show the navigation when the checkbox is checked (for mobile) */
      #click:checked ~ ul {
        display: block;
      }
    }
  </style>
</head>
<body>
  <nav>
    <div class="logo">
      Brand
    </div>
    <!-- Mobile menu icon -->
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fas fa-bars"></i>
    </label>
    <!-- Navigation options -->
    <ul>
      <li><a class="active" href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="form.html">form</a></li>
      <li><a href="#">Gallery</a></li>
    </ul>
  </nav>
 
    <div class="slides">
        <div class="slider-image"><img src="https://image.ibb.co/kpmt3k/background_1.jpg" alt="background_1" style="width:99%;height: 450px;"></div>
    
    <marquee> <h3>Select Your City</h3> </marquee>
         <div class=" ">
            <a href="index1.php">
               <input name="imgbtn" type="Image" value="index1.php" class="city" src="./image/glass.jpg"></a>
            <a href="index2.php">
               <input name="imgbtn" type="Image" value="index2.php" class="city" src="./image/saree.jpg"></a>
            <a href="index3.php">
               <input name="imgbtn" type="Image" value="index3.php" class="city" src="./image/chickn.jpeg"></a>
            <a href="index.html">
               <input name="imgbtn" type="Image" value="index3.html" class="city" src="./image/lether.jpeg"></a>
         </div>
          </div>
</body>

</html>