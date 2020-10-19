<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'bakery';
$con=new mysqli($servername,$username,$password,$dbname);

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
	$msg = $_POST['msg'];
	$day = $_POST['day'];
	$time = $_POST['time'];
	$status = 0;

	$query = "INSERT INTO cakeorders values('$fn','$ln','$email','$mobileno','$at','$houseno','$street','city','cake','weight',$type','msg','day','$time','$status')";
	$result = mysqli_query($con,$query);
	if($fn!="" && $ln!="" && $email!="" && $mobile!="" && $at!="" && $houseno!="" && $street!="" && $city!="" && $cake!="" && $weight!="" && $type!="" && $msg!="" && $day!="" && $time!="" && $status!="")
	{
		if($result)
		{
			echo "<script> alert('New Order Placed uccessfully')</script>";
			 header("refresh:0; url=placecakeorder.php");
		}
		else
		{
			echo "<script> alert('Oopss!!!<br>Something Went Wrong <br> Please Try Again')</script>";
			header("refresh:0; url=placecakeorder.php");
		}
	}
}
else
{
	echo "Something went wrong";
}
?>