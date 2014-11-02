<?php


		$dirname="shangchuan/uploads";

		deldir($dirname);
		
		function deldir($dirname){
			if(file_exists($dirname)){
				$dir=opendir($dirname);
				
				while($filename=readdir($dir)){
					if($filename!="." && $filename!=".."){
						$file=$dirname."/".$filename;
						
						if(is_dir($file)){
							deldir($file);//使用递归删除子目录
						}else{
							echo '删除文件'.$filename.'成功<br>';
							unlink($file);
						}
					}
				}
				closedir($dir);
				rmdir($dirname);
				echo '删除目录<b>'.$dirname.'</b>成功<br>';
			}
		}
		
