<?php


		$dirname="shangchuan/uploads";
		
		echo $dirname."共计大小为：".toSize(dirsize($dirname))."<br>";
		
		$dir=opendir($dirname);

		while($fileName=readdir($dir)){
			if($fileName!="." && $fileName!=".."){
				$file=$dirname.'/'.$fileName;
				if(is_dir($file)){
					echo "<font color='red'>".$fileName."---".date("Y-m-d H:i:s")."---".filectime($file)."---".filetype($file)."---".toSize(dirsize($file))."---</font><br>";
				}else{
					echo "<font color='blue'>".$fileName."---".date("Y-m-d H:i:s")."---". filectime($file)."---".filetype($file)."---".toSize(filesize($file))."---</font><br>";
				}
			}
		}
		


		closedir($dir);
		
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
			$dirsize=0;
			
			$dir=opendir($dirname);
			
			while($filename=readdir($dir)){
				 $file=$dirname."/".$filename;
				 if($filename!="." && $filename!=".."){
					if(is_dir($file)){
						dirsize($file);//递归完成
					}else{
						$dirsize+=filesize($file);
					}
				 }
			}
			
			closedir($dir);
			return $dirsize;
		}
		
?>