<?php
require_once("ImgMerge.php");
//sample usage

/*
//for file save:
$merge = new ImgMerge(array("base.png", 'logo.jpg', "coberta.png"), 'center', 'button.png');
*/

//for image output
if(isset($_POST['submit'])){
$fst="logo.jpg";
$sec="mala.png";

function getimage($first,$second){
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
Header( "Content-type: image/png");
$merge = new ImgMerge(array($first, $second), 'center');
}

getimage($fst,$sec);
}

?>
<form method="post" action="<?=($_SERVER['PHP_SELF'])?>">
<input type="submit" name="submit" value="Get Image">
</form>
