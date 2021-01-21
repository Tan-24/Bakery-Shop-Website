<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="pizza";
$conn=new mysqli($servername,$username, $password,$dbname);
if($conn)
{echo "Done";
 include 'index.html';}
$fn=$ln=$email=$mobile=$at=$house=$street=$type=$crust=$size=$extra=$vchckbox=$nvchckbox=$day=$time="";
if(isset($_POST['order']))
{
if(isset($_POST["fn"]))
{
	$fn=$_POST['fn'];
}
if(isset($_POST["ln"]))
{
	$ln=$_POST['ln'];
}
if(isset($_POST["email"]))
{
	$email=$_POST['email'];
}
	if(isset($_POST["mobile"]))
{
	$mobile=$_POST['mobile'];
}
if(isset($_POST["at"]))
{
	$at=$_POST['at'];
}
	if(isset($_POST["house"]))
{
	$house=$_POST['house'];
}
if(isset($_POST["street"]))
{
	$street=$_POST['street'];
}
if(isset($_POST["type"]))
{
	$type=$_POST['type'];
}
	if(isset($_POST["crust"]))
{
	$crust=$_POST['crust'];
}
if(isset($_POST["size"]))
{
	$size=$_POST['size'];
}
if(isset($_POST["extrache"]))
{
	$extra=$_POST['extrache'];
}
if(isset($_POST["vtop"]))
{
	$vchckbox=implode(',',$_POST['vtop']);
}
if(isset($_POST["nvtop"]))
{
	$nvchckbox=implode(',',$_POST['nvtop']);
}
if(isset($_POST["day"]))
{
	$day=$_POST['day'];
}
if(isset($_POST["time"]))
{
	$time=$_POST['time'];
}
	
  	$query="INSERT INTO ordernow1 values('$fn','$ln','$email','$mobile','$at','$house','$street','$type','$crust','$size','$extra','$vchckbox','$nvchckbox','$day','$time')";
	$data=mysqli_query($conn, $query);
    if($data)
    {
    echo "<script> alert('New records updated successfully')</script>";
    }
    else {
     echo "<script> alert('New records are not updated successfully')</script>";
    }
}
?>
