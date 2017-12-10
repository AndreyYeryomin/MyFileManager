
<?php
@session_start();
require 'function.php';
require 'class.php';
require 'config.php';

$FileManager = new FileManager($curentDirLeft);
require 'manipulation.php';


$listLeft = $FileManager->getList();

require 'index.view.php';
?>