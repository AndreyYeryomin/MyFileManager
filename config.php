<?php 
$dir = __DIR__.'/FILE';
if($_POST['goLeft'] == ""){
	$curentDirLeft =$dir;
}else{
	$curentDirLeft =$_POST['goLeft'];
}
if($_POST['backLeft'] == ""){
	$curentDirLeft =$dir;
}else{
	$curentDirLeft =dirname($_POST['backLeft']);;
}

?>