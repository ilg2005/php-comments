<?php
session_start();

$font_file = realpath('') . DIRECTORY_SEPARATOR . 'font' . DIRECTORY_SEPARATOR . 'Roboto-Thin.ttf';

$randomnr = random_int(1000, 9999);
$_SESSION['randomnr2'] = md5($randomnr);

$im = imagecreatetruecolor(100, 38);

$grey = imagecolorallocate($im, 233, 236, 239);
$black = imagecolorallocate($im, 0, 0, 0);
$darkgrey = imagecolorallocate($im, 73, 80, 87);

imagefilledrectangle($im, 0, 0, 200, 200, $grey);

imagettftext($im, 20, 4, 22, 30, $black, $font_file, $randomnr);

imagettftext($im, 20, 4, 15, 32, $darkgrey, $font_file, $randomnr);

//prevent caching on client side:
header("Expires: Wed, 1 Jan 2025 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

header("Content-type: image/gif");
imagegif($im);
imagedestroy($im);

echo '';
