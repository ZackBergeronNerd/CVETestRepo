<?php
header('Content-Type: image/jpeg');
// Create an image, 1x1 pixel in size
$im=imagecreate(1,1);

// Set the background colour
$white=imagecolorallocate($im,255,255,255);

// Allocate the background colour
imagesetpixel($im,1,1,$white);

// Create a JPEG file from the image
imagejpeg($im);

// Free memory associated with the image
imagedestroy($im);

if(isset($_GET['e'])) {
  //$email = UserWebsiteSend::find(Helpers::b64_encode($_GET['e']));

  mail("ryan@kempfintl.com","testing",$_GET['e']);

}
?>
