<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 960px;
      margin: 20px auto;
      padding: 0 20px;
    }

    .product-image {
      max-width: 400px;
      margin-bottom: 20px;
    }
  </style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--<title>Responsive Regisration Form </title>--> 
</head>
<body>
    <div class="container">
  <h1>Buy Product</h1>

<?php
// Check if the 'image' parameter exists in the URL
if (isset($_GET['image'])) {
    $image = $_GET['image'];
    echo '<img class="product-image" src="' . $image . '" alt="Product Image">';
} else {
    echo '<p>No product image selected.</p>';
}
?>


  <a href="indexx.php">Go back to previous page</a>
</div>
  <div class="container">
    <div class="content">
       <img src="https://res.cloudinary.com/debbsefe/image/upload/f_auto,c_fill,dpr_auto,e_grayscale/image_fz7n7w.webp" alt="header-image" class="cld-responsive">
            <h1 class="form-title">Fill Your Details<h6>We contact soon...</h6></h1>
            <form action="connect.php" method="POST">
               <input type="text" placeholder="NAME" name="txtname">
            <!--<div class="beside">
                <input type="number" placeholder="PHONE NUMBER" name="txtphnumber">
            </div>-->
                <input type="email" placeholder="EMAIL ADDRESS" name="txtemail">
                <!--<input type="number" placeholder="PIN CODE" name="txtcode"><br>-->

                <input type="address" placeholder="FULL ADDRESS" name="txtaddress" style="height: 50px; width: 420px;">
            <div class="fedd" >
                <label for="subject">Subject</label>
                <input id="subject" name="txtfeedback" placeholder="Write something.." style="height:100px; width:420px"></input>
            </div>
                <input type="submit" class="btn btn-primary">
            </form>
            
        </div>
 </div>

</body>
</html>
