<!DOCTYPE html>
<html>
<head>
	<title>Generationxstudio</title>

	<link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet"  type="text/css" href="assets/desthome.jpg">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="booking.css">
    <link rel="stylesheet" type="text/css" href="destination.css">
</head>
<body>
	
		
	
	<header style="background-image:url('assets/nav.jpg');">
		
			<div class="logo">
                <a href="index.php" style="text-decoration: none;"><img src="assets/logo.png" alt=""></a>
			<div class="top">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="photographers.php">Photographers </a></li>
				<li><a href="booking.php">Booking </a></li>
         <li><a href="destination.php">Destinations</a></li>
				<li><a href="pricing.php">Pricing </a></li>
				<li><a href="trial.php">SignUp </a></li>
			</ul>
            </div>

			
		</div>
		
	</header>

<section class="bookingform">

    <form action="bookingbackend.php" method="post">
        <div class="elem-group">
          <label for="first_name">First Name</label>
          <input type="text" id="first_name" name="first_name" placeholder="Umair"  required>
        </div>
        <div class="elem-group">
          <label for="last_name">Last Name</label>
          <input type="text" id="last_name" name="last_name" placeholder="Tufail"  required>
        </div>
        <div class="elem-group">
          <label for="user_email">Your E-mail</label>
          <input type="gmail" id="user_email" name="user_email" placeholder="umair@email.com" required>
        </div>
        <div class="elem-group">
          <label for="user_phone">Your Phone</label>
          <input type="tel" id="user_phone" name="user_phone" placeholder="0321-1234567" required>
        </div>
        <hr>
       
       
        <div class="bookingdates">
          <label for="bookingstart">Booking Starting Date</label>
          <input type="date" id="bookingstart" name="bookingstart" required>
          
        </div>
        <div class="bookingdates">
          <label for="bookingend">Booking Ending date</label>
          <input type="date" id="bookingend" name="bookingend" >
        </div>
        <div class="elem-group">
          <label for="package-selection">Select Packages</label>
          <input type="text" id="Packages" name="Packages" placeholder="Beginner/Intermidiate/Premium" required>

          <!-- <select id="package-selection" name="package_preference" required>
              <option value="">Choose a Package from the List</option>
              <option value="connecting">Starter 50$/hr</option>
              <option value="adjoining">Intermediate 100$/hr</option>
              <option value="adjacent">Premium 200$/hr</option> -->
          </select>
        </div>
        
        
        <input   name="submit" value="submit" type="submit" class="btn btn-outline-info btn-md" > 
        
   
      </form>

</section>



<div class="foot">
    <section class="footer">
    
      <div class="box-container">
    
          <div class="box">
              <h3>Quick Links</h3>
              <a href="#"> <i class="fas fa-chevron-right"></i> Home </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Services </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> About </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Sellers </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Contact Us </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Review </a>
          </div>
    
          <div class="box">
              <h3>Our Services</h3>
              <a href="#"> <i class="fas fa-chevron-right"></i> Cinematography </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Dark Photography </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Wedding Photography </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Destination Photography </a>
              <a href="#"> <i class="fas fa-chevron-right"></i> Commercials </a>
          </div>
    
          <div class="box">
              <h3>Contact Info</h3>
              <a href="#"> <i class="fas fa-phone"></i> +92-3074465494 </a>
              <a href="#"> <i class="fas fa-phone"></i> +92-3074465494 </a>
              <a href="#"> <i class="fas fa-envelope"></i> Generationxstudio@gmail.com </a>
              <a href="#"> <i class="fas fa-map-marker-alt"></i> Superior University City Campus </a>
          </div>
    
          <div class="box">
              <h3>Follow Us</h3>
              <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
              <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
              <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
              <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
              <a href="#"> <i class="fab fa-pinterest"></i> Pinterest </a>
          </div>
    
      </div>
    
    </section>
    </div>
    
    
</body>