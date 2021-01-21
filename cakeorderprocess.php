<?php
include 'connect.php';

$fn=$ln=$email=$mobile=$at=$houseno=$street=$city=$cake=$weight=$type=$msg=$day=$time=$shape=$price="";
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
	$cake = $_POST['cake'];
	$weight = $_POST['weight'];
	$type = $_POST['type'];
	$shape = $_POST['shape'];
	$msg = $_POST['msg'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$price = $_POST['price'];

  	$query="INSERT INTO cakeorders(fn,ln,email,mobile,at,houseno,street,city,cake,weight,type,shape,msg,day,time,price,status) values('$fn','$ln','$email','$mobile','$at','$houseno','$street','$city','$cake','$weight','$type','$shape','$msg','$day','$time','$price','$status')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    header("refresh:0; url=birthday.php");
    }
    else {
     echo "<script> alert('New records are not updated successfully')</script>";
     header("refresh:0; url=birthday.php");
    }

}
?>
