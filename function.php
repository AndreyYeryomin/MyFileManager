<?php function size_dir($DIR,$size){
	$handle = opendir ($DIR);
	while ($file = readdir ($handle))
	{
		if ($file == "." or $file == ".."){
                                  continue;
                                 }
       
		if (filetype("$DIR/$file") == "file")
		{
			$size = $size + filesize("$DIR/$file");
		}
		else {
                                $size = size_dir("$DIR/$file",$size);  
                              }
                        }

	closedir($handle);
return $size;
}

function myCmp($a, $b) {
    if ($a['type'] === $b['type']) return 0;
    return $a['type'] > $b['type'] ? 1 : -1;
}
?>