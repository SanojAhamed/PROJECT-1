<?php

session_start();
session_unset();
session_destroy();

// going back to front page
header("Location: http://localhost/New/Interface/php_files/Home.php");  

//debug code
// print_r("session ends");
