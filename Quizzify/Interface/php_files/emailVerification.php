<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" type="png" href="http://localhost/New/images/icon.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify account</title>

    <link rel="stylesheet" href="../css_files/verification.css">
    <script src="verification.js"></script>

</head>

<body>
    <div class="main">
        <div class="container" style="width: 300px;">

            <h1 style="font-size: 20px; margin-top: 35px;">OTP VERIFICATION</h1><br><br>
            <h3 style="text-align: center; font-family: Arial; font-size: 15px; color: grey;">Enter the one time password <br> sent to your email address to <br> verify your account</h3><br><br><br>

            <div class="userInput">
                <input type="text" id='1st' maxlength="1" onkeyup="clickEvent(this,'sec')">
                <input type="text" id="sec" maxlength="1" onkeyup="clickEvent(this,'third')">
                <input type="text" id="third" maxlength="1" onkeyup="clickEvent(this,'fourth')">

                <input type="text" id="fourth" maxlength="1">
            </div><br><br><br>
            <button onclick="window.location.href='http://localhost/New/interface/php_files/chooseRole.php';" >VERIFY ACCOUNT</button>
        </div>
    </div>


</body>

</html>