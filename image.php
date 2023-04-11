<?php
    session_start();
    $characters = 'a0bcde1fghi2jklm3nopq4rstu5vwx6yzA7BCDE8FGHIJ9KLMN3OPQRS2TUVW1XYZ0';
    $charactersLength = strlen($characters);

    $randomString = '';
    for ($i = 0; $i < 3; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    
    $_SESSION['captcha'] = $randomString;
    // if get captcha text and captcha session
    if(isset($_GET['captcha_text']) && isset($_SESSION['captcha'])){
        
        $captcha_text = $_GET['captcha_text']; // Get text from "capatcha_text" parameter
        
        $image = imagecreate(150, 100); // create new image
        $background_color = imagecolorallocate($image, 0, 0, 0); // Image background color

        $text_color = imagecolorallocate($image, 255,255,255); // Image text color

        imagestring($image, 8,55,40, $captcha_text, $text_color); // Captcha string

        header('Content-type: image/png');
        imagepng($image); // Output the image
        imagecolordeallocate($image, $text_color);
        imagecolordeallocate($image, $background_color); 
        imagedestroy($image);
    }
?>

