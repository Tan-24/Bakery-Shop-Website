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

<img src="images/contact.png" style="width:80%;height:500px;margin-left:150px;align:center">
</div>
<br>
<div class="container-fluid text-center">    
  <h3 style="Text-align:center;color:#E40545; "><b> BAKERY CUSTOMER CARE NO:</b></h3>
   <span class="w3-tag " style="Text-align:center; color:black; opacity:0.8;">
    <p><class="material-icons"><u>call</u> <font style="color:green;">1800-200-1000</font></p>
  </span>
  <h3 style="Text-align:center;color:#E40545; "><b> BAKERY CONTACT ADDRESS:</b></h3>
   <span class="w3-tag " style="Text-align:center; color:black; opacity:0.8;">
    <p>BAKERY SHOP India,</p>
      <p>Tower-D, Plot No. 5,</p>
          <p>1st Floor, Logix Techno Park,</p>
<p>Ground Floor, Timmy Arcade,</p>
<p>Sector 127, Noida-20402, M.H.</p>
   <div>
      <img src="images/map.png">
    </div>
  </span>
  <br>

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
