<?php if($_POST['goLeft']==""){
$curentDirLeft = $curentDirLeft;
}else{
	$curentDirLeft = $_POST['goLeft'];
		$FileManager->changeDir($curentDirLeft);

	
}
if($_POST['backLeft'] == ""){
	$curentDirLeft =$curentDirLeft;
}else{
	$curentDirLeft =dirname($_POST['backLeft']);
	$FileManager->changeDir($curentDirLeft);
}


?>