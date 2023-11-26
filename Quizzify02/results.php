<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>results</title>
    <link rel="stylesheet" type="text/css" href="results.css">
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

    <!--Result box-->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">you've completed the quiz!</div>
        <div class="score_text">
            <span>and sorry, you got only <p>2</p>out of<p>5</p></span>
        </div>
        <div class="buttons">
            <button class="restart">Replay Quiz</button>
            <button class="quit">Quit Quiz</button>
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
    
</body>
</html>