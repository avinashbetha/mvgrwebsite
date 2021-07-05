








<!----------------------------------------------html code page form design------------------->
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>WELCOME MVGR</title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">    
	<link rel="stylesheet" type="text/css" href="css/mvgrstyles.css">
	<link rel="stylesheet" type="text/css" href="css/footerstyles.css">
	<link rel="stylesheet" type="text/css" href="css/contactstyles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     
</head>
<body>
	<nav>
	   <input type="checkbox" id="check">
	   <label for="check" class="checkbtn">
			<i class="fa fa-bars"></i>
		</label>
		<label class="logo">MVGR</label>
		
		<ul  class="side">
			<li><a class="active" href="index.html">Home</a></li>
			<li><a href="departments.html">Departments</a></li>
			<!--<li><a href="#">Facilities</a></li>--->
			<li><a href="contactform.php">Contact Us</a></li>
			<li><a href="aboutus.html">About Us</a></li>
			<li><a href="fd.php">Feedback</a></li>
		</ul>
	</nav>
	<section>
		
		<div class="contact-title">
			<h1>Hello!</h1><br>
			<h2>We Are Always On Services!</h2>
		</div>
		<div class="contact-form">
			<form id="contact-form" method="POST" action="">
			  
				<input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
				<input name="email" type="text" class="form-control" placeholder="Your Email" required><br>
				<textarea name="message" class="form-control" placeholder="Message" row="4" required></textarea><br>
				<input type="submit" class="form-control submit" value="SEND MESSAGE">
			  
			</form>
		</div>
	</section>
	
	
	<!-----------Footer----------------------->
	
	<footer>
		
				<div class="container">
					<div class="sec aboutus">
						<h2>Upgrades</h2>
						<p>Ranked 76 in India among Top 100 private engineering institutes by i3RC Times Ranking 2018 and
	   Ranked 95 including universities by Times engineering survey and MBA courses
	   Ranked 98 by NIRF in 2017.</p>
	   
					<ul class="sci">
					    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
					    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
					    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
					    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
					    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
				   </ul>			
				    </div>
					<div class="sec quickLinks">
						<h2>Quick Links</h2>
						<ul>
							<li><a href="#">Committees</a></li>
							<li><a href="contactform.php">Contact</a></li>
							<li><a href="#">Directory</a></li>
							<li><a href="#">Downloads Section</a></li>
							<li><a href="#">Grievances</a></li>
							<li><a href="#">Privacy Policy</a></li>
						</ul>
					</div>
					<div class="sec contact">
						<h2>Contact Info</h2>
						<ul class="info">
							<li>
								<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<span>Chinthalavalasa,Vizianagaram<br>
								      Andhrapradesh,535005</span>
							</li>
							<li>
								<span><i class="fa fa-phone" aria-hidden="true"></i></span>
								<p><a href="tel:08922241732">08922241732</a><br><a href="tel:08922241039">08922241039</a></p>
							</li>
							<li>
								<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
								<p><a href="mailto:mvgrceofficial@gmail.com">mvgrceofficial@gmail.com</p>
							</li>
						</ul>
					</div>
				</div>
	</footer>
	<div class="copyrightText">
		<p>ALL Rights Reserved to MVGR COLLEGE OF ENGINEERING(A) Copyright © 2021</p>
		<p>Designed by Avinash Betha</p>
	</div>


</body>
</html>