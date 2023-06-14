<?php
        if ($_SERVER['REQUEST_METHOD']=='POST' && isset ($_post['submit'])){
        $databaseHost = 'localhost';
        $databaseName = 'studioadmin';
        $databaseUsername = 'root';
        $databasePassword = '';
        $mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName) or die("connection failed!" . msqli_connect_error()); 

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $user_email = $_POST['user_email'];
        $user_phone = $_POST['user_phone'];
        $bookingstart = $_POST['bookingstart'];
        $bookingend = $_POST['bookingend'];
        $Packages = $_POST['Packages'];

        $sql = "INSERT INTO `clients`( `first_name`, `last_name`, `user_email`, `user_phone`, `bookingstart`, `bookingend`,`Packages`) VALUES ('$first_name' , '$last_name' , '$user_email','$user_phone','$bookingstart','$bookingend','$Packages')";
		$result = mysqli_query($mysqli , $sql);

        if ($result) {
			header("Location: http://localhost/ftp_web/booking.php");
		}
		else{
			echo "Error Occurred";
		}

        
    }
?>