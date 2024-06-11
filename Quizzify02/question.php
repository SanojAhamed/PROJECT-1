<?php
include 'connect.php';


// Check if the passcode is set in the URL parameters
if(isset($_GET['quiz_passcode'])) {
    // Sanitize and get the passcode from the URL
    $passcode = mysqli_real_escape_string($con, $_GET['quiz_passcode']);

    // Retrieve quiz details and related questions based on the passcode
    $query = "SELECT quiz.*, question.* FROM quiz 
              JOIN question ON quiz.quiz_id = question.quiz_id 
              WHERE quiz.quiz_passcode = '$passcode'";
    $result = mysqli_query($con, $query);

    // Check if there are any results
    if(mysqli_num_rows($result) > 0) {
        // Fetch data and display as needed
        while($row = mysqli_fetch_assoc($result)) {
            $quizTitle = $row['quiz_title'];
            $questionText = $row['question'];
            $option1 = $row['choice01'];
            $option2 = $row['choice02'];
            $option3 = $row['choice03'];
            $option4 = $row['choice04'];

            // Display the quiz title and question as needed
            echo '<div class="quiz_title">' . $quizTitle . '</div>';
            echo '<div class="que_text">
                    <span>' . $questionText . '</span>
                  </div>';

            // Display options and other details as needed
            echo '<div class="option_list">
                    <div class="option">
                        <span>' . $option1 . '</span>
                        <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                    </div>';
            // Repeat the structure for other options

            echo '<div class="option_list">
                    <div class="option">
                        <span>' . $option2 . '</span>
                        <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                    </div>';

                    echo '<div class="option_list">
                    <div class="option">
                        <span>' . $option3 . '</span>
                        <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                    </div>';

                    echo '<div class="option_list">
                    <div class="option">
                        <span>' . $option4 . '</span>
                        <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                    </div>';

        }

    } else {
        echo 'No quiz found for the provided passcode.';
    }

    // Free the result set
    mysqli_free_result($result);

} else {
    echo 'Passcode not provided.';
}

// Close the connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>question</title>
    <link rel="stylesheet" type="text/css" href="question.css">
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


    <!--Quiz box-->
    <div class="quiz_box">
        <header>
            <div class="title">Quizzify</div>
            <div class="timer">
                <div class="time_text">Time Left</div>
                <div class="timer_sec">15</div>
            </div>
        </header>

        <section>

            <div class="que_text">
                <span>what does html stand for?</span>
            </div>

            <div class="option_list">
                <div class="option">
                    <span>Hyper Text Markup Language</span>
                    <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                </div>

                <div class="option_list">
                    <div class="option">
                        <span>Hyper Text Markup Language</span>
                        <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                    </div>

                    <div class="option_list">
                        <div class="option">
                            <span>Hyper Tool multi language</span>
                            <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                        </div>

                        <div class="option_list">
                            <div class="option">
                                <span>Hyper Text multi language</span>
                                <div class="icon cross"><i class="fa-solid fa-xmark"></i></div>
                            </div>

                        </div>
                    </section>
            
                    <!--Quiz Box footer-->
                    <footer>
                        <div class="total_que">
                            <span><p>2</p>of<p>5</p>Questions</span>
                        </div>
            
                        <div class="nav-buttons">
                            <button class="nav-button">1</button>
                            <button class="nav-button">2</button>
                            <button class="nav-button">3</button>
                            <button class="nav-button">4</button>
                    </div>
            
                    <button class="next_btn" id="nextButton">Next Que</button>
                    </footer>
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