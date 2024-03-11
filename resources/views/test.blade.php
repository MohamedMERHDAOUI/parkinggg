<?php
echo"bonjour jDM";

header ("Content-type: image/png");

$image = imagecreate(200,50);

$bleuclair = imagecolorallocate($image, 156, 227, 254);

?>
