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

			$dir=opendir($dirname);

			while($fileName=readdir($dir)){
				if($fileName!="." && $fileName!=".."){
					$file=$dirname.'/'.$fileName;
					if(is_dir($file)){
						echo "<font color='red'>".$fileName."-".date("Y-m-d H:i:s")."-".filetype($file)."-".$this->toSize($this->dirsize($file))."-</font><br>";
						$totalsize+=$this->dirsize($file);
					}else{
						echo "<a href='$file'><font color='blue'>".$fileName."-".date("Y-m-d H:i:s")."-".filetype($file)."-".$this->toSize(filesize($file))."-</font></a><br>";
						$totalsize+=filesize($file);
					}
				}
			}
			closedir($dir);
			echo $dirname."共计大小为：".$this->toSize($totalsize)."<br>";
			return true;
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
						$this->dirsize($file);//递归完成
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