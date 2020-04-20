<?php
session_start();

$con = new mysqli('localhost','root','');

// check connection
if ($con->connect_error) {
	die("connection failed:" . $conn->connect_error);
}
//echo "DB connected successfully";

// this will select the database sample_db
mysqli_select_db($con,"craftinimages");

//echo "\n DB  selected  successfully";

// create INSERT query
$contactName = $_POST['contactName'];
$Email = $_POST['contactEmail'];
$contactNumber = $_POST['contactNumber'];
$contactMessage = $_POST['contactMessage'];

  $sql="INSERT INTO contactus (contactName,contactEmail,contactNumber,contactMessage) VALUES ('".$contactName."','".$Email."','".$contactNumber."','".$contactMessage."')";
	$result=mysqli_query($con,$sql);
	

if($result == 1){
	//echo "New record created successfully";
}
	else{
		echo "Error:  " . $sql . "<br>" . $con->error;
	}
	
echo "Your message sent successfully.. We will contact you on mail shortly"	;	
mysqli_close($con);
?>