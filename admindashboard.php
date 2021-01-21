<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<?php
include 'index.css';
?>
<body bgcolor="#ffe6e6">

<div class="topnav" id="myTopnav">
  <img src ="images/logo.jpg" style="width:200px;height:70px;margin-left: 100px;">
  
  <a href="contact.php" style="margin-right:90px;"> Contact </a>
  <a href="order1.php"> My Orders  </a>
  <a href="ourmenu.php"> Our Menu </a>
  <a href="about.php"> About Us </a>
  
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br>


<div class="container">
  <img src="images/index.jpg" alt="Snow" height="410px">
  <div class="center-right"><b>Ready to shop 
    <br>Bakery products</b></div>
 </div>
<div class="row">
  <center><h1>Our Menu</h1></center>
  <div class="productbox"><br>
           <div class="box" style="width:30%;Text-align:center;float:left;background-image: url(images/boxbg.jpeg);">
            <h1><font color="white">CAKES</font></h1>
            <img src="images/cakelogo.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <form action="birthday.php" >
          <button class="btn1"><b> View All</button> </form>
            </div>
           <div class="box" style="width:30%;Text-align:center;float:left;margin-left: 45px;background-image: url(images/boxbg.jpeg);">
            <h1><font color="white">PASTRIES</font></h1>
            <img src="images/pastrylogo.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <form action="pastry.php" >
          <button class="btn1"><b> View All</button> </form>
           </div>

           <div class="box" style="width:30%;Text-align:center;float:left;margin-left: 45px;background-image: url(images/boxbg.jpeg);">
           <h1><font color="white">MUFFINS</font></h1>
            <img src="images/Muffinslogo.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <form action="muffines.php" >
          <button class="btn1"><b> View All</button> </form>
           </div>
  </div>
  <div class="productbox"><br>
           <div class="box" style="width:30%;Text-align:center;float:left;background-image: url(images/boxbg.jpeg);">
            <h1><font color="white">COOKIES</font></h1>
            <img src="images/cookielogo.jpeg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <form action="cookies.php" >
          <button class="btn1"><b> View All</button> </form>
            </div>

           <div class="box" style="width:30%;Text-align:center;float:left;margin-left: 45px;background-image: url(images/boxbg.jpeg);">
            <h1><font color="white">BREAD ITEMS</font></h1>
            <img src="images/breadlogo.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <form action="breads.php" >
          <button class="btn1"><b> View All</button> </form>
           </div>

           <div class="box" style="width:30%;Text-align:center;float:left;margin-left: 45px;background-image: url(images/boxbg.jpeg);">
           <h1><font color="white">WAFERS</font></h1>
            <img src="images/waferlogo.jpeg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <form action="wafers.php" >
          <button class="btn1"><b> View All</button> </form>
           </div>
  </div>
  <br>
</div> 

<div class="footer">
  <a style="float: left; margin-left: 200px;"class="fa fa-facebook"></a>
  <a style="float: left;  margin-left: 20px;"class="fa fa-twitter"></a>
<a style="float: left; margin-left: 20px; "class="fa fa-google"></a>
  <font class="foot">All rights reserved. Copyright ©2020 Bakery CakeWorks Ltd. Disclaimer | T&C | Privacy Policy</font>
  </div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
