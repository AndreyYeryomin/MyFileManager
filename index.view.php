<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>FileManager</title>
</head>

<body>
<?php echo $curentDir; ?>
<?php if($curentDir!=$dir){?>
<a onclick="history.back();">Назад</a>
<?php } ?>
<table>
<?php 
uasort($list, 'myCmp');
foreach ($list as $item) { 
$skip = array('.', '..');
if(!in_array($item['name'], $skip)){
	?>
    <tr>
    <?php if($item['type']=='file'){?>
    	<td><?= $item['name']; ?></td>
    <?php }else{ ?>
        <td><a href="<?= '?DIR='.$curentDir.'/'.$item['name'];?>" <?php if(preg_match('/[0-9]/',$item['name'])){ echo "onclick='return false;' "; } ?> ><?= $item['name']; ?></a></td>
        <?php } ?>
        <td><?= $item['size'].' КБ'; ?></td>
    </tr>
    <?php }} ?>
</table>
</body>
</html>
