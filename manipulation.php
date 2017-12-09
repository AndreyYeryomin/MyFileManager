<?php if($_GET['DIR']==""){
$curentDir = $dir;
}else{
	$curentDir = $_GET['DIR'];
		$FileManager->changeDir($curentDir);

	
}
?>