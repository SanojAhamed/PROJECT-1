<?php
// Include your database connection logic from db_connection.php
include 'connect.php';

if (isset($_POST['ok-btn'])) {
    // Get the submitted passcode
    $enteredPasscode = isset($_POST['firstDigit']) ? $_POST['firstDigit'] : '';
    $enteredPasscode .= isset($_POST['secondDigit']) ? $_POST['secondDigit'] : '';
    $enteredPasscode .= isset($_POST['thirdDigit']) ? $_POST['thirdDigit'] : '';
    $enteredPasscode .= isset($_POST['fourthDigit']) ? $_POST['fourthDigit'] : '';

    // Assuming you have a table named 'quiz' with a column 'quiz_passcode'
    $sql = "SELECT quiz_passcode FROM quiz";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        // Assuming there is only one row in the quiz table
        $row = $result->fetch_assoc();
        $quizTablePasscode = $row["quiz_passcode"];

        print_r($quizTablePasscode);

        // Check if the entered passcode matches the one in the quiz table
        if ($enteredPasscode === $quizTablePasscode) {
            // Redirect to info.php
            header("Location: info.php");
            exit();
        } else {
            // Display an error message or redirect to an error page
            echo "Incorrect passcode. Please try again.";
            // You might want to add a delay or a link to go back to the previous page
        }
    } else {
        echo "Error: No rows found in the quiz table.";
    }
}

// Close the connection
$con->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="quizpin.css">
</head>

<body>
    <div class="container">
        <div class="popup">

            <img src="tick.png">
            <h2 class="txt">Hi welcome to quizzify! To play quiz,</h2>

            <!-- Pop-up container -->
            <div class="popup-container" id="popupContainer">
                <!-- Pop-up box -->
                <div class="popup-box">
                    <!-- <span class="close-button" onclick="closePopup()">&times;</span> -->
                    <h2>Enter the Passcode</h2>

                    <form method="post" action="">
                    <div class="userInput" style="display: flex; justify-content: center;">
                        <!-- Update the name attribute for each input -->
<input type="text" name='firstDigit' id='1st' maxlength="1" oninput="moveToNext(this, 'sec')">
<input type="text" name="secondDigit" id="sec" maxlength="1" oninput="moveToNext(this, 'third')">
<input type="text" name="thirdDigit" id="third" maxlength="1" oninput="moveToNext(this, 'fourth')">
<input type="text" name="fourthDigit" id="fourth" maxlength="1">

                    </div>

                </div>
            </div>
            <!-- <input type="text" id="quizPinInput"> -->
            <button type="submit" name="ok-btn">Ok</button>
</form>
        </div>
    </div>

    <script>
        ///let popup = document.getElementById("popup");

        //function openpopup() {
           // popup.classList.add("open-popup");

        //}

        //function closepopup() {
           // popup.classList.remove("open-popup");

        //}

        // pop up


        function moveToNext(currentInput, nextInputId) {
            const maxLength = parseInt(currentInput.getAttribute('maxlength'));
            const currentLength = currentInput.value.length;

            if (currentLength === maxLength) {
                const nextInput = document.getElementById(nextInputId);

                if (nextInput) {
                    nextInput.focus();
                }
            }
        }


    </script>
</body>

</html>