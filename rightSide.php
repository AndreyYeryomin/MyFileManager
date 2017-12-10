<div class="side rightSide">
<input class="path" type="text" value="<?php echo $curentDirRight; ?>" readonly>
<?php if($curentDirRight!=$dir){?>
<a onclick="history.back();">Назад</a>
<?php } ?>
<table>
<?php 
uasort($listRight, 'myCmp');
foreach ($listRight as $item) { 
$skip = array('.', '..');
if(!in_array($item['name'], $skip)){
	?>
    <tr>
    <?php if($item['type']=='file'){?>
    	<td class="file"><span></span><p><?= $item['name']; ?></p></td>
    <?php }else{ ?>
        <td class="dir"><span></span><a href="<?= '?DIRR='.$curentDirRight.'/'.$item['name'];?>" <?php if(preg_match('/[0-9]/',$item['name'])){ echo "onclick='return false;' "; } ?> >[<?= $item['name']; ?>]</a></td>
        <?php } ?>
        <td class="size"><?= $item['size'].' КБ'; ?></td>
    </tr>
    <?php }} ?>
</table>
</div>