<!DOCTYPE html>
<html>
<?php
include "connect.php";
?>
<head>
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

label
{
color:white;
font-size:20px;
}
input[type=text],input[type=date],input[type=number],input[type=integer],select,textarea
{
  border-radius: 10px;
  height:27px;
  width: 60px;
  font-size: 18px;
  margin-left:0.5%;
  text-align: center;
}

select
{
  background-color: #660000;
  border-color: none;
  border-radius: 20px;
  width:160px;
  height: 30px;
  font-size: 18px;
  color:white;
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
  <center><marquee><h2> Price is given for Pack of 6 pieces</h2></marquee> 
   
    <div class="productbox"><br><br>
           
           <div class="box" style="Text-align:center;float:left;"><br>
            <img src="images/c1.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <font style="color:white;font-size:20px;">Choco Chips</font><br> 
            <form action="cookieorder.php" method="POST">
            <label>Price :</label>
            <?php
            $sql="select price from cookie where name='Choco Chips'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $price=$row["price"];
            }
            } else {
            echo "";
            }
            ?>
            <label><?php echo $price; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Quantity :</label>
            <input type="number"  name="quantity" required>       
            </label>
            
            <br><br>
            <button class="btn1" name="ordernow" value="Choco Chips"><b> Order Now</button> 
            </form>
          </div>

           <div class="box" style="Text-align:center;float:left;margin-left: 45px;"><br>
            <img src="images/c2.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <font style="color:white;font-size:20px;">Chocolate Delight</font><br> 
            <form action="cookieorder.php" method="POST">
            <label>Price :</label>
            <?php
            $sql="select price from cookie where name='Chocolate Delight'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $price=$row["price"];
            }
            } else {
            echo "";
            }
            ?>
            <label><?php echo $price; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Quantity :</label>
            <input type="number"  name="quantity" required>       
            </label>
            <br><br>
            <button class="btn1" name="ordernow" value="Chocolate Delight"><b> Order Now</button> 
            </form>
          </div>
          
          <div class="box" style="Text-align:center;float:left;margin-left: 45px;"><br>
            <img src="images/c3.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <font style="color:white;font-size:20px;">Macaron</font><br> 
            <form action="cookieorder.php" method="POST">
            <label>Price :</label>
            <?php
            $sql="select price from cookie where name='Macaron'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $price=$row["price"];
            }
            } else {
            echo "";
            }
            ?>
            <label><?php echo $price; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Quantity :</label>
            <input type="number"  name="quantity" required>       
            </label>
            <br><br>
            <button class="btn1" name="ordernow" value="Macaron"><b> Order Now</button> 
            </form>
          </div>
  </div>

    <div class="productbox"><br><br>
           
           <div class="box" style="Text-align:center;float:left;"><br>
            <img src="images/c4.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <font style="color:white;font-size:20px;">Gems</font><br> 
            <form action="cookieorder.php" method="POST">
            <label>Price :</label>
            <?php
            $sql="select price from cookie where name='Gems'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $price=$row["price"];
            }
            } else {
            echo "";
            }
            ?>
            <label><?php echo $price; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Quantity :</label>
            <input type="number"  name="quantity" required>       
            </label>
            <br><br>
            <button class="btn1" name="ordsernow" value="Gems"><b> Order Now</button> 
            </form>
          </div>

           <div class="box" style="Text-align:center;float:left;margin-left: 45px;"><br>
            <img src="images/c5.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <font style="color:white;font-size:20px;">Dark Chocolate</font><br> 
            <form action="cookieorder.php" method="POST">
            <label>Price :</label>
            <?php
            $sql="select price from cookie where name='Dark Chocolate'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $price=$row["price"];
            }
            } else {
            echo "";
            }
            ?>
            <label><?php echo $price; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Quantity :</label>
            <input type="number"  name="quantity" required>       
            </label>
            <br><br>
            <button class="btn1" name="ordernow" value="Dark Chocolate"><b> Order Now</button> 
            </form>
          </div>
          
          <div class="box" style="Text-align:center;float:left;margin-left: 45px;"><br>
            <img src="images/c6.jpg" style="border-radius:150%;width:240px;height:240px;align-self: center;"><br><br>
            <font style="color:white;font-size:20px;">Chocolate Chips</font><br> 
            <form action="cookieorder.php" method="POST">
            <label>Price :</label>
            <?php
            $sql="select price from cookie where name='Chocolate Chips'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              $price=$row["price"];
            }
            } else {
            echo "";
            }
            ?>
            <label><?php echo $price; ?></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label>Quantity :</label>
            <input type="number"  name="quantity" required>       
            </label>
            <br><br>
            <button class="btn1" name="ordernow" value="Chocolate Chips"><b> Order Now</button> 
            </form>
          </div>
  </div>
 
  <br><br>
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
