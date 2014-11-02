<?php
	
	
		$dirname="shangchuan";

		copydir($dirname."/uploads", $dirname."/hello");
		
		function copydir($dirsrc, $dirto){
			if(is_file($dirto)){
				echo "目标不是目录不能创建";
				return;
			}else if(!file_exists($dirto)){
				mkdir($dirto);
			}
			
			$dir=opendir($dirsrc);

			while($filename=readdir($dir)){
				if($filename!="." && $filename!=".."){
					$file1=$dirsrc."/".$filename;
					$file2=$dirto."/".$filename;
			
					if(is_dir($file1)){
						copydir($file1, $file2);
					}else{
						copy($file1, $file2);
					}
				}
			}
			closedir($dir);
		}
?>