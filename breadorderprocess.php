<?php
include 'connect.php';

$fn=$ln=$email=$mobile=$at=$houseno=$street=$city=$cookie=$day=$time=$shape=$price="";
$status='0';

if(isset($_POST['order']))
{
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$at = $_POST['at'];
	$houseno = $_POST['houseno'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$type = $_POST['type'];
	$pieces = $_POST['pieces'];
	$quantity = $_POST['quantity'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$price = $_POST['price'];

  	$query="INSERT INTO breadorders(fn,ln,email,mobile,at,houseno,street,city,type,pieces,quantity,day,time,price,status) values('$fn','$ln','$email','$mobile','$at','$houseno','$street','$city','$type','$pieces','$quantity','$day','$time','$price','$status')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    header("refresh:0; url=breads.php");
    }
    else {
     echo "<script> alert('Something Went Wrong!!!')</script>";
     header("refresh:0; url=breads.php");
    }
}
?>
