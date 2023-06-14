<?php include 'header.php'; 

    if (isset($_POST['dltbtn'])) {

    include 'config.php';

    $sno = $_POST['sno'];

    $sql = "DELETE FROM clients WHERE sno = $sno ";
    $result = mysqli_query($mysqli , $sql) or die("Query Unsuccessful.");

    header("Location: http://localhost/ftp_web/crud/index.php");

    mysqli_close($mysqli);
    }

?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sno" placeholder="Enter User ID to delete" />
        </div>
        <input class="submit" type="submit" name="dltbtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>
