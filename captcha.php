<?php
session_start();
$random_alpha           = md5(rand());
$captcha_code           = substr($random_alpha, 0, 3);

$_SESSION['capcha_code'] = $captcha_code;

header('Content-Type: image/png');
$image              = imagecreatetruecolor(200, 100);
$background_color   = imagecolorallocate($image, 0, 0, 0);
$text_color         = imagecolorallocate($image, 255, 255, 255);

imagefilledrectangle($image, 0, 0, 200, 100, $background_color);

$font               = dirname(__FILE__). '/arial.ttf';
imagettftext($image, 20, 0, 60, 50, $text_color, $font, $captcha_code);


imagepng($image);

imagedestroy($image);


?>


