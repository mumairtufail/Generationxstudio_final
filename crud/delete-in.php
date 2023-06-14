
<?php

	$sno = $_GET['sno'];

	include 'config.php';

    $sql = "DELETE FROM clients WHERE sno = $sno ";
    $result = mysqli_query($mysqli , $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/ftp_web/crud/index.php");
    mysqli_close($mysqli);
?>