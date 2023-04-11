<?php
session_start();
// Generate 3 random chars.
$random_alpha           = md5(rand());
$captcha_code           = substr($random_alpha, 0, 3);

$_SESSION['capcha_code'] = $captcha_code;

header('Content-Type: image/png');
// Create image and set its background, and color
$image              = imagecreatetruecolor(200, 100);
$background_color   = imagecolorallocate($image, 0, 0, 0);
$text_color         = imagecolorallocate($image, 255, 255, 255);

// Fill the image
imagefilledrectangle($image, 0, 0, 200, 100, $background_color);
$font               = dirname(__FILE__). '/arial.ttf';
imagettftext($image, 20, 0, 60, 50, $text_color, $font, $captcha_code);

// View image in the browser
imagepng($image);
// Free space
imagedestroy($image);


?>


