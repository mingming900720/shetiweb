<?php
	require "FileUpload.class.php";

	$up=new FileUpload(array('isRandName'=>true,'allowType'=>array('txt', 'doc', 'jpg', 'gif'),'FilePath'=>'/home/wwwroot/default/shangchuan/uploads/', 'MAXSIZE'=>200000));

	echo '<pre>';
	if($up->uploadFile('spic')){
		print_r($up->getNewFileName());
	}else{
		print_r($up->getErrorMsg());	
	}
	
	echo '</pre>';
		