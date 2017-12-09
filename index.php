
<?php
require 'function.php';
require 'class.php';
require 'config.php';
$FileManager = new FileManager($curentDir);


require 'manipulation.php';
$list = $FileManager->getList();

require 'index.view.php';
?>