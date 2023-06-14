<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>

    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="first_name" />
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="last_name" />
        </div>

        <div class="form-group">
            <label>User Email</label>
            <input type="gmail" name="user_email" />
        </div>

        <div class="form-group">
            <label>User Phone</label>
            <input type="text" name="user_phone" />
        </div>

        <div class="form-group">
            <label>Booking Start Date</label>
            <input type="date" name="bookingstart" />
        </div>

        <div class="form-group">
            <label>Booking End Date</label>
            <input type="date" name="bookingend">
        </div>

        <div class="form-group">
            <label>Packages</label>
            <input type="text" name="Packages">
        </div>

        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
