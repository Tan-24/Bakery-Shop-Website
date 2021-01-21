<!DOCTYPE html>
<html>
<?php
include 'connect.php';
?>
<head>
  <title>Order Now</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
/*navbar*/
.topnav {
  overflow: hidden;
  background-color: #330000;
}

.topnav a {
  float: right;
  display: block;
  text-align: center;
  padding: 22px 20px;
  text-decoration: none;
  color: white;
  font-size:25px;
  margin-right:10px;
}

.topnav a:hover {
  background-color: #f2f2f2;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
/*body*/
.btn 
{
  background-color: white;
  border-color: white;
  border-radius: 20px;
  width:110px;
  height: 30px;
  font-size: 18px;
  color:black;
}
.row
{
max-width:100%;
}
.productbox
{
  max-width:100%;
  height:450px;
  background-color: transparent;
  margin-left: 40px;
}
.box
{
  width:30%;
  height:400px;
  background-color: #660000;
  border-radius: 30px;
  align-items: center;
}
.container {
  position: center;
  text-align: center;
  color: white;
}
.center-right {
  position: absolute;
  top:35%;
  left: 60%;
  color:white;
font-size:60px;
font-family: "Century Gothic"
}
.btn1
{
  background-color: white;
  border-color: white;
  border-radius: 20px;
  width:130px;
  height: 40px;
  font-size: 20px;
  color:black;
}
/*footer*/

 .footer{
    background: #330000;  
    height: 40px;
    width: 100%;
    left: 0;
    bottom: 0;
   color: white;
   text-align: center;
}
.foot{
  font-size: 16px;
    color: white;
    text-align:center;
    margin-top: 5px;
     padding: 15px;
}
.fa {
  padding: 15px;
  font-size: 20px;
  width: 10px;
  height: 10px;
  text-align: left;
  text-decoration: none;
}
  
  .fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-twitter {
  background: #55ACEE;
  color: white;
}
.a:hover{
  height: 40px;
  width: 100px;
  opacity: 0.9;
}

.a{
height: 40px;
  width: 100px;

}

/*Form*/
input[type=text],input[type=date],input[type=integer],select,textarea,label
{
  border-radius: 10px;
  height:27px;
  width: 160px;
  font-size: 18px;
  margin-left:0.5%;
  text-align: center;
}

input[type=text1]
{
  border-style: none;
  height:27px;
  width: 180px;
  font-size: 18px;
  margin-left:0.5%;
}

.ip
{
  border-radius: 10px;
  height:27px;
  width: 250px;
  font-size: 18px;
  margin-left: 0.5%;
  text-align: center;
}
legend
{
  font-size: 25px;

}


</style>
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
  <br>
  <center><marquee><h1> Please Enter The Following Details To Complete Your Order </h1></marquee></center>
  <br>
   <div style="width:90%; background-color:white; border-style:inset; border-width:1px; border-radius: 10px; margin-left: 5%;">
    <center>
     <form action="cakeorderprocess.php" method="POST">
   <br>
      <fieldset><br>
      <legend>Personal Details</legend>
        <label>First Name :</label>
        <input type="text"  name="fn" placeholder="FirstName*" required>
        <label>Last Name:</label>
        <input type="text"  name="ln" placeholder="LastName*"required>
        <label>Email:</label>
        <input type="text"  name="email" placeholder="Email*" required>
        <label>Mobile No.:</label>
        <input type="integer" name="mobile" placeholder="Mobile NO*" maxlength="10" required>  
      <br>  
    </fieldset><br><br>

    <fieldset>  <br>
      <legend>Delivery Location</legend>
        <label>At: <select value="at" name="at"> 
          <option value="Home"> Home</option>
          <option value="Office"> Office</option>
          </select>
        </label>
        <label>Flat/House No:</label>
        <input type="text"  name="houseno" placeholder="Flat/House No" required>
        <label>Street/Society Name:</label>
        <input type="text"  name="street" placeholder="Street/Society Name" required>
        <label>City:</label>
        <input type="text"  name="city" placeholder="City" required>
        </legend>
  </fieldset><br><br>

     <fieldset><br>
      <legend>Order Details</legend>
        <label>Cake Type:</label>
        <?php
          $cake=$_POST['ordernow'];
          echo "<input type='text1' name='cake' value='$cake' />";
         ?>
        <br><br>
        <label>Weight :
          <?php
          $price=$_POST['price'];
          if($price < 450)
          {
          echo "<input type='text1' name='weight' value='1/2 kg' />";
          }
          else
          {
          echo "<input type='text1' name='weight' value='1 kg' />";
          }
          ?>
        </label>
        <br><br>
          <label>Type :
          <select value="type" name="type"> 
          <option value="With Egg">With Egg</option>
          <option value="Eggless"> Eggless</option>
          </select>
        </label>
        <br><br>
        <label>shape :
          <select value="shape" name="shape"> 
          <option value="Round">Round</option>
          <option value="Heart"> Heart</option>
          </select>
        </label>
        <br><br>
        <label>Message On Cake : </lable>
        <textarea name="msg" placeholder="" ></textarea>
        <br><br>
        <lable>Date :</lable>
        <input type="date"  name="day" placeholder="Delivery Date" required>
        <br><br>
        <label>Time:
        <select value="time" name="time"> 
          <option value="morning"> Morning - 10 AM</option>
          <option value="evening">Evening - 4 PM</option>
          </select> 
        </label>
        <br><br>
        <label>Price:</label>
        <?php
          $price=$_POST['price'];
          echo "<input type='text1' name='price' value='$price' />" ?>
        <br><br>
        </fieldset><br>
    <button class="btn1" name="order" style="background-color:#ff8080;">Place Order</button><br><br>
    </form>
  </center>
   </div>
  
</div> 
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
