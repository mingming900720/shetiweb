<?php

	class FileBianli{
		private $dirname;
		private $dirsize=0;
		private $totalsize=0;
		
		
		function bianliDir($dirname){

			$dir=opendir($dirname);

			while($fileName=readdir($dir)){
				if($fileName!="." && $fileName!=".."){
					$file=$dirname.'/'.$fileName;
					if(is_dir($file)){
						echo "<font color='red'>".$fileName."---".date("Y-m-d H:i:s")."---".filetype($file)."---".$this->toSize($this->dirsize($file))."---</font><br>";
						$totalsize+=$this->dirsize($file);
					}else{
						echo "<font color='blue'>".$fileName."---".date("Y-m-d H:i:s")."---".filetype($file)."---".$this->toSize(filesize($file))."---</font><br>";
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