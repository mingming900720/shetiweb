<?php

	class FileBianli{
		private $dirname; //文件目录
		private $dirsize=0;//文件大小
		private $totalsize=0;//所求文件夹的总大小
		
		//获取当前目录下所有的文件夹的名称，返回值为数组形式
		function getDirnames($updir){
			$dir=opendir($updir);
			$i=0;
			while($fileName=readdir($dir)){
				if($fileName!="." && $fileName!=".." && is_dir($updir."/".$fileName)){
					$file=$updir."/".$fileName;
					$dirnames[$i]=$file;
					$i++;
				}
			
			}
			closedir($dir);
			return $dirnames;
			
		}
		
		function bianliDir($dirname){
			$dirnames=$this->getDirnames($dirname);

			if($dirnames!=""){
				foreach($dirnames as $key=>$val){

					$vals=explode("/", $val);
					$lastdir=$vals[count($vals)-1];
					echo '<form action="listfile.php" method="post" enctype="multipart/form-data">';	
					echo '<input type="hidden" name="dirname" value="'.$val.'"/>';	
					echo '<input type="submit" name="sub" value="'.$lastdir.'"/><b>共计:</b> '.$this->toSize($this->dirsize($val)).'<br>';
					echo '</form>';

				}
			}
			
			$dir=opendir($dirname);
			$i=0;
			//如果是文件则将其存入到文件数组$filenames并且在最后返回本数组
			while($fileName=readdir($dir)){
				if($fileName!="." && $fileName!=".."){
					$file=$dirname.'/'.$fileName;
					if(is_dir($file)){
						$totalsize+=$this->dirsize($file);
					}else{
						$filenames[$i]=$file;
						$i++;
						$totalsize+=filesize($file);
					}
				}
			}
			closedir($dir);
			if($totalsize>0){
				$vals=explode("/", $dirname);
				$lastdir=$vals[count($vals)-1];
				//echo $lastdir."共计大小为：".$this->toSize($totalsize)."<br>";
			}else{
				echo "<b>Sorry,目前此分类还么有内容</b><br>";
			}
			return $filenames;
		}

		
		
		function toSize($size){
			$dw="Bytes";
			if($size > pow(2,30)){
				$size=round($size/pow(2,30),2);
				$dw="GB";
			}else if($size > pow(2,20)){
				$size=round($size/pow(2,20),2);
				$dw="MB";
			}else if($size > pow(2,10)){
				$size=round($size/pow(2,10),2);
				$dw="KB";
			}else{
				$dw="bytes";
			}
			return $size.$dw;
			
		}
		
		function dirsize($dirname){
			$dir=opendir($dirname);
			
			while($filename=readdir($dir)){
				 $file=$dirname."/".$filename;
				 if($filename!="." && $filename!=".."){
					if(is_dir($file)){
						$dirsize+=$this->dirsize($file)."<br>";//递归完成
					}else{
						$dirsize+=filesize($file);
					}
				 }
			}

			closedir($dir);
			return $dirsize;
		}
	}
?>