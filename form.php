<?php
    session_start();
    // Check for captcha, and if user-input == captcha text
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get user input and captcha from session
        $user_input = trim($_POST['form-captcha']);
        // $captcha = $_SESSION['captcha'];
        $captcha = $_SESSION['capcha_code'];
    
        // Compare user input to captcha
        if (strcasecmp($user_input, $captcha) === 0) {
            // Captcha matches, do something here
            echo "Captcha matches!";
        } else {
            // Captcha doesn't match, show error message
            echo "Captcha doesn't match!" .'<br>';
            echo $captcha .'<br>';
            echo $user_input.'<br>';
            echo $_SESSION['capcha_code'];
        }
    
        // Destroy session and redirect to original page
        // session_destroy();
        // header('Location: index.php');
        // exit();
    }

?>