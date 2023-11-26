<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Info</title>
    <link rel="stylesheet" type="text/css" href="info.css">
</head>
<body>

    <!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="QUIZZIFY.png" alt="logo"></div>
			<ul>
				<li><a class="active" href="">Home</a></li>
				<li><a href="../../QuizCreationapi/index.php">Quiz</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="#about_section">About us</a></li>
				<li><a href="#team_section">Team</a></li>
			</ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="search.png" alt="search" onclick=slide()></div>
			<a class="get-started" href="../../Interface/php_files/registration.php">Get Started</a>
			
		</nav>
		
	</header>
    

<!--Info Box-->
<div class="info_box">
    <div class="info_title">
        <span>Welcome to Quizzify!</span>
    </div>
    <div class="info_list">
        <div class="info">1. You will have only <span>15 seconds</span> per each question.</div>
            <div class="info">2. Read each question carefully before selecting an answer.</div>
            <div class="info">3. You can't select any option once time goes off.</div>
            <div class="info">4. Select the answer you believe is correct by clicking on the corresponding letter (A, B, C, or D).</div>
            <div class="info">5. After selecting an answer, you can move on to the next question by clicking the "Next" button.</div>
            <div class="info">6. You'll get points on the basis of your correct answers.</div>
    </div>

    <div class="buttons">
        <button class="quit" id="exitButton">Exit Quiz</button>
        <button class="restart" id="continueButton">Continue</button>        
     </div>
    </div>

    <!-- FOOTER -->
<footer>
    <div class="footer-container">
        <div class="left-col">
            <img src="QUIZZIFY-preview.png" style="width: 200px;">
            <div class="logo"></div>

            <p class="rights-text">Copyright © 2023 Created By UWU TEAM, All Rights Reserved.</p>
            <br>
            <p><img src="location.png"> Passara Road, Badulla</p><br>
            <p><img src="phone.png"> 055-222-4446<br>
            <!-- <p><img src="../../images/icon/mail.png">&nbsp; </p> -->
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


    <script>
        document.getElementById('continueButton').onclick = function() {
            // Redirect to the "question.html" file
            window.location.href = 'question.php';
        };
    
        document.getElementById('exitButton').onclick = function() {
            // Redirect to the "start.html" file
            window.location.href = 'start.php';
        };
    </script>
    

</body>
</html>