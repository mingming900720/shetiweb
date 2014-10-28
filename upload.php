<?php
		require "FileUpload.class.php";
		
		$up=new FileUpload();
		
		if($up->uploadFile('spic')){
			$up->echo $up->getNewFileName();
		}else{
			echo $up->getErrorMsg();
		}
