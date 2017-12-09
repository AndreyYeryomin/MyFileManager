<?php 
class FileManager 
{
 public $dir;
    function __construct($dir) {
 $this->dir = $dir;
    }
	public function getList()
	{
		$dir = $this->dir;
		$listWin1251 = scandir($dir);
		$handle = opendir($dir);

		for ($i=0; $i < count($listWin1251); $i++) { 
			$file[$i] = readdir($handle);
			$listDir[$i]['name'] = iconv('windows-1251', 'utf-8', $listWin1251[$i]);
			$listDir[$i]['type'] = filetype("$dir/$file[$i]");
			$listDir[$i]['size'] = $this->getSize($dir,$file[$i],$listDir[$i]['type']);

		}
		closedir($handle);
		return $listDir;
	}

	public function changeDir($dir)
	{
		$dir =iconv('utf-8', 'windows-1251', $dir);
		$this->dir = $dir;
		$this->getList();
	}

	public function getSize($dir,$file,$type)
	{
		$size = 0;
		if($type == 'file'){
			$size = round(filesize("$dir/$file")/1024, 2);
			return $size;
		}else{
			  $size=size_dir("$dir/$file",$size);
        $size=round($size/1024, 2);
        return $size;
		}
	}
}




?>