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
  width:90px;
  height: 25px;
  font-size: 15px;
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
  height:400px;
  border-radius: 30px;
  align-content: center;
  margin-left: 3%;
  margin-right: 3%;
  overflow: auto;
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
input[type=text1]
{
  border-style: none; 
  height:0.5px;
  width: 0.5px;
  background-color: transparent;
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

table {
  border-collapse: collapse;
  width: 100%;
  background-color: #ffb3d9;
  border-radius: 20px;
}

td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
  color :black;
}
th
{
  background-color: #660033;
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
  color :white;
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

  <a href="order1.php"><button class="btn" style="float: right;margin-right: 25px;"> << Back </button></a>

<div class="row"> 
  <br><br>
  <a href="pendingmuffinorers.php"><button class="btn1"> Pending</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
  <a href="completedmuffinorders.php"><button class="btn1" > Completed</button></a>
  <br><br>
  
              <div class="box">
                
                <!-- /.box-body -->
                <table>
                <thead>
                <tr>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Mobile No.</th>
                  <th>Location</th>
                  <th>Address</th>
                  <th>Muffin Type</th>
                  <th>Quantity</th>
                  <th>Date</th>
                  <th>Price</th>
                  <th>Time</th>
                </tr>
                </thead>
                <tbody>
                      <?php
                      $query="select * from muffinorders where status=1";
                      $result=mysqli_query($conn, $query);
                      if ($result) {
                      while ($object = $result->fetch_object()) 
                      {
                      echo "<tr>
                        <td>".$object->fn."</td>
                        <td>".$object->ln."</td>
                        <td>".$object->email."</td>
                        <td>".$object->mobile."</td>
                        <td>".$object->at."</td>
                        <td>".$object->houseno.",".$object->street.",".$object->city."</</td>
                        <td>".$object->type."</td>
                        <td>".$object->quantity."</td>
                        <td>".$object->day."</td>
                        <td>".$object->price."</td>
                        <td>".$object->time."</td>
                      </tr>";
                      }
                      }
                      else {
                      echo "Error : ".mysqli_error();
                      }
                      ?>
                </tbody>
                
              </table>

              </div>
              <!-- /.box -->
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
