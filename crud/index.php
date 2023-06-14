<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
<?php
    include 'config.php';

    $sql = "SELECT * FROM clients";
    $result = mysqli_query($mysqli , $sql) or die("Query Unsuccessful.");

     if (mysqli_num_rows($result) > 0) {
     
?>

    <table cellpadding="8px">
        <thead>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>User Email</th>
        <th>User Phone</th>
        <th>Booking Start Date</th>
        <th>Booking End Date</th>
        <th>Packages</th>
        </thead>
        <tbody>
<?php
    while ($rows = mysqli_fetch_array($result)) {   // mysqli_fetch_assoc($result)
?>

            <tr>
                <td><?php echo $rows['sno'] ?></td>
                <td><?php echo $rows['first_name'] ?></td>
                <td><?php echo $rows['last_name'] ?></td>
                <td><?php echo $rows['user_email'] ?></td>
                <td><?php echo $rows['user_phone'] ?></td>
                <td><?php echo $rows['bookingstart'] ?></td>
                <td><?php echo $rows['bookingend'] ?></td>
                <td><?php echo $rows['Packages'] ?></td>
                <td>
                    <a href='edit.php?sno=<?php echo $rows['sno']; ?>'>Edit</a>
                    <a href='delete-in.php?sno=<?php echo $rows['sno']; ?>'>Delete</a>
                </td>
            </tr>
        </tbody>
    <?php } ?>
    </table>
     <?php
         }else{
        echo "<h2> No Record Found! </h2>";
            }
        mysqli_close($mysqli);
    ?>
</div>
</div>
</body>
</html>
