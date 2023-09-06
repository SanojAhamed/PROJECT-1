<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" type="png" href="http://localhost/Quizzify/Quizzify/images/icon2.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Quizzify</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="Home.css">
	<script type="text/javascript" src="Home.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>

	<script>
		$(window).on('scroll', function() {
			if ($(window).scrollTop()) {
				$('nav').addClass('black');
			} else {
				$('nav').removeClass('black');
			}
		})
	</script>
</head>

<body>
	<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="http://localhost/Quizzify/Quizzify/images/QUIZZIFY.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="http://localhost/Quizzify/Quizzify/QuizCreation/quiz.php">Quiz</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="#about_section">About us</a></li>
				<li><a href="#team_section">Team</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="http://localhost/Quizzify/Quizzify/images/icon/search.png" alt="search" onclick=slide()></div>
			<a class="get-started" href="http://localhost/Quizzify/Quizzify/Interface/php_files/registration.php">Get Started</a>
			<img src="http://localhost/Quizzify/Quizzify/images/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Discover a boundless world of knowledge on our quiz website. Embrace the beauty of learning, for it is an everlasting treasure only you possess. Start your journey today!</h5>
				<div class="play">
					<img src="http://localhost/Quizzify/Quizzify/images/icon/play.png" alt="play"><span><a href="#" target="_blank">Watch Now</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="http://localhost/Quizzify/Quizzify/images/sample4.png" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="http://localhost/Quizzify/Quizzify/images/icon/close.png" alt=""></div>
			<!-- <div class="user">
				<img src="images/creator/Sanoj.jpg" alt="Username">
				<p>Sanoj Ahamed</p> -->
			<!-- </div> -->
			<ul>
				<li><a href="#about_section">About</a></li>
				<li><a href="#team_section">Team</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				
			</ul>
		</div>
	</header>


	<!-- Some Popular Subjects -->
	<div class="title" id="blog">
		<span>Popular Subjects on Quizzify</span>
	</div>
	<br><br>
	<div class="course">
		<center>
			<div class="cbox">
				<div class="det"><a href="#"><img src="http://localhost/Quizzify/Quizzify/images/courses/book.png">Cybersecurity</a></div>
				<div class="det"><a href="#"><img src="http://localhost/Quizzify/Quizzify/images/courses/d1.png">Machine Learning</a></div>
				<div class="det"><a href="#"><img src="http://localhost/Quizzify/Quizzify/images/courses/paper.png">5G Technology</a></div>
				<div class="det"><a href="#"><img src="http://localhost/Quizzify/Quizzify/images/courses/d1.png">Biotechnology</a></div>
			</div>
		</center>
		<div class="cbox">
			<div class="det"><a href="#"><img src="http://localhost/Quizzify/Quizzify/images/courses/computer.png">Computer Courses</a></div>
			<div class="det"><a href=#"><img src="http://localhost/Quizzify/Quizzify/images/courses/data.png">Data Structures</a></div>
			<div class="det"><a href="#"><img src="http://localhost/Quizzify/Quizzify/images/courses/algo.png">Algorithm</a></div>
			<div class="det det-last"><a href="#"><img src="http://localhost/Quizzify/Quizzify/images/courses/projects.png">Automation</a></div>
		</div>
	</div>


	<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center>
			<p style="font-size: 50px; padding: 100px">About</p>
		</center>
		<div class="about-content">
			<div class="side-image">
				<img class="sideImage" src="http://localhost/Quizzify/Quizzify/images/sample3.png""">
			</div>
			<div class="side-text">
				<h2>What you think about us ?</h2>
				<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.<br> Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age.</p>
			</div>
		</div>
	</div>


	<!-- TEAM -->
	<div class="diffSection" id="team_section">
		<center>
			<p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p>
		</center>
		<div class="totalcard">
			<div class="card">
				<center><img src="http://localhost/Quizzify/Quizzify/images/userDp.png"></center>
				<center>
					<div class="card-title">Sanoj Ahamed</div>
					<div id="detail">
						<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
						<div class="duty"></div>
						<a href="https://www.linkedin.com/in/sanoj-ahamed/" target="_blank"><button class="btn-sanoj">Follow +</button></a>
					</div>
				</center>
			</div>
			<div class="card">
				<center><img src="http://localhost/Quizzify/Quizzify/images/creator/Sanoj.jpg"></center>
				<center>
					<div class="card-title">Sanoj Ahamed</div>
					<div id="detail">
						<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
						<div class="duty"></div>
						<a href="#" target="_blank"><button class="btn-name">Follow +</button></a>
					</div>
				</center>
			</div>
		</div>
	</div>


	<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center>
			<p style="font-size: 50px; padding: 100px">Contact Us</p>
		</center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
				<form action="123@gmail.com" method="post" enctype="text/plain">
					<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
					<center>
						<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
					</center>
					<label>Email <span class="imp">*</span></label><br>
					<input type="email" name="mail" style="width: 100%" required="required"><br>
					<label>Message <span class="imp">*</span></label><br>
					<input type="text" name="message" style="width: 100%" required="required"><br>
					<label>Additional Details</label><br>
					<textarea name="addtional"></textarea><br>
					<button type="submit" id="csubmit">Send Message</button>
				</form>
			</div>
		</div>
	</div>

	<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #4AA017, #b3f58d); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20">
		<div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div>
	</marquee>

	<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="http://localhost/Quizzify/Quizzify/images/QUIZZIFY preview.png" style="width: 200px;">
				<div class="logo"></div>

				<p class="rights-text">Copyright © 2023 Created By UWU TEAM, All Rights Reserved.</p>
				<br>
				<p><img src="http://localhost/Quizzify/Quizzify/images/icon/location.png"> Passara Road, Badulla</p><br>
				<p><img src="http://localhost/Quizzify/Quizzify/images/icon/phone.png"> 055-222-4446<br>
				<!-- <p><img src="http://localhost/Quizzify/Quizzify/images/icon/mail.png">&nbsp; </p> -->
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>

</html>