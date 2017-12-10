<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FileManager</title>
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="side leftSide">
<input class="path" id="leftPath" type="text" value="<?php echo $curentDirLeft; ?>" readonly>
<?php if($curentDirLeft!=$dir){?>
<form action="" method='POST'>
<input type="text" hidden name="backLeft" id="backLeft" value="<?php echo $curentDirLeft; ?>">
<input type="submit" value="Назад">
</form>
<?php } ?>
<form action="" method='POST'>
<input type="text" hidden name="goLeft" id="inPath" value="<?php echo $curentDirLeft; ?>">
<input type="submit"  value="Перейти">
</form>
<table id="leftSide">
<?php 
uasort($listLeft, 'myCmp');
foreach ($listLeft as $item) { 
$skip = array('.', '..');
if(!in_array($item['name'], $skip)){
	?>
    <tr>
    <?php if($item['type']=='file'){?>
    	<td class="file"><span></span><p><?= $item['name']; ?></p></td>
    <?php }else{ ?>
        <td class="dir"><span></span><a href= " " onclick='return false;'><?= $item['name']; ?></a></td>
        <?php } ?>
        <td class="size"><?= $item['size'].' КБ'; ?></td>
    </tr>
    <?php }} ?>
</table>
</div>


<script src="js/script.js"></script>
</body>
</html>
