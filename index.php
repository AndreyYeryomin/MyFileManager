
<?php
@session_start();
require 'function.php';
require 'class.php';
require 'config.php';

$FileManager = new FileManager($curentDirLeft);
//$FileManager1 = new FileManager($curentDirRight);
require 'manipulation.php';


$listLeft = $FileManager->getList();
//$listRight = $FileManager1->getList();

require 'index.view.php';
?>