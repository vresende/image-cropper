<?php


require __DIR__ . "/../src/ImageCropper.php";

//$thumb = new \Vresende\ImageCropper\ImageCropper("cache");
$thumb = new \Vresende\Cropper\ImageCropper("cache");
$thumb->flush();

echo "<p><img src='{$thumb->make("images/image.jpg", 200)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 400,400)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 1200,628)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.jpg", 200,600)}' alt='ImageCropp' title='ImageCropp'></p>";

echo "<p><img src='{$thumb->make("images/image.png", 200)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 400,400)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 1200,628)}' alt='ImageCropp' title='ImageCropp'></p>";
echo "<p><img src='{$thumb->make("images/image.png", 200,600)}' alt='ImageCropp' title='ImageCropp'></p>";

//$thumb->flush("images/image.jpg"); //All image named
//$thumb->flush("images/image.png"); //All image named
//$thumb->flush(); //All image named