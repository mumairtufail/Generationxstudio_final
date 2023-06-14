<?php

include 'config.php';
		$sno = $_POST['sno'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$user_email = $_POST['user_email'];
		$user_phone = $_POST['user_phone'];
		$bookingstart = $_POST['bookingstart'];
		$bookingend = $_POST['bookingend'];
		$Packages = $_POST['Packages'];

		$sql = "UPDATE clients SET first_name ='$first_name' , last_name='$last_name' ,user_email='$user_email', user_phone='$user_phone',bookingstart='$bookingstart' ,bookingend='$bookingend', Packages= '$Packages'   WHERE  sno = '$sno'";

		$result = mysqli_query($mysqli , $sql);
		if ($result) {
			header("Location: http://localhost/ftp_web/crud/index.php");
		}
		else{
			echo "Error Occurred";
		}
	mysqli_close($mysqli);

?>